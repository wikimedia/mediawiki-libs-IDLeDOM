<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\DocumentType;
use Wikimedia\IDLeDOM\DOMImplementation;
use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\HTMLCollection;

trait Document {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
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
	 * @return HTMLCollection
	 */
	abstract public function getChildren() : HTMLCollection;

	/**
	 * @return ?Element
	 */
	abstract public function getFirstElementChild() : ?Element;

	/**
	 * @return ?Element
	 */
	abstract public function getLastElementChild() : ?Element;

	/**
	 * @return int
	 */
	abstract public function getChildElementCount() : int;

	/**
	 * @return DOMImplementation
	 */
	abstract public function getImplementation() : DOMImplementation;

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
	 * @return ?DocumentType
	 */
	abstract public function getDoctype() : ?DocumentType;

	/**
	 * @return ?Element
	 */
	abstract public function getDocumentElement() : ?Element;

}
