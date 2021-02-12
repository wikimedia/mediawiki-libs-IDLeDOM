<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Attr;
use Wikimedia\IDLeDOM\CDATASection;
use Wikimedia\IDLeDOM\Comment;
use Wikimedia\IDLeDOM\DocumentFragment;
use Wikimedia\IDLeDOM\DocumentType;
use Wikimedia\IDLeDOM\DOMImplementation;
use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\ElementCreationOptions;
use Wikimedia\IDLeDOM\Event;
use Wikimedia\IDLeDOM\HTMLCollection;
use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeFilter;
use Wikimedia\IDLeDOM\NodeIterator;
use Wikimedia\IDLeDOM\ProcessingInstruction;
use Wikimedia\IDLeDOM\Range;
use Wikimedia\IDLeDOM\Text;
use Wikimedia\IDLeDOM\TreeWalker;

trait Document {
	use \Wikimedia\IDLeDOM\Stub\Node;
	use \Wikimedia\IDLeDOM\Stub\DocumentOrShadowRoot;
	use \Wikimedia\IDLeDOM\Stub\NonElementParentNode;
	use \Wikimedia\IDLeDOM\Stub\ParentNode;
	use \Wikimedia\IDLeDOM\Stub\XPathEvaluatorBase;

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract protected function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return DOMImplementation
	 */
	public function getImplementation() {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getURL() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getDocumentURI() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getCompatMode() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getCharacterSet() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getCharset() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getInputEncoding() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return string
	 */
	public function getContentType() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return DocumentType|null
	 */
	public function getDoctype() {
		throw self::_unimplemented();
	}

	/**
	 * @return Element|null
	 */
	public function getDocumentElement() {
		throw self::_unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return HTMLCollection
	 */
	public function getElementsByTagName( string $qualifiedName ) {
		throw self::_unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return HTMLCollection
	 */
	public function getElementsByTagNameNS( ?string $namespace, string $localName ) {
		throw self::_unimplemented();
	}

	/**
	 * @param string $classNames
	 * @return HTMLCollection
	 */
	public function getElementsByClassName( string $classNames ) {
		throw self::_unimplemented();
	}

	/**
	 * @param string $localName
	 * @param string|ElementCreationOptions|associative-array|null $options
	 * @return Element
	 */
	public function createElement( string $localName, /* ?mixed */ $options = null ) {
		throw self::_unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @param string|ElementCreationOptions|associative-array|null $options
	 * @return Element
	 */
	public function createElementNS( ?string $namespace, string $qualifiedName, /* ?mixed */ $options = null ) {
		throw self::_unimplemented();
	}

	/**
	 * @return DocumentFragment
	 */
	public function createDocumentFragment() {
		throw self::_unimplemented();
	}

	/**
	 * @param string $data
	 * @return Text
	 */
	public function createTextNode( string $data ) {
		throw self::_unimplemented();
	}

	/**
	 * @param string $data
	 * @return CDATASection
	 */
	public function createCDATASection( string $data ) {
		throw self::_unimplemented();
	}

	/**
	 * @param string $data
	 * @return Comment
	 */
	public function createComment( string $data ) {
		throw self::_unimplemented();
	}

	/**
	 * @param string $target
	 * @param string $data
	 * @return ProcessingInstruction
	 */
	public function createProcessingInstruction( string $target, string $data ) {
		throw self::_unimplemented();
	}

	/**
	 * @param Node $node
	 * @param bool $deep
	 * @return Node
	 */
	public function importNode( /* Node */ $node, bool $deep = false ) {
		throw self::_unimplemented();
	}

	/**
	 * @param Node $node
	 * @return Node
	 */
	public function adoptNode( /* Node */ $node ) {
		throw self::_unimplemented();
	}

	/**
	 * @param string $localName
	 * @return Attr
	 */
	public function createAttribute( string $localName ) {
		throw self::_unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @return Attr
	 */
	public function createAttributeNS( ?string $namespace, string $qualifiedName ) {
		throw self::_unimplemented();
	}

	/**
	 * @param string $interface
	 * @return Event
	 */
	public function createEvent( string $interface ) {
		throw self::_unimplemented();
	}

	/**
	 * @return Range
	 */
	public function createRange() {
		throw self::_unimplemented();
	}

	/**
	 * @param Node $root
	 * @param int $whatToShow
	 * @param NodeFilter|callable|null $filter
	 * @return NodeIterator
	 */
	public function createNodeIterator( /* Node */ $root, int $whatToShow = 0xFFFFFFFF, /* ?mixed */ $filter = null ) {
		throw self::_unimplemented();
	}

	/**
	 * @param Node $root
	 * @param int $whatToShow
	 * @param NodeFilter|callable|null $filter
	 * @return TreeWalker
	 */
	public function createTreeWalker( /* Node */ $root, int $whatToShow = 0xFFFFFFFF, /* ?mixed */ $filter = null ) {
		throw self::_unimplemented();
	}

}
