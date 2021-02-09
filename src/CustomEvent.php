<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface CustomEvent {

	/**
	 * @return ?mixed
	 */
	public function getDetail() : ?mixed;

	/**
	 * @param string $type
	 * @param bool $bubbles
	 * @param bool $cancelable
	 * @param ?mixed $detail
	 * @return void
	 */
	public function initCustomEvent( string $type, bool $bubbles = false, bool $cancelable = false, ?mixed $detail = null ) : void;

}
