<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface MutationCallback {
	/**
	 * @param list<MutationRecord> $mutations
	 * @param MutationObserver $observer
	 * @return void
	 */
	public function invoke( array $mutations, MutationObserver $observer ) : void;
}
