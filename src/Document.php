<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Document extends Node, DocumentOrShadowRoot, NonElementParentNode, ParentNode, XPathEvaluatorBase {

	/**
	 * @return DOMImplementation
	 */
	public function getImplementation();

	/**
	 * @return string
	 */
	public function getURL() : string;

	/**
	 * @return string
	 */
	public function getDocumentURI() : string;

	/**
	 * @return string
	 */
	public function getCompatMode() : string;

	/**
	 * @return string
	 */
	public function getCharacterSet() : string;

	/**
	 * @return string
	 */
	public function getContentType() : string;

	/**
	 * @return DocumentType|null
	 */
	public function getDoctype();

	/**
	 * @return Element|null
	 */
	public function getDocumentElement();

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

	/**
	 * @param string $localName
	 * @param string|ElementCreationOptions|associative-array|null $options
	 * @return Element
	 */
	public function createElement( string $localName, /* ?mixed */ $options = null );

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @param string|ElementCreationOptions|associative-array|null $options
	 * @return Element
	 */
	public function createElementNS( ?string $namespace, string $qualifiedName, /* ?mixed */ $options = null );

	/**
	 * @return DocumentFragment
	 */
	public function createDocumentFragment();

	/**
	 * @param string $data
	 * @return Text
	 */
	public function createTextNode( string $data );

	/**
	 * @param string $data
	 * @return CDATASection
	 */
	public function createCDATASection( string $data );

	/**
	 * @param string $data
	 * @return Comment
	 */
	public function createComment( string $data );

	/**
	 * @param string $target
	 * @param string $data
	 * @return ProcessingInstruction
	 */
	public function createProcessingInstruction( string $target, string $data );

	/**
	 * @param Node $node
	 * @param bool $deep
	 * @return Node
	 */
	public function importNode( /* Node */ $node, bool $deep = false );

	/**
	 * @param Node $node
	 * @return Node
	 */
	public function adoptNode( /* Node */ $node );

	/**
	 * @param string $localName
	 * @return Attr
	 */
	public function createAttribute( string $localName );

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @return Attr
	 */
	public function createAttributeNS( ?string $namespace, string $qualifiedName );

	/**
	 * @return Range
	 */
	public function createRange();

	/**
	 * @param Node $root
	 * @param int $whatToShow
	 * @param NodeFilter|callable|null $filter
	 * @return NodeIterator
	 */
	public function createNodeIterator( /* Node */ $root, int $whatToShow = 0xFFFFFFFF, /* ?mixed */ $filter = null );

	/**
	 * @param Node $root
	 * @param int $whatToShow
	 * @param NodeFilter|callable|null $filter
	 * @return TreeWalker
	 */
	public function createTreeWalker( /* Node */ $root, int $whatToShow = 0xFFFFFFFF, /* ?mixed */ $filter = null );

}
