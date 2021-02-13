<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait XPathResult {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\XPathResult $this';
		// @var \Wikimedia\IDLeDOM\XPathResult $this
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
	 * @param string $name
	 * @return bool
	 */
	public function __isset( string $name ) : bool {
		'@phan-var \Wikimedia\IDLeDOM\XPathResult $this';
		// @var \Wikimedia\IDLeDOM\XPathResult $this
		switch ( $name ) {
			case "resultType":
				return true;
			case "numberValue":
				return true;
			case "stringValue":
				return true;
			case "booleanValue":
				return true;
			case "singleNodeValue":
				return $this->getSingleNodeValue() !== null;
			case "invalidIteratorState":
				return true;
			case "snapshotLength":
				return true;
			default:
				break;
		}
		return false;
	}

}
