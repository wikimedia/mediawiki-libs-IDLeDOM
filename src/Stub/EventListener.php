<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Event;

trait EventListener {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param Event $event
	 * @return void
	 */
	public function handleEvent( Event $event ) : void {
		throw self::unimplemented();
	}

}
