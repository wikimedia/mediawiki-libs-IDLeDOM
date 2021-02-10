<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface NodeList extends \ArrayAccess {
	/**
	 * @param int $index
	 * @return ?Node
	 */
	public function item( int $index ) : ?Node;

	/**
	 * @return int
	 */
	public function getLength() : int;

}
