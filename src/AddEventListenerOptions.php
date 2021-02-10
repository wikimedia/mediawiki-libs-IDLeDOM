<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

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
	public function getSignal() : AbortSignal;

}
