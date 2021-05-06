<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * HTMLLinkElement
 *
 * @see https://dom.spec.whatwg.org/#interface-htmllinkelement
 *
 * @property int $nodeType
 * @property string $nodeName
 * @property string $baseURI
 * @property bool $isConnected
 * @property Document|null $ownerDocument
 * @property Node|null $parentNode
 * @property Element|null $parentElement
 * @property NodeList $childNodes
 * @property Node|null $firstChild
 * @property Node|null $lastChild
 * @property Node|null $previousSibling
 * @property Node|null $nextSibling
 * @property ?string $nodeValue
 * @property ?string $textContent
 * @property Element|null $previousElementSibling
 * @property Element|null $nextElementSibling
 * @property HTMLCollection $children
 * @property Element|null $firstElementChild
 * @property Element|null $lastElementChild
 * @property int $childElementCount
 * @property HTMLSlotElement|null $assignedSlot
 * @property ?string $namespaceURI
 * @property ?string $prefix
 * @property string $localName
 * @property string $tagName
 * @property string $id
 * @property string $className
 * @property DOMTokenList $classList
 * @property string $slot
 * @property NamedNodeMap $attributes
 * @property ShadowRoot|null $shadowRoot
 * @property DOMStringMap $dataset
 * @property string $nonce
 * @property int $tabIndex
 * @property string $title
 * @property string $lang
 * @property bool $translate
 * @property string $dir
 * @property bool $hidden
 * @property string $accessKey
 * @property string $accessKeyLabel
 * @property bool $draggable
 * @property bool $spellcheck
 * @property string $autocapitalize
 * @property string $innerText
 * @property Element|null $offsetParent
 * @property int $offsetTop
 * @property int $offsetLeft
 * @property int $offsetWidth
 * @property int $offsetHeight
 * @property string $href
 * @property ?string $crossOrigin
 * @property string $rel
 * @property DOMTokenList $relList
 * @property string $media
 * @property string $hreflang
 * @property string $type
 * @property string $charset
 * @property string $rev
 * @property string $target
 * @phan-forbid-undeclared-magic-properties
 */
interface HTMLLinkElement extends HTMLElement {
	/**
	 * @return string
	 */
	public function getHref() : string;

	/**
	 * @param string $val
	 */
	public function setHref( string $val ) : void;

	/**
	 * @return ?string
	 */
	public function getCrossOrigin() : ?string;

	/**
	 * @param ?string $val
	 */
	public function setCrossOrigin( ?string $val ) : void;

	/**
	 * @return string
	 */
	public function getRel() : string;

	/**
	 * @param string $val
	 */
	public function setRel( string $val ) : void;

	/**
	 * @return DOMTokenList
	 */
	public function getRelList();

	/**
	 * @return string
	 */
	public function getMedia() : string;

	/**
	 * @param string $val
	 */
	public function setMedia( string $val ) : void;

	/**
	 * @return string
	 */
	public function getHreflang() : string;

	/**
	 * @param string $val
	 */
	public function setHreflang( string $val ) : void;

	/**
	 * @return string
	 */
	public function getType() : string;

	/**
	 * @param string $val
	 */
	public function setType( string $val ) : void;

	/**
	 * @return string
	 */
	public function getCharset() : string;

	/**
	 * @param string $val
	 */
	public function setCharset( string $val ) : void;

	/**
	 * @return string
	 */
	public function getRev() : string;

	/**
	 * @param string $val
	 */
	public function setRev( string $val ) : void;

	/**
	 * @return string
	 */
	public function getTarget() : string;

	/**
	 * @param string $val
	 */
	public function setTarget( string $val ) : void;

}
