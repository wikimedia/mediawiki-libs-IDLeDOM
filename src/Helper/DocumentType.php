<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait DocumentType {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "name":
				return $this->getName();
			case "publicId":
				return $this->getPublicId();
			case "systemId":
				return $this->getSystemId();
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
	 * @return string
	 */
	abstract public function getName() : string;

	/**
	 * @return string
	 */
	abstract public function getPublicId() : string;

	/**
	 * @return string
	 */
	abstract public function getSystemId() : string;

}
