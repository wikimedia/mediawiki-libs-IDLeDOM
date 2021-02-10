<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface HTMLCollection extends \ArrayAccess {
	/**
	 * @return int
	 */
	public function getLength() : int;

	/**
	 * @param int $index
	 * @return ?Element
	 */
	public function item( int $index ) : ?Element;

	/**
	 * @param string $name
	 * @return ?Element
	 */
	public function namedItem( string $name ) : ?Element;

}
