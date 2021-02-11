<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Element extends Node, ChildNode, NonDocumentTypeChildNode, ParentNode, Slottable {
	/**
	 * @return ?string
	 */
	public function getNamespaceURI() : ?string;

	/**
	 * @return ?string
	 */
	public function getPrefix() : ?string;

	/**
	 * @return string
	 */
	public function getLocalName() : string;

	/**
	 * @return string
	 */
	public function getTagName() : string;

	/**
	 * @return string
	 */
	public function getId() : string;

	/**
	 * @param string $val
	 */
	public function setId( string $val ) : void;

	/**
	 * @return string
	 */
	public function getClassName() : string;

	/**
	 * @param string $val
	 */
	public function setClassName( string $val ) : void;

	/**
	 * @return DOMTokenList
	 */
	public function getClassList();

	/**
	 * @return string
	 */
	public function getSlot() : string;

	/**
	 * @param string $val
	 */
	public function setSlot( string $val ) : void;

	/**
	 * @return bool
	 */
	public function hasAttributes() : bool;

	/**
	 * @return NamedNodeMap
	 */
	public function getAttributes();

	/**
	 * @return list<string>
	 */
	public function getAttributeNames() : array;

	/**
	 * @param string $qualifiedName
	 * @return ?string
	 */
	public function getAttribute( string $qualifiedName ) : ?string;

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return ?string
	 */
	public function getAttributeNS( ?string $namespace, string $localName ) : ?string;

	/**
	 * @param string $qualifiedName
	 * @param string $value
	 * @return void
	 */
	public function setAttribute( string $qualifiedName, string $value ) : void;

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @param string $value
	 * @return void
	 */
	public function setAttributeNS( ?string $namespace, string $qualifiedName, string $value ) : void;

	/**
	 * @param string $qualifiedName
	 * @return void
	 */
	public function removeAttribute( string $qualifiedName ) : void;

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return void
	 */
	public function removeAttributeNS( ?string $namespace, string $localName ) : void;

	/**
	 * @param string $qualifiedName
	 * @param ?bool $force
	 * @return bool
	 */
	public function toggleAttribute( string $qualifiedName, ?bool $force = null ) : bool;

	/**
	 * @param string $qualifiedName
	 * @return bool
	 */
	public function hasAttribute( string $qualifiedName ) : bool;

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return bool
	 */
	public function hasAttributeNS( ?string $namespace, string $localName ) : bool;

	/**
	 * @param string $qualifiedName
	 * @return Attr|null
	 */
	public function getAttributeNode( string $qualifiedName );

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return Attr|null
	 */
	public function getAttributeNodeNS( ?string $namespace, string $localName );

	/**
	 * @param Attr $attr
	 * @return Attr|null
	 */
	public function setAttributeNode( /* Attr */ $attr );

	/**
	 * @param Attr $attr
	 * @return Attr|null
	 */
	public function setAttributeNodeNS( /* Attr */ $attr );

	/**
	 * @param Attr $attr
	 * @return Attr
	 */
	public function removeAttributeNode( /* Attr */ $attr );

	/**
	 * @param ShadowRootInit|associative-array $init
	 * @return ShadowRoot
	 */
	public function attachShadow( /* mixed */ $init );

	/**
	 * @return ShadowRoot|null
	 */
	public function getShadowRoot();

	/**
	 * @param string $selectors
	 * @return \Wikimedia\IDLeDOM\Element|null
	 */
	public function closest( string $selectors );

	/**
	 * @param string $selectors
	 * @return bool
	 */
	public function matches( string $selectors ) : bool;

	/**
	 * @param string $qualifiedName
	 * @return HTMLCollection
	 */
	public function getElementsByTagName( string $qualifiedName );

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return HTMLCollection
	 */
	public function getElementsByTagNameNS( ?string $namespace, string $localName );

	/**
	 * @param string $classNames
	 * @return HTMLCollection
	 */
	public function getElementsByClassName( string $classNames );

}
