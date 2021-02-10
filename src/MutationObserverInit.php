<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface MutationObserverInit extends \ArrayAccess {
	/**
	 * @return bool
	 */
	public function getChildList() : bool;

	/**
	 * @return bool
	 */
	public function getAttributes() : bool;

	/**
	 * @return bool
	 */
	public function getCharacterData() : bool;

	/**
	 * @return bool
	 */
	public function getSubtree() : bool;

	/**
	 * @return bool
	 */
	public function getAttributeOldValue() : bool;

	/**
	 * @return bool
	 */
	public function getCharacterDataOldValue() : bool;

	/**
	 * @return list<string>
	 */
	public function getAttributeFilter() : array;

}
