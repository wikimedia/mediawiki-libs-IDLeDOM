<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\EventHandler;

trait AbortSignal {
	use \Wikimedia\IDLeDOM\Stub\EventTarget;

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return bool
	 */
	public function getAborted() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return EventHandler
	 */
	public function getOnabort() : EventHandler {
		throw self::unimplemented();
	}

	/**
	 * @param EventHandler $val
	 */
	public function setOnabort( EventHandler $val ) : void {
		throw self::unimplemented();
	}

}
