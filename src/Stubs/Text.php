<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stubs;

use Wikimedia\IDLeDOM\HTMLSlotElement;

trait Text {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "assignedSlot":
				return $this->getAssignedSlot();
			case "wholeText":
				return $this->getWholeText();
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
	 * @return ?HTMLSlotElement
	 */
	abstract public function getAssignedSlot() : ?HTMLSlotElement;

	/**
	 * @return string
	 */
	abstract public function getWholeText() : string;

}
