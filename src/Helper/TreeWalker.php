<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeFilter;

trait TreeWalker {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "root":
				return $this->getRoot();
			case "whatToShow":
				return $this->getWhatToShow();
			case "filter":
				return $this->getFilter();
			case "currentNode":
				return $this->getCurrentNode();
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
			case "currentNode":
				$this->setCurrentNode( $value );
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
	 * @return Node
	 */
	abstract public function getRoot();

	/**
	 * @return int
	 */
	abstract public function getWhatToShow() : int;

	/**
	 * @return NodeFilter|callable|null
	 */
	abstract public function getFilter();

	/**
	 * @return Node
	 */
	abstract public function getCurrentNode();

	/**
	 * @param Node $value
	 */
	abstract public function setCurrentNode( /* Node */ $value ) : void;

}
