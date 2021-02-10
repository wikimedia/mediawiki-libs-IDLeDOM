<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface NodeIterator {
	/**
	 * @return Node
	 */
	public function getRoot() : Node;

	/**
	 * @return Node
	 */
	public function getReferenceNode() : Node;

	/**
	 * @return bool
	 */
	public function getPointerBeforeReferenceNode() : bool;

	/**
	 * @return int
	 */
	public function getWhatToShow() : int;

	/**
	 * @return NodeFilter|callable|null
	 */
	public function getFilter();

	/**
	 * @return ?Node
	 */
	public function nextNode() : ?Node;

	/**
	 * @return ?Node
	 */
	public function previousNode() : ?Node;

	/**
	 * @return void
	 */
	public function detach() : void;

}
