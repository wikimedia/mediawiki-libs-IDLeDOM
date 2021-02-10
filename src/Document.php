<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Document extends Node, DocumentOrShadowRoot, NonElementParentNode, ParentNode, XPathEvaluatorBase {

	/**
	 * @return DOMImplementation
	 */
	public function getImplementation() : DOMImplementation;

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
	 * @return ?DocumentType
	 */
	public function getDoctype() : ?DocumentType;

	/**
	 * @return ?Element
	 */
	public function getDocumentElement() : ?Element;

	/**
	 * @param string $qualifiedName
	 * @return HTMLCollection
	 */
	public function getElementsByTagName( string $qualifiedName ) : HTMLCollection;

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return HTMLCollection
	 */
	public function getElementsByTagNameNS( ?string $namespace, string $localName ) : HTMLCollection;

	/**
	 * @param string $classNames
	 * @return HTMLCollection
	 */
	public function getElementsByClassName( string $classNames ) : HTMLCollection;

	/**
	 * @param string $localName
	 * @param string|ElementCreationOptions|associative-array|null $options
	 * @return Element
	 */
	public function createElement( string $localName, /* ?mixed */ $options = null ) : Element;

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @param string|ElementCreationOptions|associative-array|null $options
	 * @return Element
	 */
	public function createElementNS( ?string $namespace, string $qualifiedName, /* ?mixed */ $options = null ) : Element;

	/**
	 * @return DocumentFragment
	 */
	public function createDocumentFragment() : DocumentFragment;

	/**
	 * @param string $data
	 * @return Text
	 */
	public function createTextNode( string $data ) : Text;

	/**
	 * @param string $data
	 * @return CDATASection
	 */
	public function createCDATASection( string $data ) : CDATASection;

	/**
	 * @param string $data
	 * @return Comment
	 */
	public function createComment( string $data ) : Comment;

	/**
	 * @param string $target
	 * @param string $data
	 * @return ProcessingInstruction
	 */
	public function createProcessingInstruction( string $target, string $data ) : ProcessingInstruction;

	/**
	 * @param Node $node
	 * @param bool $deep
	 * @return Node
	 */
	public function importNode( Node $node, bool $deep = false ) : Node;

	/**
	 * @param Node $node
	 * @return Node
	 */
	public function adoptNode( Node $node ) : Node;

	/**
	 * @param string $localName
	 * @return Attr
	 */
	public function createAttribute( string $localName ) : Attr;

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @return Attr
	 */
	public function createAttributeNS( ?string $namespace, string $qualifiedName ) : Attr;

	/**
	 * @return Range
	 */
	public function createRange() : Range;

	/**
	 * @param Node $root
	 * @param int $whatToShow
	 * @param NodeFilter|callable|null $filter
	 * @return NodeIterator
	 */
	public function createNodeIterator( Node $root, int $whatToShow = 0xFFFFFFFF, /* ?mixed */ $filter = null ) : NodeIterator;

	/**
	 * @param Node $root
	 * @param int $whatToShow
	 * @param NodeFilter|callable|null $filter
	 * @return TreeWalker
	 */
	public function createTreeWalker( Node $root, int $whatToShow = 0xFFFFFFFF, /* ?mixed */ $filter = null ) : TreeWalker;

}
