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

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function prepend( mixed ...$nodes ) : void;

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function append( mixed ...$nodes ) : void;

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function replaceChildren( mixed ...$nodes ) : void;

	/**
	 * @param string $selectors
	 * @return ?Element
	 */
	public function querySelector( string $selectors ) : ?Element;

	/**
	 * @param string $selectors
	 * @return NodeList
	 */
	public function querySelectorAll( string $selectors ) : NodeList;

}
