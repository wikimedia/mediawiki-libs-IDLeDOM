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
			case "srcElement":
				return $this->getSrcElement();
			case "currentTarget":
				return $this->getCurrentTarget();
			case "eventPhase":
				return $this->getEventPhase();
			case "cancelBubble":
				return $this->getCancelBubble();
			case "bubbles":
				return $this->getBubbles();
			case "cancelable":
				return $this->getCancelable();
			case "returnValue":
				return $this->getReturnValue();
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
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set( string $name, mixed $value ) : void {
		switch ( $name ) {
			case "cancelBubble":
				$this->setCancelBubble( $value );
				return;
			case "returnValue":
				$this->setReturnValue( $value );
				return;
			default:
				break;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __set(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
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
	abstract public function getSrcElement() : ?EventTarget;

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
	abstract public function getCancelBubble() : bool;

	/**
	 * @param bool $value
	 */
	abstract public function setCancelBubble( bool $value ) : void;

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
	abstract public function getReturnValue() : bool;

	/**
	 * @param bool $value
	 */
	abstract public function setReturnValue( bool $value ) : void;

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
