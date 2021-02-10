<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface AbstractRange {
	/**
	 * @return Node
	 */
	public function getStartContainer() : Node;

	/**
	 * @return int
	 */
	public function getStartOffset() : int;

	/**
	 * @return Node
	 */
	public function getEndContainer() : Node;

	/**
	 * @return int
	 */
	public function getEndOffset() : int;

	/**
	 * @return bool
	 */
	public function getCollapsed() : bool;

}