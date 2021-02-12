<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait TreeWalker {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\TreeWalker $this';
		// @var \Wikimedia\IDLeDOM\TreeWalker $this
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
	public function __set( string $name, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\TreeWalker $this';
		// @var \Wikimedia\IDLeDOM\TreeWalker $this
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

}
