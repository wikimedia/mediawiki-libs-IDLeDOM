<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait NodeIterator {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\NodeIterator $this';
		// @var \Wikimedia\IDLeDOM\NodeIterator $this
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

}
