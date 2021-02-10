<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeFilter;

trait NodeIterator {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return Node
	 */
	public function getRoot() : Node {
		throw self::unimplemented();
	}

	/**
	 * @return Node
	 */
	public function getReferenceNode() : Node {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getPointerBeforeReferenceNode() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return int
	 */
	public function getWhatToShow() : int {
		throw self::unimplemented();
	}

	/**
	 * @return NodeFilter|callable|null
	 */
	public function getFilter() {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function nextNode() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function previousNode() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function detach() : void {
		throw self::unimplemented();
	}

}
