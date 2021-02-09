<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface AbortController {

	/**
	 * @return AbortSignal
	 */
	public function getSignal() : AbortSignal;

	/**
	 * @return void
	 */
	public function abort() : void;

}
