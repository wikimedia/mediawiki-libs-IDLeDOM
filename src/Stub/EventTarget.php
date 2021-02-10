<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\AddEventListenerOptions;
use Wikimedia\IDLeDOM\Event;
use Wikimedia\IDLeDOM\EventListener;
use Wikimedia\IDLeDOM\EventListenerOptions;

trait EventTarget {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param string $type
	 * @param EventListener|callable|null $callback
	 * @param AddEventListenerOptions|associative-array|bool|null $options
	 * @return void
	 */
	public function addEventListener( string $type, /* ?mixed */ $callback, /* ?mixed */ $options = null ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param string $type
	 * @param EventListener|callable|null $callback
	 * @param EventListenerOptions|associative-array|bool|null $options
	 * @return void
	 */
	public function removeEventListener( string $type, /* ?mixed */ $callback, /* ?mixed */ $options = null ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Event $event
	 * @return bool
	 */
	public function dispatchEvent( Event $event ) : bool {
		throw self::unimplemented();
	}

}