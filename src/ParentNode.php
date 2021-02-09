<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface ParentNode {
	/**
	 * @return HTMLCollection
	 */
	public function getChildren() : HTMLCollection;

	/**
	 * @return ?Element
	 */
	public function getFirstElementChild() : ?Element;

	/**
	 * @return ?Element
	 */
	public function getLastElementChild() : ?Element;

	/**
	 * @return int
	 */
	public function getChildElementCount() : int;

}
