<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface NodeList extends \ArrayAccess, \IteratorAggregate, \Countable {
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
	 * @return \Traversable<Node>
	 */
	public function getIterator();

}
