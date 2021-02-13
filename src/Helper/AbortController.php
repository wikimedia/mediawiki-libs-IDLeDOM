<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait AbortController {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\AbortController $this';
		// @var \Wikimedia\IDLeDOM\AbortController $this
		switch ( $name ) {
			case "signal":
				return $this->getSignal();
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
		'@phan-var \Wikimedia\IDLeDOM\AbortController $this';
		// @var \Wikimedia\IDLeDOM\AbortController $this
		switch ( $name ) {
			case "signal":
				return true;
			default:
				break;
		}
		return false;
	}

}
