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

		$stubContents = file_get_contents(
			__DIR__ . "/../src/Stub/$stubname.php"
		);
		preg_match_all(
			'@^[\t ]*// (use ' . preg_quote( '\Wikimedia\IDLeDOM\Stub\\' ) . '[A-Za-z0-9_]+;)$@m',
			$stubContents,
			$matches,
			PREG_PATTERN_ORDER
		);
		$stubs = array_merge(
			[ "use \\Wikimedia\\IDLeDOM\\Stub\\$stubname;" ],
			$matches[1]
		);

		$helper = file_exists( __DIR__ . "/../src/Helper/$stubname.php" ) ?
				"\\Wikimedia\\IDLeDOM\\Helper\\$stubname" : null;

		$expr = "new class() implements $inter {\n" .
			  implode( "\n", $stubs ) . "\n" .
			  ( $helper ? "\tuse $helper;\n" : '' ) .
			  "\tprotected function _unimplemented() {\n" .
			  "\t\treturn new \\Exception();\n" .
			  "\t}\n" .
			  "};";
		$threw = false;
		try {
			// @phan-suppress-next-line SecurityCheck-LikelyFalsePositive
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
