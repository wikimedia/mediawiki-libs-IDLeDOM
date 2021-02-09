<?php

namespace Wikimedia\IDLeDOM\Tools;

use Wikimedia\Assert\Assert;
use Wikimedia\WebIDL\WebIDL;

class Generator {
	/** @var array */
	private $ast;
	/** @var array */
	private $options;
	/** @var array */
	private $mixins = [];
	/** @var array */
	private $defs = [];
	/** @var array */
	private $nameMap = [];

	private const RESERVED_NAMES = [
		// PHP keywords and compile-time constants.
		// As of PHP 7.0.0, all keywords other than `class` are allowed
		// as property, constant, and method names of classes, interfaces
		// and traits.
		// All compile-time constants start with `__`, which is separately
		// reserved as a prefix.
		// https://www.php.net/manual/en/reserved.keywords.php
		'class',
		// Predefined constants:
		// https://www.php.net/manual/en/reserved.constants.php
		'PHP_VERSION',
		'PHP_MAJOR_VERSION',
		'PHP_MINOR_VERSION',
		'PHP_RELEASE_VERSION',
		'PHP_VERSION_ID',
		'PHP_EXTRA_VERSION',
		'PHP_ZTS',
		'PHP_DEBUG',
		'PHP_MAXPATHLEN',
		'PHP_OS',
		'PHP_OS_FAMILY',
		'PHP_SAPI',
		'PHP_EOL',
		'PHP_INT_MAX',
		'PHP_INT_MIN',
		'PHP_INT_SIZE',
		'PHP_FLOAT_DIG',
		'PHP_FLOAT_EPSILON',
		'PHP_FLOAT_MIN',
		'PHP_FLOAT_MAX',
		'DEFAULT_INCLUDE_PATH',
		'PEAR_INSTALL_DIR',
		'PEAR_EXTENSION_DIR',
		'PHP_EXTENSION_DIR',
		'PHP_PREFIX',
		'PHP_BINDIR',
		'PHP_BINARY',
		'PHP_MANDIR',
		'PHP_LIBDIR',
		'PHP_DATADIR',
		'PHP_SYSCONFDIR',
		'PHP_LOCALSTATEDIR',
		'PHP_CONFIG_FILE_PATH',
		'PHP_CONFIG_FILE_SCAN_DIR',
		'PHP_SHLIB_SUFFIX',
		'PHP_FD_SETSIZE',
		'E_ERROR',
		'E_WARNING',
		'E_PARSE',
		'E_NOTICE',
		'E_CORE_ERROR',
		'E_CORE_WARNING',
		'E_COMPILE_ERROR',
		'E_COMPILE_WARNING',
		'E_USER_ERROR',
		'E_USER_WARNING',
		'E_USER_NOTICE',
		'E_RECOVERABLE_ERROR',
		'E_DEPRECATED',
		'E_USER_DEPRECATED',
		'E_ALL',
		'E_STRICT',
		'__COMPILER_HALT_OFFSET__',
		'true',
		'false',
		'null',
		'PHP_WINDOWS_EVENT_CTRL_C',
		'PHP_WINDOWS_EVENT_CTRL_BREAK',
		// Other reserved words
		// https://www.php.net/manual/en/reserved.other-reserved-words.php
		'int', 'float', 'bool', 'string', 'true', 'false', 'null',
		'void', 'iterable', 'object', 'resource', 'mixed', 'numeric',
	];

	/**
	 * Construct a new generator.
	 * @param array $ast
	 * @param array $options
	 */
	private function __construct( array $ast, array $options = [] ) {
		$this->ast = $ast;
		$this->options = $options;
		foreach ( $ast as $definition ) {
			if ( $definition['type'] === 'includes' ) {
				// Collect mixins
				$this->mixins[$definition['target']][] = $definition['includes'];
			} else {
				$name = $definition['name'];
				Assert::invariant(
					!array_key_exists( $name, $this->defs ),
					"Duplicate definition for $name"
				);
				$this->defs[$name] = $definition;
			}
		}
		// Sort definitions so that name resolution is deterministic
		ksort( $this->defs );
		foreach ( $this->defs as $name => $def ) {
			if ( array_key_exists( $name, $this->mixins ) ) {
				sort( $this->mixins[$name] ); // sort mixins
			}
		}
		// Resolve name conflicts
		$done = [];
		foreach ( $this->defs as $name => $def ) {
			$this->resolveNames( $def, $done );
		}
	}

	private function resolveNames( array $def, array &$done ): array {
		$topName = $def['name'];
		$allNames = [];
		// Ensure each definition is only resolved once
		if ( array_key_exists( $topName, $done ) ) {
			return $done[$topName];
		}
		$done[$topName] = true; // will overwrite this
		// Resolve the names in this class
		$used = [];
		foreach ( self::RESERVED_NAMES as $n ) {
			$used[$n] = true;
		}
		$findName = function ( $n ) use ( &$used, &$allNames ) {
			if ( $used[$n] ?? false ) {
				for ( $i = 1; ; $i++ ) {
					$n2 = "idl" . str_repeat( '_', $i ) . $n;
					if ( !( $used[$n2] ?? false ) ) {
						$n = $n2;
						break;
					}
				}
			}
			Assert::invariant( !( $used[$n] ?? false ), "$n should be unused" );
			$used[$n] = true;
			$allNames[] = $n;
			return $n;
		};
		// If there are mixins, resolve names in the mixins first
		foreach ( $this->mixins[$topName] ?? [] as $m ) {
			foreach ( $this->resolveNames( $this->defs[$m], $done ) as $mname ) {
				$r = $findName( $mname );
				Assert::invariant( $r == $mname, "Mixins shouldn't conflict" );
			}
		}
		// Move on to members of this type.
		if ( $def['type'] === 'callback' ) {
			// Callbacks have a synthetic 'invoke' method.
			$this->nameMap["$topName:op:_invoke"] = $findName( "invoke" );
			$done[$topName] = $allNames;
			return $allNames;
		}
		if ( $def['type'] === 'enum' ) {
			// Treat enumerations like interfaces with const members
			foreach ( $def['values'] as $m ) {
				$name = $m['value'];
				$this->nameMap["$topName:const:$name"] = $findName( $name );
			}
			$done[$topName] = $allNames;
			return $allNames;
		}
		Assert::invariant(
			array_key_exists( 'members', $def ),
			"$topName doesn't have members!"
		);
		// First resolve constants
		foreach ( $def['members'] as $m ) {
			if ( $m['type'] === 'const' ) {
				$name = $m['name'];
				$this->nameMap["$topName:const:$name"] = $findName( $name );
			}
		}
		// Dictionaries and callback interfaces have a special 'cast' method
		if ( $def['type'] === 'dictionary' ||
			 $def['type'] === 'callback' ||
			 $def['type'] === 'callback interface' ) {
			$this->nameMap["$topName:op:_cast"] = $findName( "cast" );
		}
		// Then attribute getters/setters (including dictionary getters/setters)
		foreach ( $def['members'] as $m ) {
			if ( $m['type'] === 'attribute' || $m['type'] === 'field' ) {
				$name = $m['name'];
				$this->nameMap["$topName:get:$name"] =
					$findName( 'get' . ucfirst( $name ) );
				$this->nameMap["$topName:set:$name"] =
					$findName( 'set' . ucfirst( $name ) );
			}
		}
		// Then operations
		foreach ( $def['members'] as $m ) {
			if ( $m['type'] === 'operation' ) {
				$name = $m['name'];
				$this->nameMap["$topName:op:$name"] =
					$findName( $name );
			}
		}
		$done[$topName] = $allNames;
		return $allNames;
	}

	private function firstLine( string $type, string $topName, callable $emit ):void {
		$firstLine = "$type $topName";
		$mixins = $this->mixins[$topName] ?? [];
		if ( count( $mixins ) ) {
			$firstLine .= " extends " . implode( ', ', $mixins );
		}
		$emit( "$firstLine {" );
	}

	private function typeIncludes( array $ty, string $which ) {
		if ( $ty['union'] ?? false ) {
			foreach ( $ty['idlType'] as $subtype ) {
				if ( $this->typeIncludes( $subtype, $which ) ) {
					return true;
				}
			}
			return false;
		}
		$generic = $ty['generic'] ?? '';
		if ( $generic !== '' ) {
			return false;
		}
		if ( !array_key_exists( $ty['idlType'], $this->defs ) ) {
			return false;
		}
		$d = $this->defs[$ty['idlType']] ?? null;
		return $d && $d['type'] === $which;
	}

	private function typeToPHPDoc( array $ty, array $opts = [] ):string {
		return $this->typeToPHP( $ty, [
			'phpdoc' => true,
		] + $opts );
	}

	private function typeToPHP( array $ty, array $opts = [] ):string {
		$phpdoc = $opts['phpdoc'] ?? false;
		$n = ( $ty['nullable'] ?? false ) ? '?' : '';
		if ( $ty['union'] ?? false ) {
			if ( !$phpdoc ) {
				return $n . 'mixed';
			}
			$result = implode( '|', array_map( function ( $ty ) {
				return $this->typeToPHPDoc( $ty );
			}, $ty['idlType'] ) );
			if ( $ty['nullable'] ?? false ) {
				$result .= '|null';
			}
			return $result;
		}
		$generic = $ty['generic'] ?? '';
		switch ( $generic ) {
		case 'sequence':
			if ( !$phpdoc ) {
				return 'array';
			}
			return $n . 'list<' . $this->typeToPHPDoc( $ty['idlType'][0] ) . '>';
		case '':
			break;
		default:
			self::unreachable( "Unknown generic type: $generic" );
		}

		if ( array_key_exists( $ty['idlType'], $this->defs ) ) {
			// An object type
			$result = $ty['idlType'];
			$extraType = null;
			if ( $this->typeIncludes( $ty, 'enum' ) ) {
				$result = 'int'; // enumerations are integers
			}
			if ( $this->typeIncludes( $ty, 'dictionary' ) ) {
				$extraType = 'associative-array';
			}
			if ( $this->typeIncludes( $ty, 'callback' ) ||
				 $this->typeIncludes( $ty, 'callback interface' ) ) {
				$extraType = 'callable';
			}
			if ( $extraType ) {
				if ( !$phpdoc ) {
					return $n . "mixed";
				}
				return "$result|$extraType" . ( $n === '' ? '' : '|null' );
			}
			return $n . $result;
		}
		switch ( $ty['idlType'] ) {
		case 'any':
			return '?mixed';
		case 'void':
			self::unreachable( "void is now 'undefined'" );
		case 'undefined':
			if ( $opts['returnType'] ?? false ) {
				return 'void';
			}
			if ( $phpdoc ) {
				return 'null';
			}
			return 'mixed'; // bail
		case 'boolean':
			return $n . 'bool';
		case 'octet':
		case 'short':
		case 'unsigned short':
		case 'long':
		case 'unsigned long':
			return $n . 'int';
		case 'float':
			return $n . 'float';
		case 'DOMString':
			return $n . 'string';
		case 'USVString':
			return $n . 'string'; // XXX?
		// More ad-hoc object types
		case 'unrestricted double':
			return $n . 'float';
		case 'DOMHighResTimeStamp':
		case 'EventHandler':
		case 'HTMLSlotElement':
			return $n . $ty['idlType']; // XXX
		default:
			self::unreachable( "Unknown type " . var_export( $ty, true ) );
		}
	}

	private function valueToPHP( array $val, array $opts = [] ):string {
		switch ( $val['type'] ) {
		case 'number':
			return $val['value'];
		case 'boolean':
			return $val['value'] ? 'true' : 'false';
		case 'null':
			return 'null';
		default:
			self::unreachable( "Unknown value type " . var_export( $val, true ) );
		}
		return '<broken>';
	}

	private function emitMemberConstructor( string $topName, array $m, callable $emit ) {
	}

	private function emitMemberAttribute( string $topName, array $m, callable $emit ) {
		// Getter
		$attr = $m['name'];
		$getter = $this->nameMap["$topName:get:$attr"];
		$docType = $this->typeToPHPDoc( $m['idlType'] );
		$phpType = $this->typeToPHP( $m['idlType'] );
		$emit( '/**' );
		$emit( " * @return $docType" );
		$emit( ' */' );
		$emit( "public function $getter() : $phpType;" );
		if ( $m['readonly'] ?? false ) {
			return;
		}
		$emit( '' );
		// Setter
		$setter = $this->nameMap["$topName:set:$attr"];
		$emit( '/**' );
		$emit( " * @param $docType \$val" );
		$emit( ' */' );
		$emit( "public function $setter( $phpType \$val ) : void;" );
	}

	private function emitMemberOperation( string $topName, array $m, callable $emit ) {
		$special = $m['special'] ?? '';
		if ( $special !== '' ) {
			return; // XXX special methods not yet supported
		}
		$op = $m['name'];
		$funcName = $this->nameMap["$topName:op:$op"];
		$retTypeDoc = $this->typeToPHPDoc( $m['idlType'], [ 'returnType' => true ] );
		$retType = $this->typeToPHP( $m['idlType'], [ 'returnType' => true ] );
		$paramDocs = [];
		$phpArgs = [];
		foreach ( $m['arguments'] as $a ) {
			$v = ( $a['variadic'] ?? false ) ? '...' : '';
			$ty = $a['idlType'];
			$default = '';
			if ( $a['optional'] ?? false ) {
				// If a value is optional but has no default, then broaden the
				// type to allow null and make the default null.
				// Similarly for dictionary types, use null as the default.
				if ( ( $a['default'] ?? null ) === null ||
					( $a['default']['type'] ?? null ) === 'dictionary' ) {
					$ty['nullable'] = true;
					$default = ' = null';
				} else {
					$default = ' = ' . $this->valueToPHP( $a['default'] );
				}
			}
			$paramDocs[] = $this->typeToPHPDoc( $ty ) .
						" $v\$" . $a['name'];
			$phpArgs[] = $this->typeToPHP( $ty ) .
					  " $v\$" . $a['name'] . $default;
		}
		$phpArgs = count( $phpArgs ) ? ( ' ' . implode( ', ', $phpArgs ) . ' ' ) : '';

		$emit( '/**' );
		foreach ( $paramDocs as $a ) {
			$emit( " * @param $a" );
		}
		$emit( " * @return $retTypeDoc" );
		$emit( ' */' );
		$emit( "public function $funcName($phpArgs) : $retType;" );
	}

	private function emitMemberConst( string $topName, array $m, callable $emit ) {
		$name = $m['name'];
		$name = $this->nameMap["$topName:const:$name"];
		$docType = $this->typeToPHPDoc( $m['idlType'] );
		$val = $this->valueToPHP( $m['value'] );
		$emit( "/** @var $docType */" );
		$emit( "public const $name = $val;" );
	}

	private function emitMemberIterable( string $topName, array $m, callable $emit ) {
	}

	private function emitMember( string $topName, array $m, callable $emit ) {
		if ( $this->options['skipLegacy'] ?? false ) {
			foreach ( $m['trailingComments'] ?? [] as $c ) {
				if ( preg_match( '|^// legacy|', $c ) ) {
					return; // skip this legacy member
				}
			}
		}
		$methodName = 'emitMember' .
			str_replace( ' ', '', ucwords( $m['type'] ) );
		$this->$methodName( $topName, $m, $emit );
		$emit( '' );
	}

	private function emitInterface( array $def, callable $emit ): void {
		$topName = $def['name'];
		$this->firstLine( 'interface', $topName, $emit );
		foreach ( $def['members'] as $m ) {
			$this->emitMember( $topName, $m, $emit );
		}
		$emit( '}' );
	}

	private function emitDictionary( array $def, callable $emit ): void {
		$topName = $def['name'];
		$this->firstLine( 'interface', $topName, $emit );
		foreach ( $def['members'] as $m ) {
			// Treat as pseudo-attributes
			$this->emitMemberAttribute( $topName, [
				'readonly' => true,
			] + $m, $emit );
			$emit( '' );
		}
		$emit( '}' );
	}

	private function emitCallbackInterface( array $def, callable $emit ): void {
		$topName = $def['name'];
		$this->firstLine( 'interface', $topName, $emit );
		foreach ( $def['members'] as $m ) {
			$this->emitMember( $topName, $m, $emit );
		}
		// XXX this should have a static cast(callable):$topName method
		// XXX this should also have an __invoke method
		$emit( '}' );
	}

	private function emitInterfaceMixin( array $def, callable $emit ): void {
		$this->emitInterface( $def, $emit );
	}

	private function emitCallback( array $def, callable $emit ): void {
		$topName = $def['name'];
		$this->firstLine( 'interface', $topName, $emit );
		$this->emitMemberOperation( $topName, [
			'name' => '_invoke',
			'idlType' => $def['idlType'],
			'arguments' => $def['arguments'],
		], $emit );
		// XXX this should have a static cast(callable):$topName method
		// XXX this should also have an __invoke method to make it callable
		$emit( '}' );
	}

	private function emitEnum( array $def, callable $emit ): void {
		$topName = $def['name'];
		$this->firstLine( 'class', $topName, $emit );
		// Treat enumerations like interfaces with const members
		$val = 0;
		foreach ( $def['values'] as $m ) {
			$name = $m['value'];
			$name = $this->nameMap["$topName:const:$name"];
			$emit( "public const $name = $val;" );
			$val += 1;
		}
		$emit( '}' );
	}

	private function genOne( array $def ) : string {
		$out = '';
		$indentLevel = 0;
		$wasNL = false;
		$emit = function ( $s ) use( &$out, &$indentLevel, &$wasNL ) {
			if ( $s === '}' ) {
				$indentLevel -= 1;
			}
			if ( preg_match( '/^\s*$/', $s ) ) {
				if ( !$wasNL ) {
					$out .= "\n";
					$wasNL = true;
				}
			} else {
				$out .= str_repeat( "\t", $indentLevel ) . $s . "\n";
				$wasNL = false;
			}
			if ( substr( $s, -1 ) === '{' ) {
				$indentLevel += 1;
			}
		};

		$emit( '<?php' );
		$emit( '' );
		$emit( '// AUTOMATICALLY GENERATED.  DO NOT EDIT.' );
		$emit( '// Use `composer build` to regenerate.' );
		$emit( '' );
		$emit( 'namespace Wikimedia\IDLeDOM;' );
		$emit( '' );

		$methodName = 'emit' . str_replace( ' ', '', ucwords( $def['type'] ) );
		$this->$methodName( $def, $emit );

		return $out;
	}

	/**
	 * Write out the generated interfaces to the given directory.
	 * @param string $dir
	 */
	public function write( string $dir ): void {
		foreach ( $this->defs as $name => $def ) {
			$filename = $dir . "/$name.php";
			$out = $this->genOne( $def );
			file_put_contents( $filename, $out );
		}
	}

	/**
	 * This is a workaround while we wait for wikimedia/assert 0.5.1 to
	 * be released.
	 * @param string $reason
	 */
	private static function unreachable( string $reason = "should never happen" ) {
		// @phan-suppress-next-line PhanImpossibleCondition
		Assert::invariant( false, $reason );
	}

	/** Main entry point: generates DOM interfaces from WebIDL */
	public static function main() {
		$filename = __DIR__ . "/../spec/DOM.webidl";
		$idl = WebIDL::parse( file_get_contents( $filename ), [
			'keepComments' => true
		] );
		$options = [
			'skipLegacy' => true,
		];
		( new Generator( $idl, $options ) )->write( __DIR__ . '/../src' );
	}
}
