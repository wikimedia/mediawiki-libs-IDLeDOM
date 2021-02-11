<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface HTMLCollection extends \ArrayAccess, \IteratorAggregate, \Countable {
	/**
	 * @return int
	 */
	public function getLength() : int;

	/**
	 * @param int $index
	 * @return Element|null
	 */
	public function item( int $index );

	/**
	 * @param string $name
	 * @return Element|null
	 */
	public function namedItem( string $name );

	/**
	 * @return \Traversable<Element>
	 */
	public function getIterator();

}
