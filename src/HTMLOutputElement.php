<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * HTMLOutputElement
 *
 * @see https://dom.spec.whatwg.org/#interface-htmloutputelement
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
 * @property DOMTokenList $htmlFor
 * @property HTMLFormElement|null $form
 * @property string $name
 * @property string $type
 * @property string $defaultValue
 * @property string $value
 * @property bool $willValidate
 * @property ValidityState $validity
 * @property string $validationMessage
 * @property NodeList $labels
 * @phan-forbid-undeclared-magic-properties
 */
interface HTMLOutputElement extends HTMLElement {
	// Direct parent: HTMLElement

	/**
	 * @return DOMTokenList
	 */
	public function getHtmlFor();

	/**
	 * @return HTMLFormElement|null
	 */
	public function getForm();

	/**
	 * @return string
	 */
	public function getName() : string;

	/**
	 * @param string $val
	 */
	public function setName( string $val ) : void;

	/**
	 * @return string
	 */
	public function getType() : string;

	/**
	 * @return string
	 */
	public function getDefaultValue() : string;

	/**
	 * @param string $val
	 */
	public function setDefaultValue( string $val ) : void;

	/**
	 * @return string
	 */
	public function getValue() : string;

	/**
	 * @param string $val
	 */
	public function setValue( string $val ) : void;

	/**
	 * @return bool
	 */
	public function getWillValidate() : bool;

	/**
	 * @return ValidityState
	 */
	public function getValidity();

	/**
	 * @return string
	 */
	public function getValidationMessage() : string;

	/**
	 * @return bool
	 */
	public function checkValidity() : bool;

	/**
	 * @return bool
	 */
	public function reportValidity() : bool;

	/**
	 * @param string $error
	 * @return void
	 */
	public function setCustomValidity( string $error ) : void;

	/**
	 * @return NodeList
	 */
	public function getLabels();

}
