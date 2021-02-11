<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface NodeList extends \ArrayAccess, \IteratorAggregate {
	/**
	 * @param int $index
	 * @return Node|null
	 */
	public function item( int $index );

	/**
	 * @return int
	 */
	public function getLength() : int;

	/**
	 * @return \Iterator<Node>
	 */
	public function getIterator();

}
