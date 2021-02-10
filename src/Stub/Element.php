<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Attr;
use Wikimedia\IDLeDOM\DOMTokenList;
use Wikimedia\IDLeDOM\HTMLCollection;
use Wikimedia\IDLeDOM\NamedNodeMap;
use Wikimedia\IDLeDOM\ShadowRoot;
use Wikimedia\IDLeDOM\ShadowRootInit;

trait Element {
	use \Wikimedia\IDLeDOM\Stub\Node;
	use \Wikimedia\IDLeDOM\Stub\ChildNode;
	use \Wikimedia\IDLeDOM\Stub\NonDocumentTypeChildNode;
	use \Wikimedia\IDLeDOM\Stub\ParentNode;
	use \Wikimedia\IDLeDOM\Stub\Slottable;

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return ?string
	 */
	public function getNamespaceURI() : ?string {
		throw self::unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getPrefix() : ?string {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getLocalName() : string {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getTagName() : string {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getId() : string {
		throw self::unimplemented();
	}

	/**
	 * @param string $val
	 */
	public function setId( string $val ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getClassName() : string {
		throw self::unimplemented();
	}

	/**
	 * @param string $val
	 */
	public function setClassName( string $val ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return DOMTokenList
	 */
	public function getClassList() : DOMTokenList {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getSlot() : string {
		throw self::unimplemented();
	}

	/**
	 * @param string $val
	 */
	public function setSlot( string $val ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function hasAttributes() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return NamedNodeMap
	 */
	public function getAttributes() : NamedNodeMap {
		throw self::unimplemented();
	}

	/**
	 * @return list<string>
	 */
	public function getAttributeNames() : array {
		throw self::unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return ?string
	 */
	public function getAttribute( string $qualifiedName ) : ?string {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return ?string
	 */
	public function getAttributeNS( ?string $namespace, string $localName ) : ?string {
		throw self::unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @param string $value
	 * @return void
	 */
	public function setAttribute( string $qualifiedName, string $value ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @param string $value
	 * @return void
	 */
	public function setAttributeNS( ?string $namespace, string $qualifiedName, string $value ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return void
	 */
	public function removeAttribute( string $qualifiedName ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return void
	 */
	public function removeAttributeNS( ?string $namespace, string $localName ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @param ?bool $force
	 * @return bool
	 */
	public function toggleAttribute( string $qualifiedName, ?bool $force = null ) : bool {
		throw self::unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return bool
	 */
	public function hasAttribute( string $qualifiedName ) : bool {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return bool
	 */
	public function hasAttributeNS( ?string $namespace, string $localName ) : bool {
		throw self::unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return ?Attr
	 */
	public function getAttributeNode( string $qualifiedName ) : ?Attr {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return ?Attr
	 */
	public function getAttributeNodeNS( ?string $namespace, string $localName ) : ?Attr {
		throw self::unimplemented();
	}

	/**
	 * @param Attr $attr
	 * @return ?Attr
	 */
	public function setAttributeNode( Attr $attr ) : ?Attr {
		throw self::unimplemented();
	}

	/**
	 * @param Attr $attr
	 * @return ?Attr
	 */
	public function setAttributeNodeNS( Attr $attr ) : ?Attr {
		throw self::unimplemented();
	}

	/**
	 * @param Attr $attr
	 * @return Attr
	 */
	public function removeAttributeNode( Attr $attr ) : Attr {
		throw self::unimplemented();
	}

	/**
	 * @param ShadowRootInit|associative-array $init
	 * @return ShadowRoot
	 */
	public function attachShadow( /* mixed */ $init ) : ShadowRoot {
		throw self::unimplemented();
	}

	/**
	 * @return ?ShadowRoot
	 */
	public function getShadowRoot() : ?ShadowRoot {
		throw self::unimplemented();
	}

	/**
	 * @param string $selectors
	 * @return ?\Wikimedia\IDLeDOM\Element
	 */
	public function closest( string $selectors ) : ?\Wikimedia\IDLeDOM\Element {
		throw self::unimplemented();
	}

	/**
	 * @param string $selectors
	 * @return bool
	 */
	public function matches( string $selectors ) : bool {
		throw self::unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return HTMLCollection
	 */
	public function getElementsByTagName( string $qualifiedName ) : HTMLCollection {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return HTMLCollection
	 */
	public function getElementsByTagNameNS( ?string $namespace, string $localName ) : HTMLCollection {
		throw self::unimplemented();
	}

	/**
	 * @param string $classNames
	 * @return HTMLCollection
	 */
	public function getElementsByClassName( string $classNames ) : HTMLCollection {
		throw self::unimplemented();
	}

}
