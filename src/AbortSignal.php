<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface AbortSignal extends EventTarget {
	/**
	 * @return bool
	 */
	public function getAborted() : bool;

	/**
	 * @return EventHandlerNonNull|callable|null
	 */
	public function getOnabort();

	/**
	 * @param EventHandlerNonNull|callable|null $val
	 */
	public function setOnabort( /* ?mixed */ $val ) : void;

}
