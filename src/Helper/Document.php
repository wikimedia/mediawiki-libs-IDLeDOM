<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\DocumentType;
use Wikimedia\IDLeDOM\DOMImplementation;
use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\HTMLCollection;
use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeList;

trait Document {
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
			case "children":
				return $this->getChildren();
			case "firstElementChild":
				return $this->getFirstElementChild();
			case "lastElementChild":
				return $this->getLastElementChild();
			case "childElementCount":
				return $this->getChildElementCount();
			case "implementation":
				return $this->getImplementation();
			case "URL":
				return $this->getURL();
			case "documentURI":
				return $this->getDocumentURI();
			case "compatMode":
				return $this->getCompatMode();
			case "characterSet":
				return $this->getCharacterSet();
			case "charset":
				return $this->getCharset();
			case "inputEncoding":
				return $this->getInputEncoding();
			case "contentType":
				return $this->getContentType();
			case "doctype":
				return $this->getDoctype();
			case "documentElement":
				return $this->getDocumentElement();
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
	 * @return \Wikimedia\IDLeDOM\Document|null
	 */
	abstract public function getOwnerDocument();

	/**
	 * @return Node|null
	 */
	abstract public function getParentNode();

	/**
	 * @return Element|null
	 */
	abstract public function getParentElement();

	/**
	 * @return NodeList
	 */
	abstract public function getChildNodes();

	/**
	 * @return Node|null
	 */
	abstract public function getFirstChild();

	/**
	 * @return Node|null
	 */
	abstract public function getLastChild();

	/**
	 * @return Node|null
	 */
	abstract public function getPreviousSibling();

	/**
	 * @return Node|null
	 */
	abstract public function getNextSibling();

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
	 * @return HTMLCollection
	 */
	abstract public function getChildren();

	/**
	 * @return Element|null
	 */
	abstract public function getFirstElementChild();

	/**
	 * @return Element|null
	 */
	abstract public function getLastElementChild();

	/**
	 * @return int
	 */
	abstract public function getChildElementCount() : int;

	/**
	 * @return DOMImplementation
	 */
	abstract public function getImplementation();

	/**
	 * @return string
	 */
	abstract public function getURL() : string;

	/**
	 * @return string
	 */
	abstract public function getDocumentURI() : string;

	/**
	 * @return string
	 */
	abstract public function getCompatMode() : string;

	/**
	 * @return string
	 */
	abstract public function getCharacterSet() : string;

	/**
	 * @return string
	 */
	abstract public function getCharset() : string;

	/**
	 * @return string
	 */
	abstract public function getInputEncoding() : string;

	/**
	 * @return string
	 */
	abstract public function getContentType() : string;

	/**
	 * @return DocumentType|null
	 */
	abstract public function getDoctype();

	/**
	 * @return Element|null
	 */
	abstract public function getDocumentElement();

}
