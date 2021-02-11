<?php

namespace Wikimedia\IDLeDOM\Tests;

class IDLeDOMTest extends \PHPUnit\Framework\TestCase {

	/**
	 * Verify that stubs are complete and can be instantiated.
	 * @covers \Wikimedia\IDLeDOM\Stub\Node
	 * @dataProvider stubProvider
	 */
	public function testStubs( string $stubname ) {
		$inter = "\\Wikimedia\\IDLeDOM\\$stubname";
		$stub = "\\Wikimedia\\IDLeDOM\\Stub\\$stubname";
		$helper = "\\Wikimedia\\IDLeDOM\\Helper\\$stubname";
		$hasHelper = file_exists( __DIR__ . "/../src/Helper/$stubname.php" );

		$expr = "new class() implements $inter {\n" .
			  "\tuse $stub;\n" .
			  ( $hasHelper ? "\tuse $helper;\n" : '' ) .
			  "\tpublic function _unimplemented() {\n" .
			  "\t\treturn new \\Exception();\n" .
			  "\t}\n" .
			  "};";
		$threw = false;
		try {
			eval( $expr );
		} catch ( \Throwable $e ) {
			$threw = true;
		}
		$this->assertTrue( !$threw );
	}

	/**
	 * List all stubs.
	 */
	public function stubProvider() {
		return self::listFiles( __DIR__ . '/../src/Stub/' );
	}

	private static function listFiles( $dirname ) {
		$result = [];
		foreach ( scandir( $dirname ) as $entry ) {
			if ( substr( $entry, 0, 1 ) === "." ) {
				continue;
			}
			if ( substr( $entry, -4 ) !== ".php" ) {
				continue;
			}
			$result[] = [ substr( $entry, 0, -4 ) ];
		}
		return $result;
	}
}
