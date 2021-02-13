<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait Range {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\Range $this';
		// @var \Wikimedia\IDLeDOM\Range $this
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
			case "commonAncestorContainer":
				return $this->getCommonAncestorContainer();
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
		'@phan-var \Wikimedia\IDLeDOM\Range $this';
		// @var \Wikimedia\IDLeDOM\Range $this
		switch ( $name ) {
			case "startContainer":
				return true;
			case "startOffset":
				return true;
			case "endContainer":
				return true;
			case "endOffset":
				return true;
			case "collapsed":
				return true;
			case "commonAncestorContainer":
				return true;
			default:
				break;
		}
		return false;
	}

}
