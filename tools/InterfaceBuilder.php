<?php

namespace Wikimedia\IDLeDOM\Tools;

/**
 * This class builds PHP interfaces. These are completely generic, and
 * should be implemented by any DOM implementation compliant with our
 * WebIDL mapping.
 */
class InterfaceBuilder extends Builder {

	/** @inheritDoc */
	protected function emitMemberConstructor( string $topName, string $name, array $m ) {
		/* skip */
	}

	/** @inheritDoc */
	protected function emitMemberAttribute( string $topName, string $name, array $m ) {
		// Getter
		$getter = $this->map( $topName, 'get', $name );
		$docType = $this->gen->typeToPHPDoc( $m['idlType'] );
		$phpType = $this->gen->typeToPHP( $m['idlType'] );
		$retType = $this->gen->typeToPHP( $m['idlType'], [ 'returnType' => true ] );
		$this->nl( '/**' );
		$this->nl( " * @return $docType" );
		$this->nl( ' */' );
		$this->nl( "public function $getter()$retType;" );
		if ( $m['readonly'] ?? false ) {
			return;
		}
		$this->nl();
		// Setter
		$setter = $this->map( $topName, 'set', $name );
		$this->nl( '/**' );
		$this->nl( " * @param $docType \$val" );
		$this->nl( ' */' );
		$this->nl( "public function $setter( $phpType \$val ) : void;" );
	}

	/**
	 * A helper method to compute argument types and properties for a
	 * WebIDL operation.
	 * @param Generator $gen
	 * @param string $topName
	 * @param string $name
	 * @param array $m The WebIDL AST for the operation
	 * @return array
	 */
	public static function memberOperationHelper( Generator $gen, string $topName, string $name, array $m ): array {
		$typeOpts = [ 'topName' => $topName ];
		$funcName = $gen->map( $topName, 'op', $name );
		$retTypeDoc = $gen->typeToPHPDoc( $m['idlType'], [ 'returnType' => true ] + $typeOpts );
		$retType = $gen->typeToPHP( $m['idlType'], [ 'returnType' => true ] + $typeOpts );
		$paramDocs = [];
		$phpArgs = [];
		$invokeArgs = [];
		$castArgs = [];
		$i = 0;
		foreach ( $m['arguments'] as $a ) {
			$v = ( $a['variadic'] ?? false ) ? '...' : '';
			$ty = $a['idlType'];
			$declareDefault = '';
			$invokeDefault = '';
			if ( $a['optional'] ?? false ) {
				// If a value is optional but has no default, then broaden the
				// type to allow null and make the default null.
				// Similarly for dictionary types, use null as the default.
				if ( ( $a['default'] ?? null ) === null ||
					( $a['default']['type'] ?? null ) === 'dictionary' ) {
					$ty['nullable'] = true;
					$declareDefault = ' = null';
					$invokeDefault = ' ?? null';
				} else {
					$val = $gen->valueToPHP( $a['default'] );
					$declareDefault = " = $val";
					$invokeDefault = " ?? $val";
				}
			}
			$paramDocs[] = $gen->typeToPHPDoc( $ty, $typeOpts ) .
						" $v\$" . $a['name'];
			$phpArgs[] = $gen->typeToPHP( $ty, $typeOpts ) .
					  " $v\$" . $a['name'] . $declareDefault;
			$invokeArgs[] = "\$args[$i]$invokeDefault";
			$castArgs[] = $v . '$' . $a['name'];
			$i++;
		}
		$phpArgs = count( $phpArgs ) ? ( ' ' . implode( ', ', $phpArgs ) . ' ' ) : '';
		$invokeArgs = count( $invokeArgs ) ? ( ' ' . implode( ', ', $invokeArgs ) . ' ' ) : '';
		$castArgs = count( $castArgs ) ? ( ' ' . implode( ', ', $castArgs ) . ' ' ) : '';

		return [
			'funcName' => $funcName,
			'phpArgs' => $phpArgs,
			'invokeArgs' => $invokeArgs,
			'castArgs' => $castArgs,
			'paramDocs' => $paramDocs,
			'retType' => $retType,
			'retTypeDoc' => $retTypeDoc,
			'return' => ( $retType === ' : void' ) ? '' : 'return ',
		];
	}

	/** @inheritDoc */
	protected function emitMemberOperation( string $topName, string $name, array $m ) {
		$special = $m['special'] ?? '';
		if ( $special !== '' ) {
			return; // XXX special methods not yet supported
		}
		$r = self::memberOperationHelper( $this->gen, $topName, $name, $m );
		$this->nl( '/**' );
		foreach ( $r['paramDocs'] as $a ) {
			$this->nl( " * @param $a" );
		}
		$this->nl( " * @return {$r['retTypeDoc']}" );
		$this->nl( ' */' );
		$this->nl( "public function {$r['funcName']}({$r['phpArgs']}){$r['retType']};" );
	}

	/** @inheritDoc */
	protected function emitMemberConst( string $topName, string $name, array $m ) {
		$constName = $this->map( $topName, 'const', $name );
		$docType = $this->gen->typeToPHPDoc( $m['idlType'] );
		$val = $this->gen->valueToPHP( $m['value'] );
		$this->nl( "/** @var $docType */" );
		$this->nl( "public const $constName = $val;" );
	}

	/** @inheritDoc */
	protected function emitMemberIterable( string $topName, string $name, array $m ) {
		/* not yet implemented */
	}

	/** @inheritDoc */
	protected function emitInterface( string $topName, array $def ): void {
		$this->firstLine( 'interface', $topName );
		foreach ( $def['members'] as $m ) {
			$this->emitMember( $topName, $m );
		}
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitDictionary( string $topName, array $def ): void {
		// Only the top-level dictionary needs to extend \ArrayAccess;
		// child classes will pick it up from the parent.
		$extendArray = ( $def['inheritance'] ?? null ) === null;
		$this->firstLine( 'interface', $topName, $extendArray );
		foreach ( $def['members'] as $m ) {
			// Treat as pseudo-attributes
			$this->emitMemberAttribute( $topName, $m['name'], [
				'readonly' => true,
			] + $m );
			$this->nl();
		}
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitCallbackInterface( string $topName, array $def ): void {
		$this->firstLine( 'interface', $topName );
		foreach ( $def['members'] as $m ) {
			$this->emitMember( $topName, $m );
		}
		// static cast() method and __invoke are in the helper trait
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitInterfaceMixin( string $topName, array $def ): void {
		$this->emitInterface( $topName, $def );
	}

	/** @inheritDoc */
	protected function emitCallback( string $topName, array $def ): void {
		$this->firstLine( 'interface', $topName );
		$this->emitMemberOperation( $topName, '_invoke', [
			'idlType' => $def['idlType'],
			'arguments' => $def['arguments'],
		] );
		// static cast() method and __invoke are in the helper trait
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitEnum( string $topName, array $def ): void {
		$this->firstLine( 'class', $topName );
		// Treat enumerations like interfaces with const members
		$val = 0;
		foreach ( $def['values'] as $m ) {
			$name = $m['value'];
			$name = $this->map( $topName, 'const', $name );
			$this->nl( "public const $name = $val;" );
			$val += 1;
		}
		$this->nl( '}' );
	}

	/**
	 * Helper method: generates a typical class/interface start.
	 * @param string $type Class/interface/etc
	 * @param string $topName The class name
	 * @param bool $extendArray Whther the interface should extend \ArrayAccess
	 */
	protected function firstLine( string $type, string $topName, bool $extendArray = false ): void {
		$this->e->phpPrologue( 'Wikimedia\IDLeDOM' );

		$firstLine = "$type $topName";
		$mixins = $this->gen->mixins( $topName );
		if ( $extendArray ) {
			$mixins[] = '\ArrayAccess';
		}
		if ( count( $mixins ) ) {
			$firstLine .= " extends " . implode( ', ', $mixins );
		}
		$this->nl( "$firstLine {" );
	}
}
