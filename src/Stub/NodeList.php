<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;

trait NodeList {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param int $index
	 * @return ?Node
	 */
	public function item( int $index ) : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return int
	 */
	public function getLength() : int {
		throw self::unimplemented();
	}

	/**
	 * @return \Iterator<Node>
	 */
	public function getIterator() {
		throw self::unimplemented();
	}

}
