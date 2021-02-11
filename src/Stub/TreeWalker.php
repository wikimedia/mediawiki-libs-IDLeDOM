<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeFilter;

trait TreeWalker {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract public function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return Node
	 */
	public function getRoot() : Node {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getWhatToShow() : int {
		throw self::_unimplemented();
	}

	/**
	 * @return NodeFilter|callable|null
	 */
	public function getFilter() {
		throw self::_unimplemented();
	}

	/**
	 * @return Node
	 */
	public function getCurrentNode() : Node {
		throw self::_unimplemented();
	}

	/**
	 * @param Node $val
	 */
	public function setCurrentNode( Node $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function parentNode() : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function firstChild() : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function lastChild() : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function previousSibling() : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function nextSibling() : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function previousNode() : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function nextNode() : ?Node {
		throw self::_unimplemented();
	}

}
