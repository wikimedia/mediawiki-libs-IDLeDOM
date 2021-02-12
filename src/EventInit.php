<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * EventInit
 *
 * @see https://dom.spec.whatwg.org/#dictdef-eventinit
 *
 * @property bool $bubbles
 * @property bool $cancelable
 * @property bool $composed
 * @phan-forbid-undeclared-magic-properties
 */
interface EventInit extends \ArrayAccess {
	/**
	 * @return bool
	 */
	public function getBubbles() : bool;

	/**
	 * @return bool
	 */
	public function getCancelable() : bool;

	/**
	 * @return bool
	 */
	public function getComposed() : bool;

}
