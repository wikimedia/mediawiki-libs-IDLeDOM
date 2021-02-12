<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait Event {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\Event $this';
		// @var \Wikimedia\IDLeDOM\Event $this
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
	public function __set( string $name, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\Event $this';
		// @var \Wikimedia\IDLeDOM\Event $this
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

}
