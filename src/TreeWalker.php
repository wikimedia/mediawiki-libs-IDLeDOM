<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface TreeWalker {
	/**
	 * @return Node
	 */
	public function getRoot() : Node;

	/**
	 * @return int
	 */
	public function getWhatToShow() : int;

	/**
	 * @return NodeFilter|callable|null
	 */
	public function getFilter();

	/**
	 * @return Node
	 */
	public function getCurrentNode() : Node;

	/**
	 * @param Node $val
	 */
	public function setCurrentNode( Node $val ) : void;

	/**
	 * @return ?Node
	 */
	public function parentNode() : ?Node;

	/**
	 * @return ?Node
	 */
	public function firstChild() : ?Node;

	/**
	 * @return ?Node
	 */
	public function lastChild() : ?Node;

	/**
	 * @return ?Node
	 */
	public function previousSibling() : ?Node;

	/**
	 * @return ?Node
	 */
	public function nextSibling() : ?Node;

	/**
	 * @return ?Node
	 */
	public function previousNode() : ?Node;

	/**
	 * @return ?Node
	 */
	public function nextNode() : ?Node;

}
