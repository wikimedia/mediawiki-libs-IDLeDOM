<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\DOMHighResTimeStamp;
use Wikimedia\IDLeDOM\EventTarget;

trait CustomEvent {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "type":
				return $this->getType();
			case "target":
				return $this->getTarget();
			case "currentTarget":
				return $this->getCurrentTarget();
			case "eventPhase":
				return $this->getEventPhase();
			case "bubbles":
				return $this->getBubbles();
			case "cancelable":
				return $this->getCancelable();
			case "defaultPrevented":
				return $this->getDefaultPrevented();
			case "composed":
				return $this->getComposed();
			case "isTrusted":
				return $this->getIsTrusted();
			case "timeStamp":
				return $this->getTimeStamp();
			case "detail":
				return $this->getDetail();
			default:
				break;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __get(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
		return null;
	}

	/**
	 * @return string
	 */
	abstract public function getType() : string;

	/**
	 * @return ?EventTarget
	 */
	abstract public function getTarget() : ?EventTarget;

	/**
	 * @return ?EventTarget
	 */
	abstract public function getCurrentTarget() : ?EventTarget;

	/**
	 * @return int
	 */
	abstract public function getEventPhase() : int;

	/**
	 * @return bool
	 */
	abstract public function getBubbles() : bool;

	/**
	 * @return bool
	 */
	abstract public function getCancelable() : bool;

	/**
	 * @return bool
	 */
	abstract public function getDefaultPrevented() : bool;

	/**
	 * @return bool
	 */
	abstract public function getComposed() : bool;

	/**
	 * @return bool
	 */
	abstract public function getIsTrusted() : bool;

	/**
	 * @return DOMHighResTimeStamp
	 */
	abstract public function getTimeStamp() : DOMHighResTimeStamp;

	/**
	 * @return ?mixed
	 */
	abstract public function getDetail();

}
