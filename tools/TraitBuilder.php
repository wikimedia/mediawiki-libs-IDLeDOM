<?php

namespace Wikimedia\IDLeDOM\Tools;

use Wikimedia\Assert\Assert;

/**
 * This class builds PHP traits which can be used to ease the implementation
 * of the DOM interface classes.  DOM implementations aren't under any
 * obligation to use these traits.
 */
class TraitBuilder extends Builder {
	/**
	 * Helper method: generates a typical trait start.
	 * @param string $topName The class name
	 */
	protected function firstLine( string $topName ): void {
		$this->e->phpPrologue( 'Wikimedia\IDLeDOM\Stubs' );

		$this->e->emitMarker( 'UseStatements' );
		$this->nl();
		$this->nl( "trait $topName {" );
	}

	private function callbackHelper( string $topName, string $name, array $m ): void {
		Assert::invariant(
			( $m['special'] ?? '' ) === '', "Special callback method?"
		);
		foreach ( $m['arguments'] as $a ) {
			Assert::invariant(
				!( $a['variadic'] ?? false ), "Variadic not yet implemented"
			);
		}
		$r = InterfaceBuilder::memberOperationHelper( $this->gen, $topName, $name, $m );
		// Record types used, so we can generate proper import statements
		$this->use( $m['idlType'] );
		foreach ( $m['arguments'] as $a ) {
			$this->use( $a['idlType'] );
		}

		$this->nl( '/**' );
		$this->nl( ' * Make this callback interface callable.' );
		$this->nl( ' * @param mixed ...$args' );
		$this->nl( " * @return {$r['retTypeDoc']}" );
		$this->nl( ' */' );
		$this->nl( 'public function __invoke( ...$args ) {' );
		$this->nl( "{$r['return']}\$this->{$r['funcName']}({$r['invokeArgs']});" );
		$this->nl( '}' );
		$this->nl();
		$this->nl( '/**' );
		foreach ( $r['paramDocs'] as $a ) {
			$this->nl( " * @param $a" );
		}
		$this->nl( " * @return {$r['retTypeDoc']}" );
		$this->nl( ' */' );
		$this->nl( "abstract public function {$r['funcName']}({$r['phpArgs']}) : {$r['retType']};" );
		$this->nl();

		$this->nl( '/**' );
		$this->nl( " * Create a $topName from a callable." );
		$this->nl( ' *' );
		$this->nl( " * @param callable|\\Wikimedia\\IDLeDOM\\$topName \$f" );
		$this->nl( " * @return \\Wikimedia\\IDLeDOM\\$topName" );
		$this->nl( ' */' );
		$cast = $this->map( $topName, 'op', '_cast' );
		$this->nl( "public static function $cast( \$f ): \\Wikimedia\\IDLeDOM\\$topName {" );
		$this->nl( "if ( \$f instanceof \\Wikimedia\\IDLeDOM\\$topName ) {" );
		$this->nl( 'return $f;' );
		$this->nl( '}' );
		$this->nl( "return new class( \$f ) implements \\Wikimedia\\IDLeDOM\\$topName {" );
		$this->nl( "use $topName;" );
		$this->nl();
		$this->nl( '/** @var callable */' );
		$this->nl( 'private $f;' );
		$this->nl();
		$this->nl( '/**' );
		$this->nl( ' * @param callable $f' );
		$this->nl( ' */' );
		$this->nl( 'public function __construct( $f ) {' );
		$this->nl( '$this->f = $f;' );
		$this->nl( '}' );
		$this->nl();
		$this->nl( '/**' );
		foreach ( $r['paramDocs'] as $a ) {
			$this->nl( " * @param $a" );
		}
		$this->nl( " * @return {$r['retTypeDoc']}" );
		$this->nl( ' */' );
		$this->nl( "public function {$r['funcName']}({$r['phpArgs']}) : {$r['retType']} {" );
		$this->nl( '$f = $this->f;' );
		$this->nl( "{$r['return']}\$f({$r['castArgs']});" );
		$this->nl( '}' );
		$this->nl( '};' );
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitCallback( string $topName, array $def ):void {
		$this->firstLine( $topName );
		$this->callbackHelper( $topName, '_invoke', $def );
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitCallbackInterface( string $topName, array $def ):void {
		// Find the callback method
		$m = null;
		foreach ( $def['members'] as $mm ) {
			if ( $mm['type'] === 'operation' ) {
				Assert::invariant( $m === null, "Too many operations!" );
				$m = $mm;
			}
		}
		Assert::invariant( $m !== null, "Couldn't find operation!" );

		$this->firstLine( $topName );
		$this->callbackHelper( $topName, $m['name'], $m );
		$this->nl( '}' );
	}

	private function collectAttributes( string $topName, array $typeOpts, array &$attrs ) {
		foreach ( $this->gen->mixins( $topName ) as $m ) {
			$this->collectAttributes( $m, $typeOpts, $attrs );
		}
		$def = $this->gen->def( $topName );
		'@phan-var array $def'; // @var array $def
		foreach ( $def['members'] as $m ) {
			if ( $m['type'] === 'attribute' || $m['type'] === 'field' ) {
				$readonly = $m['readonly'] ?? false;
				$attrs[] = [
					'topName' => $topName,
					'type' => $m['type'],
					'name' => $m['name'],
					'idlType' => $m['idlType'],
					'readonly' => $readonly,
					'docType' => $this->gen->typeToPHPDoc( $m['idlType'], $typeOpts ),
					'phpType' => $this->gen->typeToPHP( $m['idlType'], $typeOpts ),
					'getter' => $this->map( $topName, 'get', $m['name'] ),
					'setter' => $readonly ? null :
						$this->map( $topName, 'set', $m['name'] ),
				];
			}
		}
	}

	/** @inheritDoc */
	protected function emitInterface( string $topName, array $def ):void {
		$typeOpts = [ 'topName' => $topName ];
		/* Only create helpers for interface which contain attributes */
		$attrs = [];
		$this->collectAttributes( $topName, $typeOpts, $attrs );
		if ( count( $attrs ) === 0 ) {
			parent::emitInterface( $topName, $def );
			return;
		}
		$needsSetter = false;
		foreach ( $attrs as $a ) {
			if ( !$a['readonly'] ) {
				$needsSetter = true;
				break;
			}
		}

		$this->firstLine( $topName );

		/* Create magic method __get dispatcher */
		$this->nl( '/**' );
		$this->nl( ' * @param string $name' );
		$this->nl( ' * @return mixed' );
		$this->nl( ' */' );
		$this->nl( 'public function __get( string $name ) {' );
		$this->nl( 'switch ( $name ) {' );
		foreach ( $attrs as $a ) {
			$name = $a['name'];
			$getter = $a['getter'];
			$this->nl( 'case ' . json_encode( $name ) . ':' );
			$this->nl( "\treturn \$this->$getter();" );
		}
		$this->nl( 'default:' );
		$this->nl( "\tbreak;" );
		$this->nl( '}' );
		$this->nl( '$trace = debug_backtrace();' );
		$this->nl( 'trigger_error(' );
		$this->nl( "\t'Undefined property via __get(): ' . \$name ." );
		$this->nl( "\t' in ' . \$trace[0]['file'] ." );
		$this->nl( "\t' on line ' . \$trace[0]['line']," );
		$this->nl( "\tE_USER_NOTICE" );
		$this->nl( ');' );
		$this->nl( 'return null;' );
		$this->nl( '}' );
		$this->nl();

		/* Create magic method __set dispatcher */
		if ( $needsSetter ) {
			$this->nl( '/**' );
			$this->nl( ' * @param string $name' );
			$this->nl( ' * @param mixed $value' );
			$this->nl( ' */' );
			$this->nl( 'public function __set( string $name, mixed $value ) : void {' );
			$this->nl( 'switch ( $name ) {' );
			foreach ( $attrs as $a ) {
				if ( $a['readonly'] ) {
					continue;
				}
				$name = $a['name'];
				$setter = $a['setter'];
				$this->nl( 'case ' . json_encode( $name ) . ':' );
				$this->nl( "\t\$this->$setter( \$value );" );
				$this->nl( "\treturn;" );
			}
			$this->nl( 'default:' );
			$this->nl( "\tbreak;" );
			$this->nl( '}' );
			$this->nl( '$trace = debug_backtrace();' );
			$this->nl( 'trigger_error(' );
			$this->nl( "\t'Undefined property via __set(): ' . \$name ." );
			$this->nl( "\t' in ' . \$trace[0]['file'] ." );
			$this->nl( "\t' on line ' . \$trace[0]['line']," );
			$this->nl( "\tE_USER_NOTICE" );
			$this->nl( ');' );
			$this->nl( '}' );
			$this->nl();
		}

		/** Create abstract methods for getters and setters */
		foreach ( $attrs as $a ) {
			$this->nl( '/**' );
			$this->nl( " * @return {$a['docType']}" );
			$this->nl( ' */' );
			$this->nl( "abstract public function {$a['getter']}() : {$a['phpType']};" );
			$this->nl();
			$this->use( $a['idlType'], $typeOpts );
			if ( $a['readonly'] ) {
				continue;
			}
			$this->nl( '/**' );
			$this->nl( " * @param {$a['docType']} \$value" );
			$this->nl( ' */' );
			$this->nl( "abstract public function {$a['setter']}( {$a['phpType']} \$value ) : void;" );
			$this->nl();
		}

		$this->nl( '}' );
	}
}
