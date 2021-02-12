<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait AbstractRange {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\AbstractRange $this';
		// @var \Wikimedia\IDLeDOM\AbstractRange $this
		switch ( $name ) {
			case "startContainer":
				return $this->getStartContainer();
			case "startOffset":
				return $this->getStartOffset();
			case "endContainer":
				return $this->getEndContainer();
			case "endOffset":
				return $this->getEndOffset();
			case "collapsed":
				return $this->getCollapsed();
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
