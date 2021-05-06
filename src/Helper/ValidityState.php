<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait ValidityState {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\ValidityState $this';
		// @var \Wikimedia\IDLeDOM\ValidityState $this
		switch ( $name ) {
			case "valueMissing":
				return $this->getValueMissing();
			case "typeMismatch":
				return $this->getTypeMismatch();
			case "patternMismatch":
				return $this->getPatternMismatch();
			case "tooLong":
				return $this->getTooLong();
			case "tooShort":
				return $this->getTooShort();
			case "rangeUnderflow":
				return $this->getRangeUnderflow();
			case "rangeOverflow":
				return $this->getRangeOverflow();
			case "stepMismatch":
				return $this->getStepMismatch();
			case "badInput":
				return $this->getBadInput();
			case "customError":
				return $this->getCustomError();
			case "valid":
				return $this->getValid();
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
		'@phan-var \Wikimedia\IDLeDOM\ValidityState $this';
		// @var \Wikimedia\IDLeDOM\ValidityState $this
		switch ( $name ) {
			case "valueMissing":
				return true;
			case "typeMismatch":
				return true;
			case "patternMismatch":
				return true;
			case "tooLong":
				return true;
			case "tooShort":
				return true;
			case "rangeUnderflow":
				return true;
			case "rangeOverflow":
				return true;
			case "stepMismatch":
				return true;
			case "badInput":
				return true;
			case "customError":
				return true;
			case "valid":
				return true;
			default:
				break;
		}
		return false;
	}

}
