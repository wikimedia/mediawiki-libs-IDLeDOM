<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface NodeIterator {
	/**
	 * @return Node
	 */
	public function getRoot();

	/**
	 * @return Node
	 */
	public function getReferenceNode();

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
	 * @return Node|null
	 */
	public function nextNode();

	/**
	 * @return Node|null
	 */
	public function previousNode();

	/**
	 * @return void
	 */
	public function detach() : void;

}
