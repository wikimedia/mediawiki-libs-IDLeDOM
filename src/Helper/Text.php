<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Document;
use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\HTMLSlotElement;
use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeList;

trait Text {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "nodeType":
				return $this->getNodeType();
			case "nodeName":
				return $this->getNodeName();
			case "baseURI":
				return $this->getBaseURI();
			case "isConnected":
				return $this->getIsConnected();
			case "ownerDocument":
				return $this->getOwnerDocument();
			case "parentNode":
				return $this->getParentNode();
			case "parentElement":
				return $this->getParentElement();
			case "childNodes":
				return $this->getChildNodes();
			case "firstChild":
				return $this->getFirstChild();
			case "lastChild":
				return $this->getLastChild();
			case "previousSibling":
				return $this->getPreviousSibling();
			case "nextSibling":
				return $this->getNextSibling();
			case "nodeValue":
				return $this->getNodeValue();
			case "textContent":
				return $this->getTextContent();
			case "previousElementSibling":
				return $this->getPreviousElementSibling();
			case "nextElementSibling":
				return $this->getNextElementSibling();
			case "data":
				return $this->getData();
			case "length":
				return $this->getLength();
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
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set( string $name, mixed $value ) : void {
		switch ( $name ) {
			case "nodeValue":
				$this->setNodeValue( $value );
				return;
			case "textContent":
				$this->setTextContent( $value );
				return;
			case "data":
				$this->setData( $value );
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

	/**
	 * @return int
	 */
	abstract public function getNodeType() : int;

	/**
	 * @return string
	 */
	abstract public function getNodeName() : string;

	/**
	 * @return string
	 */
	abstract public function getBaseURI() : string;

	/**
	 * @return bool
	 */
	abstract public function getIsConnected() : bool;

	/**
	 * @return ?Document
	 */
	abstract public function getOwnerDocument() : ?Document;

	/**
	 * @return ?Node
	 */
	abstract public function getParentNode() : ?Node;

	/**
	 * @return ?Element
	 */
	abstract public function getParentElement() : ?Element;

	/**
	 * @return NodeList
	 */
	abstract public function getChildNodes() : NodeList;

	/**
	 * @return ?Node
	 */
	abstract public function getFirstChild() : ?Node;

	/**
	 * @return ?Node
	 */
	abstract public function getLastChild() : ?Node;

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
	abstract public function getNodeValue() : ?string;

	/**
	 * @param ?string $value
	 */
	abstract public function setNodeValue( ?string $value ) : void;

	/**
	 * @return ?string
	 */
	abstract public function getTextContent() : ?string;

	/**
	 * @param ?string $value
	 */
	abstract public function setTextContent( ?string $value ) : void;

	/**
	 * @return ?Element
	 */
	abstract public function getPreviousElementSibling() : ?Element;

	/**
	 * @return ?Element
	 */
	abstract public function getNextElementSibling() : ?Element;

	/**
	 * @return string
	 */
	abstract public function getData() : string;

	/**
	 * @param string $value
	 */
	abstract public function setData( string $value ) : void;

	/**
	 * @return int
	 */
	abstract public function getLength() : int;

	/**
	 * @return ?HTMLSlotElement
	 */
	abstract public function getAssignedSlot() : ?HTMLSlotElement;

	/**
	 * @return string
	 */
	abstract public function getWholeText() : string;

}
