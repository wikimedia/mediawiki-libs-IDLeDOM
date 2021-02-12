<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait AbortSignal {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\AbortSignal $this';
		// @var \Wikimedia\IDLeDOM\AbortSignal $this
		switch ( $name ) {
			case "aborted":
				return $this->getAborted();
			case "onabort":
				return $this->getOnabort();
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
		'@phan-var \Wikimedia\IDLeDOM\AbortSignal $this';
		// @var \Wikimedia\IDLeDOM\AbortSignal $this
		switch ( $name ) {
			case "onabort":
				$this->setOnabort( $value );
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
