<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait CustomEvent {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\CustomEvent $this';
		// @var \Wikimedia\IDLeDOM\CustomEvent $this
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
	 * @return bool
	 */
	public function __isset( string $name ) : bool {
		'@phan-var \Wikimedia\IDLeDOM\CustomEvent $this';
		// @var \Wikimedia\IDLeDOM\CustomEvent $this
		switch ( $name ) {
			case "type":
				return true;
			case "target":
				return $this->getTarget() !== null;
			case "srcElement":
				return $this->getSrcElement() !== null;
			case "currentTarget":
				return $this->getCurrentTarget() !== null;
			case "eventPhase":
				return true;
			case "cancelBubble":
				return true;
			case "bubbles":
				return true;
			case "cancelable":
				return true;
			case "returnValue":
				return true;
			case "defaultPrevented":
				return true;
			case "composed":
				return true;
			case "isTrusted":
				return true;
			case "timeStamp":
				return true;
			case "detail":
				return true;
			default:
				break;
		}
		return false;
	}

	/**
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set( string $name, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\CustomEvent $this';
		// @var \Wikimedia\IDLeDOM\CustomEvent $this
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
	 * @param string $name
	 */
	public function __unset( string $name ) : void {
		'@phan-var \Wikimedia\IDLeDOM\CustomEvent $this';
		// @var \Wikimedia\IDLeDOM\CustomEvent $this
		switch ( $name ) {
			case "type":
				break;
			case "target":
				break;
			case "srcElement":
				break;
			case "currentTarget":
				break;
			case "eventPhase":
				break;
			case "cancelBubble":
				break;
			case "bubbles":
				break;
			case "cancelable":
				break;
			case "returnValue":
				break;
			case "defaultPrevented":
				break;
			case "composed":
				break;
			case "isTrusted":
				break;
			case "timeStamp":
				break;
			case "detail":
				break;
			default:
				return;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __unset(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

}
