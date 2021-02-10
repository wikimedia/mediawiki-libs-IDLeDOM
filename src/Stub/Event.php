<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\DOMHighResTimeStamp;
use Wikimedia\IDLeDOM\EventTarget;

trait Event {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return string
	 */
	public function getType() : string {
		throw self::unimplemented();
	}

	/**
	 * @return ?EventTarget
	 */
	public function getTarget() : ?EventTarget {
		throw self::unimplemented();
	}

	/**
	 * @return ?EventTarget
	 */
	public function getCurrentTarget() : ?EventTarget {
		throw self::unimplemented();
	}

	/**
	 * @return list<EventTarget>
	 */
	public function composedPath() : array {
		throw self::unimplemented();
	}

	/**
	 * @return int
	 */
	public function getEventPhase() : int {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function stopPropagation() : void {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function stopImmediatePropagation() : void {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getBubbles() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getCancelable() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function preventDefault() : void {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getDefaultPrevented() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getComposed() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getIsTrusted() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return DOMHighResTimeStamp
	 */
	public function getTimeStamp() : DOMHighResTimeStamp {
		throw self::unimplemented();
	}

}
