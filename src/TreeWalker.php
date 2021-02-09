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
	 * @return ?NodeFilter
	 */
	public function getFilter() : ?NodeFilter;

	/**
	 * @return Node
	 */
	public function getCurrentNode() : Node;

	/**
	 * @param Node $val
	 */
	public function setCurrentNode( Node $val ) : void;

}
