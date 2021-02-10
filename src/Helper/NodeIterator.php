<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeFilter;

trait NodeIterator {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "root":
				return $this->getRoot();
			case "referenceNode":
				return $this->getReferenceNode();
			case "pointerBeforeReferenceNode":
				return $this->getPointerBeforeReferenceNode();
			case "whatToShow":
				return $this->getWhatToShow();
			case "filter":
				return $this->getFilter();
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
	 * @return Node
	 */
	abstract public function getRoot() : Node;

	/**
	 * @return Node
	 */
	abstract public function getReferenceNode() : Node;

	/**
	 * @return bool
	 */
	abstract public function getPointerBeforeReferenceNode() : bool;

	/**
	 * @return int
	 */
	abstract public function getWhatToShow() : int;

	/**
	 * @return NodeFilter|callable|null
	 */
	abstract public function getFilter();

}
