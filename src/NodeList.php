<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * NodeList
 *
 * @see https://dom.spec.whatwg.org/#interface-nodelist
 *
 * @property int $length
 * @phan-forbid-undeclared-magic-properties
 */
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
	 * @return \Iterator An Iterator<Node>
	 */
	public function getIterator();

}
