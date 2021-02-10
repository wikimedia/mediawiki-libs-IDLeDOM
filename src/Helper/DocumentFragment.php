<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\HTMLCollection;

trait DocumentFragment {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "children":
				return $this->getChildren();
			case "firstElementChild":
				return $this->getFirstElementChild();
			case "lastElementChild":
				return $this->getLastElementChild();
			case "childElementCount":
				return $this->getChildElementCount();
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
	 * @return HTMLCollection
	 */
	abstract public function getChildren() : HTMLCollection;

	/**
	 * @return ?Element
	 */
	abstract public function getFirstElementChild() : ?Element;

	/**
	 * @return ?Element
	 */
	abstract public function getLastElementChild() : ?Element;

	/**
	 * @return int
	 */
	abstract public function getChildElementCount() : int;

}
