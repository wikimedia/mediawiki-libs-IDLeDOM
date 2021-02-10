<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;

trait NodeFilter {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param Node $node
	 * @return int
	 */
	public function acceptNode( Node $node ) : int {
		throw self::unimplemented();
	}

}
