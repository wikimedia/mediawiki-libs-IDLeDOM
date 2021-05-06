<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Exception;
use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\HTMLCollection;
use Wikimedia\IDLeDOM\HTMLElement;
use Wikimedia\IDLeDOM\HTMLFormElement;
use Wikimedia\IDLeDOM\HTMLOptGroupElement;
use Wikimedia\IDLeDOM\HTMLOptionElement;
use Wikimedia\IDLeDOM\HTMLOptionsCollection;
use Wikimedia\IDLeDOM\NodeList;
use Wikimedia\IDLeDOM\ValidityState;

trait HTMLSelectElement {
	// use \Wikimedia\IDLeDOM\Stub\HTMLElement;
	// use \Wikimedia\IDLeDOM\Stub\Element;
	// use \Wikimedia\IDLeDOM\Stub\Node;
	// use \Wikimedia\IDLeDOM\Stub\EventTarget;
	// use \Wikimedia\IDLeDOM\Stub\ChildNode;
	// use \Wikimedia\IDLeDOM\Stub\NonDocumentTypeChildNode;
	// use \Wikimedia\IDLeDOM\Stub\ParentNode;
	// use \Wikimedia\IDLeDOM\Stub\Slottable;
	// use \Wikimedia\IDLeDOM\Stub\HTMLOrSVGElement;

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return Exception
	 */
	abstract protected function _unimplemented() : Exception;

	// phpcs:enable

	/**
	 * @return bool
	 */
	public function getAutofocus() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @param bool $val
	 */
	public function setAutofocus( bool $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getDisabled() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @param bool $val
	 */
	public function setDisabled( bool $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return HTMLFormElement|null
	 */
	public function getForm() {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getMultiple() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @param bool $val
	 */
	public function setMultiple( bool $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getName() : string {
		throw self::_unimplemented();
	}

	/**
	 * @param string $val
	 */
	public function setName( string $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getRequired() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @param bool $val
	 */
	public function setRequired( bool $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getSize() : int {
		throw self::_unimplemented();
	}

	/**
	 * @param int $val
	 */
	public function setSize( int $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getType() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return HTMLOptionsCollection
	 */
	public function getOptions() {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getLength() : int {
		throw self::_unimplemented();
	}

	/**
	 * @param int $val
	 */
	public function setLength( int $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @param int $index
	 * @return Element|null
	 */
	public function item( int $index ) {
		throw self::_unimplemented();
	}

	/**
	 * @param string $name
	 * @return HTMLOptionElement|null
	 */
	public function namedItem( string $name ) {
		throw self::_unimplemented();
	}

	/**
	 * @param HTMLOptionElement|HTMLOptGroupElement $element
	 * @param HTMLElement|int|null $before
	 * @return void
	 */
	public function add( /* mixed */ $element, /* ?mixed */ $before = null ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return HTMLCollection
	 */
	public function getSelectedOptions() {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getSelectedIndex() : int {
		throw self::_unimplemented();
	}

	/**
	 * @param int $val
	 */
	public function setSelectedIndex( int $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getValue() : string {
		throw self::_unimplemented();
	}

	/**
	 * @param string $val
	 */
	public function setValue( string $val ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getWillValidate() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @return ValidityState
	 */
	public function getValidity() {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getValidationMessage() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function checkValidity() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function reportValidity() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @param string $error
	 * @return void
	 */
	public function setCustomValidity( string $error ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @return NodeList
	 */
	public function getLabels() {
		throw self::_unimplemented();
	}

}
