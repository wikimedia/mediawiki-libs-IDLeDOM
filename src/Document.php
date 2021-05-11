<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * Document
 *
 * @see https://dom.spec.whatwg.org/#interface-document
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
 * @property HTMLCollection $children
 * @property Element|null $firstElementChild
 * @property Element|null $lastElementChild
 * @property int $childElementCount
 * @property DOMImplementation $implementation
 * @property string $URL
 * @property string $documentURI
 * @property string $compatMode
 * @property string $characterSet
 * @property string $charset
 * @property string $inputEncoding
 * @property string $contentType
 * @property string $encoding
 * @property DocumentType|null $doctype
 * @property Element|null $documentElement
 * @phan-forbid-undeclared-magic-properties
 */
interface Document extends Node, DocumentOrShadowRoot, NonElementParentNode, ParentNode, XPathEvaluatorBase {
	// Direct parent: Node

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
	public function getCharset() : string;

	/**
	 * @return string
	 */
	public function getInputEncoding() : string;

	/**
	 * @return string
	 */
	public function getContentType() : string;

	/**
	 * @return string
	 */
	public function getEncoding() : string;

	/**
	 * @param string $val
	 */
	public function setEncoding( string $val ) : void;

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
	 * @param string $interface
	 * @return Event
	 */
	public function createEvent( string $interface );

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
