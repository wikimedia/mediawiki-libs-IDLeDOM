<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Element extends ChildNode, NonDocumentTypeChildNode, ParentNode, Slottable {
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
	public function getClassList() : DOMTokenList;

	/**
	 * @return string
	 */
	public function getSlot() : string;

	/**
	 * @param string $val
	 */
	public function setSlot( string $val ) : void;

	/**
	 * @return NamedNodeMap
	 */
	public function getAttributes() : NamedNodeMap;

	/**
	 * @return ?ShadowRoot
	 */
	public function getShadowRoot() : ?ShadowRoot;

}
