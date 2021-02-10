<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Node;

trait XPathResult {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "resultType":
				return $this->getResultType();
			case "numberValue":
				return $this->getNumberValue();
			case "stringValue":
				return $this->getStringValue();
			case "booleanValue":
				return $this->getBooleanValue();
			case "singleNodeValue":
				return $this->getSingleNodeValue();
			case "invalidIteratorState":
				return $this->getInvalidIteratorState();
			case "snapshotLength":
				return $this->getSnapshotLength();
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
	 * @return int
	 */
	abstract public function getResultType() : int;

	/**
	 * @return float
	 */
	abstract public function getNumberValue() : float;

	/**
	 * @return string
	 */
	abstract public function getStringValue() : string;

	/**
	 * @return bool
	 */
	abstract public function getBooleanValue() : bool;

	/**
	 * @return ?Node
	 */
	abstract public function getSingleNodeValue() : ?Node;

	/**
	 * @return bool
	 */
	abstract public function getInvalidIteratorState() : bool;

	/**
	 * @return int
	 */
	abstract public function getSnapshotLength() : int;

}
