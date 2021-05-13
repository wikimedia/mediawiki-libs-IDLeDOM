<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait XMLDocument {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\XMLDocument $this';
		// @var \Wikimedia\IDLeDOM\XMLDocument $this
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
			case "encoding":
				return $this->getEncoding();
			case "doctype":
				return $this->getDoctype();
			case "documentElement":
				return $this->getDocumentElement();
			case "referrer":
				return $this->getReferrer();
			case "cookie":
				return $this->getCookie();
			case "lastModified":
				return $this->getLastModified();
			case "title":
				return $this->getTitle();
			case "dir":
				return $this->getDir();
			case "body":
				return $this->getBody();
			case "head":
				return $this->getHead();
			case "images":
				return $this->getImages();
			case "embeds":
				return $this->getEmbeds();
			case "plugins":
				return $this->getPlugins();
			case "links":
				return $this->getLinks();
			case "forms":
				return $this->getForms();
			case "scripts":
				return $this->getScripts();
			case "currentScript":
				return $this->getCurrentScript();
			case "onreadystatechange":
				return $this->getOnreadystatechange();
			case "anchors":
				return $this->getAnchors();
			case "applets":
				return $this->getApplets();
			case "hidden":
				return $this->getHidden();
			case "visibilityState":
				return $this->getVisibilityState();
			case "onvisibilitychange":
				return $this->getOnvisibilitychange();
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
		'@phan-var \Wikimedia\IDLeDOM\XMLDocument $this';
		// @var \Wikimedia\IDLeDOM\XMLDocument $this
		switch ( $name ) {
			case "nodeType":
				return true;
			case "nodeName":
				return true;
			case "baseURI":
				return true;
			case "isConnected":
				return true;
			case "ownerDocument":
				return $this->getOwnerDocument() !== null;
			case "parentNode":
				return $this->getParentNode() !== null;
			case "parentElement":
				return $this->getParentElement() !== null;
			case "childNodes":
				return true;
			case "firstChild":
				return $this->getFirstChild() !== null;
			case "lastChild":
				return $this->getLastChild() !== null;
			case "previousSibling":
				return $this->getPreviousSibling() !== null;
			case "nextSibling":
				return $this->getNextSibling() !== null;
			case "nodeValue":
				return $this->getNodeValue() !== null;
			case "textContent":
				return $this->getTextContent() !== null;
			case "children":
				return true;
			case "firstElementChild":
				return $this->getFirstElementChild() !== null;
			case "lastElementChild":
				return $this->getLastElementChild() !== null;
			case "childElementCount":
				return true;
			case "implementation":
				return true;
			case "URL":
				return true;
			case "documentURI":
				return true;
			case "compatMode":
				return true;
			case "characterSet":
				return true;
			case "charset":
				return true;
			case "inputEncoding":
				return true;
			case "contentType":
				return true;
			case "encoding":
				return true;
			case "doctype":
				return $this->getDoctype() !== null;
			case "documentElement":
				return $this->getDocumentElement() !== null;
			case "referrer":
				return true;
			case "cookie":
				return true;
			case "lastModified":
				return true;
			case "title":
				return true;
			case "dir":
				return true;
			case "body":
				return $this->getBody() !== null;
			case "head":
				return $this->getHead() !== null;
			case "images":
				return true;
			case "embeds":
				return true;
			case "plugins":
				return true;
			case "links":
				return true;
			case "forms":
				return true;
			case "scripts":
				return true;
			case "currentScript":
				return $this->getCurrentScript() !== null;
			case "onreadystatechange":
				return true;
			case "anchors":
				return true;
			case "applets":
				return true;
			case "hidden":
				return true;
			case "visibilityState":
				return true;
			case "onvisibilitychange":
				return true;
			default:
				break;
		}
		return false;
	}

	/**
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set( string $name, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\XMLDocument $this';
		// @var \Wikimedia\IDLeDOM\XMLDocument $this
		switch ( $name ) {
			case "nodeValue":
				$this->setNodeValue( $value );
				return;
			case "textContent":
				$this->setTextContent( $value );
				return;
			case "encoding":
				$this->setEncoding( $value );
				return;
			case "cookie":
				$this->setCookie( $value );
				return;
			case "title":
				$this->setTitle( $value );
				return;
			case "dir":
				$this->setDir( $value );
				return;
			case "body":
				$this->setBody( $value );
				return;
			case "onreadystatechange":
				$this->setOnreadystatechange( $value );
				return;
			case "onvisibilitychange":
				$this->setOnvisibilitychange( $value );
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
	 * @param string $name
	 */
	public function __unset( string $name ) : void {
		'@phan-var \Wikimedia\IDLeDOM\XMLDocument $this';
		// @var \Wikimedia\IDLeDOM\XMLDocument $this
		switch ( $name ) {
			case "nodeType":
				break;
			case "nodeName":
				break;
			case "baseURI":
				break;
			case "isConnected":
				break;
			case "ownerDocument":
				break;
			case "parentNode":
				break;
			case "parentElement":
				break;
			case "childNodes":
				break;
			case "firstChild":
				break;
			case "lastChild":
				break;
			case "previousSibling":
				break;
			case "nextSibling":
				break;
			case "nodeValue":
				$this->setNodeValue( null );
				return;
			case "textContent":
				$this->setTextContent( null );
				return;
			case "children":
				break;
			case "firstElementChild":
				break;
			case "lastElementChild":
				break;
			case "childElementCount":
				break;
			case "implementation":
				break;
			case "URL":
				break;
			case "documentURI":
				break;
			case "compatMode":
				break;
			case "characterSet":
				break;
			case "charset":
				break;
			case "inputEncoding":
				break;
			case "contentType":
				break;
			case "encoding":
				break;
			case "doctype":
				break;
			case "documentElement":
				break;
			case "referrer":
				break;
			case "cookie":
				break;
			case "lastModified":
				break;
			case "title":
				break;
			case "dir":
				break;
			case "body":
				$this->setBody( null );
				return;
			case "head":
				break;
			case "images":
				break;
			case "embeds":
				break;
			case "plugins":
				break;
			case "links":
				break;
			case "forms":
				break;
			case "scripts":
				break;
			case "currentScript":
				break;
			case "onreadystatechange":
				break;
			case "anchors":
				break;
			case "applets":
				break;
			case "hidden":
				break;
			case "visibilityState":
				break;
			case "onvisibilitychange":
				break;
			default:
				return;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __unset(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

}
