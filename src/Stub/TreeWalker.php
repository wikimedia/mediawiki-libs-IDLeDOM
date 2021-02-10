<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeFilter;

trait TreeWalker {

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
	 * @return Node
	 */
	public function getCurrentNode() : Node {
		throw self::unimplemented();
	}

	/**
	 * @param Node $val
	 */
	public function setCurrentNode( Node $val ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function parentNode() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function firstChild() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function lastChild() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function previousSibling() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function nextSibling() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function previousNode() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function nextNode() : ?Node {
		throw self::unimplemented();
	}

}
