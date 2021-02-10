<?php

namespace Wikimedia\IDLeDOM\Tools;

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
		$this->nl( '/**' );
		$this->nl( " * @return $docType" );
		$this->nl( ' */' );
		$this->nl( "public function $getter() : $phpType;" );
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

	/** @inheritDoc */
	protected function emitMemberOperation( string $topName, string $name, array $m ) {
		$special = $m['special'] ?? '';
		if ( $special !== '' ) {
			return; // XXX special methods not yet supported
		}
		$funcName = $this->map( $topName, 'op', $name );
		$retTypeDoc = $this->gen->typeToPHPDoc( $m['idlType'], [ 'returnType' => true ] );
		$retType = $this->gen->typeToPHP( $m['idlType'], [ 'returnType' => true ] );
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
					$default = ' = ' . $this->gen->valueToPHP( $a['default'] );
				}
			}
			$paramDocs[] = $this->gen->typeToPHPDoc( $ty ) .
						" $v\$" . $a['name'];
			$phpArgs[] = $this->gen->typeToPHP( $ty ) .
					  " $v\$" . $a['name'] . $default;
		}
		$phpArgs = count( $phpArgs ) ? ( ' ' . implode( ', ', $phpArgs ) . ' ' ) : '';

		$this->nl( '/**' );
		foreach ( $paramDocs as $a ) {
			$this->nl( " * @param $a" );
		}
		$this->nl( " * @return $retTypeDoc" );
		$this->nl( ' */' );
		$this->nl( "public function $funcName($phpArgs) : $retType;" );
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
		$this->firstLine( 'interface', $topName );
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
		// XXX this should have a static cast(callable):$topName method
		// XXX this should also have an __invoke method
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
		// XXX this should have a static cast(callable):$topName method
		// XXX this should also have an __invoke method to make it callable
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
	 */
	protected function firstLine( string $type, string $topName ): void {
		$this->e->phpPrologue( 'Wikimedia\IDLeDOM' );

		$firstLine = "$type $topName";
		$mixins = $this->gen->mixins( $topName );
		if ( count( $mixins ) ) {
			$firstLine .= " extends " . implode( ', ', $mixins );
		}
		$this->nl( "$firstLine {" );
	}
}
