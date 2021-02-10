<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeList;

trait MutationRecord {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
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

	/**
	 * @return string
	 */
	abstract public function getType() : string;

	/**
	 * @return Node
	 */
	abstract public function getTarget() : Node;

	/**
	 * @return NodeList
	 */
	abstract public function getAddedNodes() : NodeList;

	/**
	 * @return NodeList
	 */
	abstract public function getRemovedNodes() : NodeList;

	/**
	 * @return ?Node
	 */
	abstract public function getPreviousSibling() : ?Node;

	/**
	 * @return ?Node
	 */
	abstract public function getNextSibling() : ?Node;

	/**
	 * @return ?string
	 */
	abstract public function getAttributeName() : ?string;

	/**
	 * @return ?string
	 */
	abstract public function getAttributeNamespace() : ?string;

	/**
	 * @return ?string
	 */
	abstract public function getOldValue() : ?string;

}
