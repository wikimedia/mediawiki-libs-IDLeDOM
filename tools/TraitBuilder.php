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
}
