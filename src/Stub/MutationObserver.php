<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\MutationObserverInit;
use Wikimedia\IDLeDOM\MutationRecord;
use Wikimedia\IDLeDOM\Node;

trait MutationObserver {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param Node $target
	 * @param MutationObserverInit|associative-array|null $options
	 * @return void
	 */
	public function observe( Node $target, /* ?mixed */ $options = null ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function disconnect() : void {
		throw self::unimplemented();
	}

	/**
	 * @return list<MutationRecord>
	 */
	public function takeRecords() : array {
		throw self::unimplemented();
	}

}
