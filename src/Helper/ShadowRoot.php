<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\EventHandler;

trait ShadowRoot {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "mode":
				return $this->getMode();
			case "host":
				return $this->getHost();
			case "onslotchange":
				return $this->getOnslotchange();
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
			case "onslotchange":
				$this->setOnslotchange( $value );
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
	 * @return int
	 */
	abstract public function getMode() : int;

	/**
	 * @return Element
	 */
	abstract public function getHost() : Element;

	/**
	 * @return EventHandler
	 */
	abstract public function getOnslotchange() : EventHandler;

	/**
	 * @param EventHandler $value
	 */
	abstract public function setOnslotchange( EventHandler $value ) : void;

}
