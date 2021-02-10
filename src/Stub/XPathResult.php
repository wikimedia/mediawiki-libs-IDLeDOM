<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;

trait XPathResult {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return int
	 */
	public function getResultType() : int {
		throw self::unimplemented();
	}

	/**
	 * @return float
	 */
	public function getNumberValue() : float {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getStringValue() : string {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getBooleanValue() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function getSingleNodeValue() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getInvalidIteratorState() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return int
	 */
	public function getSnapshotLength() : int {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function iterateNext() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @param int $index
	 * @return ?Node
	 */
	public function snapshotItem( int $index ) : ?Node {
		throw self::unimplemented();
	}

}
