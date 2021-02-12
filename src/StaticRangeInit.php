<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * StaticRangeInit
 *
 * @see https://dom.spec.whatwg.org/#dictdef-staticrangeinit
 *
 * @property Node $startContainer
 * @property int $startOffset
 * @property Node $endContainer
 * @property int $endOffset
 * @phan-forbid-undeclared-magic-properties
 */
interface StaticRangeInit extends \ArrayAccess {
	/**
	 * @return Node
	 */
	public function getStartContainer();

	/**
	 * @return int
	 */
	public function getStartOffset() : int;

	/**
	 * @return Node
	 */
	public function getEndContainer();

	/**
	 * @return int
	 */
	public function getEndOffset() : int;

}
