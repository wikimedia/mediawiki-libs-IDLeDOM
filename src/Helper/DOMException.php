<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait DOMException {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\DOMException $this';
		// @var \Wikimedia\IDLeDOM\DOMException $this
		switch ( $name ) {
			case "name":
				return $this->getName();
			case "message":
				return $this->getMessage();
			case "code":
				return $this->getCode();
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
		'@phan-var \Wikimedia\IDLeDOM\DOMException $this';
		// @var \Wikimedia\IDLeDOM\DOMException $this
		switch ( $name ) {
			case "name":
				return true;
			case "message":
				return true;
			case "code":
				return true;
			default:
				break;
		}
		return false;
	}

}
