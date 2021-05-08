<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;

trait HTMLIFrameElement {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\HTMLIFrameElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLIFrameElement $this
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
			case "children":
				return $this->getChildren();
			case "firstElementChild":
				return $this->getFirstElementChild();
			case "lastElementChild":
				return $this->getLastElementChild();
			case "childElementCount":
				return $this->getChildElementCount();
			case "assignedSlot":
				return $this->getAssignedSlot();
			case "namespaceURI":
				return $this->getNamespaceURI();
			case "prefix":
				return $this->getPrefix();
			case "localName":
				return $this->getLocalName();
			case "tagName":
				return $this->getTagName();
			case "id":
				return $this->getId();
			case "className":
				return $this->getClassName();
			case "classList":
				return $this->getClassList();
			case "slot":
				return $this->getSlot();
			case "attributes":
				return $this->getAttributes();
			case "shadowRoot":
				return $this->getShadowRoot();
			case "dataset":
				return $this->getDataset();
			case "nonce":
				return $this->getNonce();
			case "tabIndex":
				return $this->getTabIndex();
			case "title":
				return $this->getTitle();
			case "lang":
				return $this->getLang();
			case "translate":
				return $this->getTranslate();
			case "dir":
				return $this->getDir();
			case "hidden":
				return $this->getHidden();
			case "accessKey":
				return $this->getAccessKey();
			case "accessKeyLabel":
				return $this->getAccessKeyLabel();
			case "draggable":
				return $this->getDraggable();
			case "spellcheck":
				return $this->getSpellcheck();
			case "autocapitalize":
				return $this->getAutocapitalize();
			case "innerText":
				return $this->getInnerText();
			case "offsetParent":
				return $this->getOffsetParent();
			case "offsetTop":
				return $this->getOffsetTop();
			case "offsetLeft":
				return $this->getOffsetLeft();
			case "offsetWidth":
				return $this->getOffsetWidth();
			case "offsetHeight":
				return $this->getOffsetHeight();
			case "src":
				return $this->getSrc();
			case "srcdoc":
				return $this->getSrcdoc();
			case "name":
				return $this->getName();
			case "allowFullscreen":
				return $this->getAllowFullscreen();
			case "width":
				return $this->getWidth();
			case "height":
				return $this->getHeight();
			case "contentDocument":
				return $this->getContentDocument();
			case "align":
				return $this->getAlign();
			case "scrolling":
				return $this->getScrolling();
			case "frameBorder":
				return $this->getFrameBorder();
			case "longDesc":
				return $this->getLongDesc();
			case "marginHeight":
				return $this->getMarginHeight();
			case "marginWidth":
				return $this->getMarginWidth();
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLIFrameElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLIFrameElement $this
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
			case "previousElementSibling":
				return $this->getPreviousElementSibling() !== null;
			case "nextElementSibling":
				return $this->getNextElementSibling() !== null;
			case "children":
				return true;
			case "firstElementChild":
				return $this->getFirstElementChild() !== null;
			case "lastElementChild":
				return $this->getLastElementChild() !== null;
			case "childElementCount":
				return true;
			case "assignedSlot":
				return $this->getAssignedSlot() !== null;
			case "namespaceURI":
				return $this->getNamespaceURI() !== null;
			case "prefix":
				return $this->getPrefix() !== null;
			case "localName":
				return true;
			case "tagName":
				return true;
			case "id":
				return true;
			case "className":
				return true;
			case "classList":
				return true;
			case "slot":
				return true;
			case "attributes":
				return true;
			case "shadowRoot":
				return $this->getShadowRoot() !== null;
			case "dataset":
				return true;
			case "nonce":
				return true;
			case "tabIndex":
				return true;
			case "title":
				return true;
			case "lang":
				return true;
			case "translate":
				return true;
			case "dir":
				return true;
			case "hidden":
				return true;
			case "accessKey":
				return true;
			case "accessKeyLabel":
				return true;
			case "draggable":
				return true;
			case "spellcheck":
				return true;
			case "autocapitalize":
				return true;
			case "innerText":
				return true;
			case "offsetParent":
				return $this->getOffsetParent() !== null;
			case "offsetTop":
				return true;
			case "offsetLeft":
				return true;
			case "offsetWidth":
				return true;
			case "offsetHeight":
				return true;
			case "src":
				return true;
			case "srcdoc":
				return true;
			case "name":
				return true;
			case "allowFullscreen":
				return true;
			case "width":
				return true;
			case "height":
				return true;
			case "contentDocument":
				return $this->getContentDocument() !== null;
			case "align":
				return true;
			case "scrolling":
				return true;
			case "frameBorder":
				return true;
			case "longDesc":
				return true;
			case "marginHeight":
				return true;
			case "marginWidth":
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLIFrameElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLIFrameElement $this
		switch ( $name ) {
			case "nodeValue":
				$this->setNodeValue( $value );
				return;
			case "textContent":
				$this->setTextContent( $value );
				return;
			case "id":
				$this->setId( $value );
				return;
			case "className":
				$this->setClassName( $value );
				return;
			case "slot":
				$this->setSlot( $value );
				return;
			case "nonce":
				$this->setNonce( $value );
				return;
			case "tabIndex":
				$this->setTabIndex( $value );
				return;
			case "title":
				$this->setTitle( $value );
				return;
			case "lang":
				$this->setLang( $value );
				return;
			case "translate":
				$this->setTranslate( $value );
				return;
			case "dir":
				$this->setDir( $value );
				return;
			case "hidden":
				$this->setHidden( $value );
				return;
			case "accessKey":
				$this->setAccessKey( $value );
				return;
			case "draggable":
				$this->setDraggable( $value );
				return;
			case "spellcheck":
				$this->setSpellcheck( $value );
				return;
			case "autocapitalize":
				$this->setAutocapitalize( $value );
				return;
			case "innerText":
				$this->setInnerText( $value );
				return;
			case "src":
				$this->setSrc( $value );
				return;
			case "srcdoc":
				$this->setSrcdoc( $value );
				return;
			case "name":
				$this->setName( $value );
				return;
			case "allowFullscreen":
				$this->setAllowFullscreen( $value );
				return;
			case "width":
				$this->setWidth( $value );
				return;
			case "height":
				$this->setHeight( $value );
				return;
			case "align":
				$this->setAlign( $value );
				return;
			case "scrolling":
				$this->setScrolling( $value );
				return;
			case "frameBorder":
				$this->setFrameBorder( $value );
				return;
			case "longDesc":
				$this->setLongDesc( $value );
				return;
			case "marginHeight":
				$this->setMarginHeight( $value );
				return;
			case "marginWidth":
				$this->setMarginWidth( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLIFrameElement $this';
		// @var \Wikimedia\IDLeDOM\HTMLIFrameElement $this
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
			case "previousElementSibling":
				break;
			case "nextElementSibling":
				break;
			case "children":
				break;
			case "firstElementChild":
				break;
			case "lastElementChild":
				break;
			case "childElementCount":
				break;
			case "assignedSlot":
				break;
			case "namespaceURI":
				break;
			case "prefix":
				break;
			case "localName":
				break;
			case "tagName":
				break;
			case "id":
				break;
			case "className":
				break;
			case "classList":
				break;
			case "slot":
				break;
			case "attributes":
				break;
			case "shadowRoot":
				break;
			case "dataset":
				break;
			case "nonce":
				break;
			case "tabIndex":
				break;
			case "title":
				break;
			case "lang":
				break;
			case "translate":
				break;
			case "dir":
				break;
			case "hidden":
				break;
			case "accessKey":
				break;
			case "accessKeyLabel":
				break;
			case "draggable":
				break;
			case "spellcheck":
				break;
			case "autocapitalize":
				break;
			case "innerText":
				break;
			case "offsetParent":
				break;
			case "offsetTop":
				break;
			case "offsetLeft":
				break;
			case "offsetWidth":
				break;
			case "offsetHeight":
				break;
			case "src":
				break;
			case "srcdoc":
				break;
			case "name":
				break;
			case "allowFullscreen":
				break;
			case "width":
				break;
			case "height":
				break;
			case "contentDocument":
				break;
			case "align":
				break;
			case "scrolling":
				break;
			case "frameBorder":
				break;
			case "longDesc":
				break;
			case "marginHeight":
				break;
			case "marginWidth":
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

	/**
	 * @return string
	 */
	public function getSrcdoc() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'srcdoc' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setSrcdoc( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'srcdoc', $val );
	}

	/**
	 * @return string
	 */
	public function getName() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'name' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setName( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'name', $val );
	}

	/**
	 * @return string
	 */
	public function getWidth() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'width' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setWidth( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'width', $val );
	}

	/**
	 * @return string
	 */
	public function getHeight() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'height' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setHeight( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'height', $val );
	}

	/**
	 * @return string
	 */
	public function getAlign() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'align' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setAlign( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'align', $val );
	}

	/**
	 * @return string
	 */
	public function getScrolling() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'scrolling' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setScrolling( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'scrolling', $val );
	}

	/**
	 * @return string
	 */
	public function getFrameBorder() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'frameborder' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setFrameBorder( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'frameborder', $val );
	}

	/**
	 * @return string
	 */
	public function getMarginHeight() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'marginheight' ) ?? '';
	}

	/**
	 * @param ?string $val
	 */
	public function setMarginHeight( ?string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'marginheight', $val ?? '' );
	}

	/**
	 * @return string
	 */
	public function getMarginWidth() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'marginwidth' ) ?? '';
	}

	/**
	 * @param ?string $val
	 */
	public function setMarginWidth( ?string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'marginwidth', $val ?? '' );
	}

}
