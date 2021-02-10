<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface ChildNode {
	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function before( /* mixed */ ...$nodes ) : void;

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function after( /* mixed */ ...$nodes ) : void;

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function replaceWith( /* mixed */ ...$nodes ) : void;

	/**
	 * @return void
	 */
	public function remove() : void;

}
