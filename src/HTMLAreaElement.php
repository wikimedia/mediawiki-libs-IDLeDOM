<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * HTMLAreaElement
 *
 * @see https://dom.spec.whatwg.org/#interface-htmlareaelement
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
 * @property string $innerHTML
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
 * @property string $outerHTML
 * @property string $contentEditable
 * @property string $enterKeyHint
 * @property bool $isContentEditable
 * @property string $inputMode
 * @property EventHandlerNonNull|callable|null $onload
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
 * @property string $origin
 * @property string $protocol
 * @property string $username
 * @property string $password
 * @property string $host
 * @property string $hostname
 * @property string $port
 * @property string $pathname
 * @property string $search
 * @property string $hash
 * @property string $referrerPolicy
 * @property string $alt
 * @property string $coords
 * @property string $shape
 * @property string $target
 * @property string $rel
 * @property DOMTokenList $relList
 * @property bool $noHref
 * @phan-forbid-undeclared-magic-properties
 */
interface HTMLAreaElement extends HTMLElement, HTMLHyperlinkElementUtils, ReferrerPolicy {
	// Direct parent: HTMLElement

	/**
	 * @return string
	 */
	public function getAlt() : string;

	/**
	 * @param string $val
	 */
	public function setAlt( string $val ) : void;

	/**
	 * @return string
	 */
	public function getCoords() : string;

	/**
	 * @param string $val
	 */
	public function setCoords( string $val ) : void;

	/**
	 * @return string
	 */
	public function getShape() : string;

	/**
	 * @param string $val
	 */
	public function setShape( string $val ) : void;

	/**
	 * @return string
	 */
	public function getTarget() : string;

	/**
	 * @param string $val
	 */
	public function setTarget( string $val ) : void;

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
	 * @return bool
	 */
	public function getNoHref() : bool;

	/**
	 * @param bool $val
	 */
	public function setNoHref( bool $val ) : void;

}
