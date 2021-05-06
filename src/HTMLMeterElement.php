<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * HTMLMeterElement
 *
 * @see https://dom.spec.whatwg.org/#interface-htmlmeterelement
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
 * @property float $value
 * @property float $min
 * @property float $max
 * @property float $low
 * @property float $high
 * @property float $optimum
 * @property NodeList $labels
 * @phan-forbid-undeclared-magic-properties
 */
interface HTMLMeterElement extends HTMLElement {
	/**
	 * @return float
	 */
	public function getValue() : float;

	/**
	 * @param float $val
	 */
	public function setValue( float $val ) : void;

	/**
	 * @return float
	 */
	public function getMin() : float;

	/**
	 * @param float $val
	 */
	public function setMin( float $val ) : void;

	/**
	 * @return float
	 */
	public function getMax() : float;

	/**
	 * @param float $val
	 */
	public function setMax( float $val ) : void;

	/**
	 * @return float
	 */
	public function getLow() : float;

	/**
	 * @param float $val
	 */
	public function setLow( float $val ) : void;

	/**
	 * @return float
	 */
	public function getHigh() : float;

	/**
	 * @param float $val
	 */
	public function setHigh( float $val ) : void;

	/**
	 * @return float
	 */
	public function getOptimum() : float;

	/**
	 * @param float $val
	 */
	public function setOptimum( float $val ) : void;

	/**
	 * @return NodeList
	 */
	public function getLabels();

}
