<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface MutationObserver {

	/**
	 * @param Node $target
	 * @param ?MutationObserverInit $options
	 * @return void
	 */
	public function observe( Node $target, ?MutationObserverInit $options = null ) : void;

	/**
	 * @return void
	 */
	public function disconnect() : void;

	/**
	 * @return list<MutationRecord>
	 */
	public function takeRecords() : array;

}
