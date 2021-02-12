<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait MutationRecord {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\MutationRecord $this';
		// @var \Wikimedia\IDLeDOM\MutationRecord $this
		switch ( $name ) {
			case "type":
				return $this->getType();
			case "target":
				return $this->getTarget();
			case "addedNodes":
				return $this->getAddedNodes();
			case "removedNodes":
				return $this->getRemovedNodes();
			case "previousSibling":
				return $this->getPreviousSibling();
			case "nextSibling":
				return $this->getNextSibling();
			case "attributeName":
				return $this->getAttributeName();
			case "attributeNamespace":
				return $this->getAttributeNamespace();
			case "oldValue":
				return $this->getOldValue();
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
