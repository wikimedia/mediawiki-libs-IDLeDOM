<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface ParentNode {
	/**
	 * @return HTMLCollection
	 */
	public function getChildren();

	/**
	 * @return Element|null
	 */
	public function getFirstElementChild();

	/**
	 * @return Element|null
	 */
	public function getLastElementChild();

	/**
	 * @return int
	 */
	public function getChildElementCount() : int;

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function prepend( /* mixed */ ...$nodes ) : void;

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function append( /* mixed */ ...$nodes ) : void;

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function replaceChildren( /* mixed */ ...$nodes ) : void;

	/**
	 * @param string $selectors
	 * @return Element|null
	 */
	public function querySelector( string $selectors );

	/**
	 * @param string $selectors
	 * @return NodeList
	 */
	public function querySelectorAll( string $selectors );

}
