<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * AddEventListenerOptions
 *
 * @see https://dom.spec.whatwg.org/#dictdef-addeventlisteneroptions
 *
 * @property bool $capture
 * @property bool $passive
 * @property bool $once
 * @property AbortSignal $signal
 * @phan-forbid-undeclared-magic-properties
 */
interface AddEventListenerOptions extends EventListenerOptions {
	/**
	 * @return bool
	 */
	public function getPassive() : bool;

	/**
	 * @return bool
	 */
	public function getOnce() : bool;

	/**
	 * @return AbortSignal
	 */
	public function getSignal();

}
