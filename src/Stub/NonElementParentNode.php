<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Element;

trait NonElementParentNode {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param string $elementId
	 * @return ?Element
	 */
	public function getElementById( string $elementId ) : ?Element {
		throw self::unimplemented();
	}

}
