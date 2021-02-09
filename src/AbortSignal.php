<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface AbortSignal {
	/**
	 * @return bool
	 */
	public function getAborted() : bool;

	/**
	 * @return EventHandler
	 */
	public function getOnabort() : EventHandler;

	/**
	 * @param EventHandler $val
	 */
	public function setOnabort( EventHandler $val ) : void;

}
