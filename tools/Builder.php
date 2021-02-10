<?php

namespace Wikimedia\IDLeDOM\Tools;

class Builder {
	/** @var Generator */
	protected $gen;
	/** @var Emitter */
	protected $e;
	/** @var array */
	protected $options;
	/** @var bool */
	protected $skip = false;

	/**
	 * Protected constructor, not for use outside the class.
	 * @param Generator $gen The generator, for type and name mapping.
	 * @param array $options Builder options
	 */
	protected function __construct( Generator $gen, array $options ) {
		$this->gen = $gen;
		$this->e = new Emitter();
		$this->options = $options;
		$this->skip = false;
	}

	/**
	 * Helper method: proxies to the Emitter.
	 * @param string $line
	 */
	protected function nl( string $line = '' ): void {
		$this->e->nl( $line );
	}

	/**
	 * Helper method: stringifies the Emitter.
	 * @return string
	 */
	public function __toString(): string {
		return (string)$this->e;
	}

	/**
	 * Helper method: proxies to the generator's name map.
	 * @param string $topName
	 * @param string $type
	 * @param string $name
	 * @return string
	 */
	public function map( string $topName, string $type, string $name ): string {
		return $this->gen->map( $topName, $type, $name );
	}

	/**
	 * @param string $topName The name of the definition
	 * @param string $name The name of the member
	 * @param array $m The WebIDL AST for the member
	 */
	protected function emitMemberConstructor( string $topName, string $name, array $m ) {
	}

	/**
	 * @param string $topName The name of the definition
	 * @param string $name The name of the member
	 * @param array $m The WebIDL AST for the member
	 */
	protected function emitMemberAttribute( string $topName, string $name, array $m ) {
	}

	/**
	 * @param string $topName The name of the definition
	 * @param string $name The name of the member
	 * @param array $m The WebIDL AST for the member
	 */
	protected function emitMemberOperation( string $topName, string $name, array $m ) {
	}

	/**
	 * @param string $topName The name of the definition
	 * @param string $name The name of the member
	 * @param array $m The WebIDL AST for the member
	 */
	protected function emitMemberConst( string $topName, string $name, array $m ) {
	}

	/**
	 * @param string $topName The name of the definition
	 * @param string $name The name of the member
	 * @param array $m The WebIDL AST for the member
	 */
	protected function emitMemberIterable( string $topName, string $name, array $m ) {
	}

	/**
	 * Dispatch to a specialized member visitor.
	 * @param string $topName The name of the definition
	 * @param array $m The WebIDL AST for the member
	 */
	protected function emitMember( string $topName, array $m ) {
		if ( $this->options['skipLegacy'] ?? false ) {
			foreach ( $m['trailingComments'] ?? [] as $c ) {
				if ( preg_match( '|^// legacy|', $c ) ) {
					return; // skip this legacy member
				}
			}
		}
		$methodName = 'emitMember' .
			str_replace( ' ', '', ucwords( $m['type'] ) );
		$name = $m['type'] === 'constructor' ? '__construct' :
			  ( $m['type'] === 'iterable' ? 'getIterator' :
			   $m['name'] );
		$this->$methodName( $topName, $name, $m );
		$this->nl();
	}

	/**
	 * @param string $topName The name of the definition
	 * @param array $def The WebIDL AST
	 */
	protected function emitInterface( string $topName, array $def ): void {
		$this->skip = true;
	}

	/**
	 * @param string $topName The name of the definition
	 * @param array $def The WebIDL AST
	 */
	protected function emitDictionary( string $topName, array $def ): void {
		$this->skip = true;
	}

	/**
	 * @param string $topName The name of the definition
	 * @param array $def The WebIDL AST
	 */
	protected function emitCallbackInterface( string $topName, array $def ): void {
		$this->skip = true;
	}

	/**
	 * @param string $topName The name of the definition
	 * @param array $def The WebIDL AST
	 */
	protected function emitInterfaceMixin( string $topName, array $def ): void {
		$this->skip = true;
	}

	/**
	 * @param string $topName The name of the definition
	 * @param array $def The WebIDL AST
	 */
	protected function emitCallback( string $topName, array $def ): void {
		$this->skip = true;
	}

	/**
	 * @param string $topName The name of the definition
	 * @param array $def The WebIDL AST
	 */
	protected function emitEnum( string $topName, array $def ): void {
		$this->skip = true;
	}

	/**
	 * Dispatch to specialized emitter.
	 * @param array $def
	 */
	protected function emitDefinition( array $def ):void {
		$methodName = 'emit' . str_replace( ' ', '', ucwords( $def['type'] ) );
		$this->$methodName( $def['name'], $def );
	}

	/**
	 * Main entry point: build a single definition.
	 * @param Generator $gen
	 * @param array $def WebIDL AST definition
	 * @param array $options Builder options
	 * @return ?string The output, or null to skip this definition.
	 */
	public static function emit( Generator $gen, array $def, array $options ): ?string {
		$gen = new static( $gen, $options );
		$gen->emitDefinition( $def );
		return $gen->skip ? null : (string)$gen;
	}
}
