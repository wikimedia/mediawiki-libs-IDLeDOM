<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Element;

trait HTMLCollection {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return int
	 */
	public function getLength() : int {
		throw self::unimplemented();
	}

	/**
	 * @param int $index
	 * @return ?Element
	 */
	public function item( int $index ) : ?Element {
		throw self::unimplemented();
	}

	/**
	 * @param string $name
	 * @return ?Element
	 */
	public function namedItem( string $name ) : ?Element {
		throw self::unimplemented();
	}

}
