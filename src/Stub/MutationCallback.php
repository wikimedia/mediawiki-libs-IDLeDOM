<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\MutationObserver;
use Wikimedia\IDLeDOM\MutationRecord;

trait MutationCallback {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param list<MutationRecord> $mutations
	 * @param MutationObserver $observer
	 * @return void
	 */
	public function invoke( array $mutations, MutationObserver $observer ) : void {
		throw self::unimplemented();
	}

}
