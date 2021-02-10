<?php

namespace Wikimedia\IDLeDOM\Tools;

/**
 * This class builds PHP traits which stub out every method in the
 * interface.  A mature implementation isn't expected to need these,
 * but it can be helpful when building a new implementation.
 */
class StubBuilder extends Builder {
	/**
	 * Helper method: generates a typical trait start.
	 * @param string $topName The class name
	 */
	protected function firstLine( string $topName ): void {
		$this->e->phpPrologue( 'Wikimedia\IDLeDOM\Stub' );

		$this->e->emitMarker( 'UseStatements' );
		$this->nl();
		$this->nl( "trait $topName {" );
		$mixins = $this->gen->mixins( $topName );
		if ( count( $mixins ) ) {
			foreach ( $mixins as $m ) {
				$this->nl( "use \\Wikimedia\\IDLeDOM\\Stub\\$m;" );
			}
		}
		$this->nl();
		$this->nl( '/**' );
		$this->nl( ' * @return \Exception' );
		$this->nl( ' */' );
		$this->nl( 'abstract public function unimplemented() : \Exception;' );
		$this->nl();
	}

	/** @inheritDoc */
	protected function emitMemberAttribute( string $topName, string $name, array $m ) {
		$typeOpts = [ 'topName' => $topName ];
		// Getter
		$getter = $this->map( $topName, 'get', $name );
		$docType = $this->gen->typeToPHPDoc( $m['idlType'], $typeOpts );
		$phpType = $this->gen->typeToPHP( $m['idlType'], $typeOpts );
		$retType = $this->gen->typeToPHP( $m['idlType'], [ 'returnType' => true ] + $typeOpts );
		$this->use( $m['idlType'], $typeOpts );

		$this->nl( '/**' );
		$this->nl( " * @return $docType" );
		$this->nl( ' */' );
		$this->nl( "public function $getter()$retType {" );
		$this->nl( 'throw self::unimplemented();' );
		$this->nl( '}' );
		if ( $m['readonly'] ?? false ) {
			return;
		}
		$this->nl();
		// Setter
		$setter = $this->map( $topName, 'set', $name );
		$this->nl( '/**' );
		$this->nl( " * @param $docType \$val" );
		$this->nl( ' */' );
		$this->nl( "public function $setter( $phpType \$val ) : void {" );
		$this->nl( 'throw self::unimplemented();' );
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitMemberOperation( string $topName, string $name, array $m ) {
		$typeOpts = [ 'topName' => $topName ];
		$special = $m['special'] ?? '';
		if ( $special !== '' ) {
			return; // XXX special methods not yet supported
		}
		$r = InterfaceBuilder::memberOperationHelper( $this->gen, $topName, $name, $m );
		// Record types used, so we can generate proper import statements
		$this->use( $m['idlType'], $typeOpts );
		foreach ( $m['arguments'] as $a ) {
			$this->use( $a['idlType'], $typeOpts );
		}

		$this->nl( '/**' );
		foreach ( $r['paramDocs'] as $a ) {
			$this->nl( " * @param $a" );
		}
		$this->nl( " * @return {$r['retTypeDoc']}" );
		$this->nl( ' */' );
		$this->nl( "public function {$r['funcName']}({$r['phpArgs']}){$r['retType']} {" );
		$this->nl( 'throw self::unimplemented();' );
		$this->nl( '}' );
		$this->nl();
	}

	/** @inheritDoc */
	protected function emitCallback( string $topName, array $def ):void {
		$this->firstLine( $topName );
		$this->emitMemberOperation( $topName, '_invoke', [
			'idlType' => $def['idlType'],
			'arguments' => $def['arguments'],
		] );
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitCallbackInterface( string $topName, array $def ):void {
		$this->firstLine( $topName );
		foreach ( $def['members'] as $m ) {
			$this->emitMember( $topName, $m );
		}
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitInterfaceMixin( string $topName, array $def ): void {
		$this->emitInterface( $topName, $def );
	}

	/** @inheritDoc */
	protected function emitInterface( string $topName, array $def ):void {
		$this->firstLine( $topName );
		foreach ( $def['members'] as $m ) {
			$this->emitMember( $topName, $m );
		}
		$this->nl( '}' );
	}

	/** @inheritDoc */
	protected function emitDictionary( string $topName, array $def ): void {
		$this->firstLine( $topName );
		foreach ( $def['members'] as $m ) {
			// Treat as pseudo-attributes
			$this->emitMemberAttribute( $topName, $m['name'], [
				'readonly' => true,
			] + $m );
			$this->nl();
		}
		$this->nl( '}' );
	}
}
