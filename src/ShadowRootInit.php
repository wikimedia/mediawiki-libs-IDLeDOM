<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * ShadowRootInit
 *
 * @see https://dom.spec.whatwg.org/#dictdef-shadowrootinit
 *
 * @property string $mode
 * @property bool $delegatesFocus
 * @phan-forbid-undeclared-magic-properties
 */
interface ShadowRootInit extends \ArrayAccess {
	/**
	 * @return string
	 */
	public function getMode() : /* ShadowRootMode */ string;

	/**
	 * @return bool
	 */
	public function getDelegatesFocus() : bool;

}
