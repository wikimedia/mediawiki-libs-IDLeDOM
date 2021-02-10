<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Document;
use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\GetRootNodeOptions;
use Wikimedia\IDLeDOM\NodeList;

trait Node {
	use \Wikimedia\IDLeDOM\Stub\EventTarget;

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return int
	 */
	public function getNodeType() : int {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getNodeName() : string {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getBaseURI() : string {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getIsConnected() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return ?Document
	 */
	public function getOwnerDocument() : ?Document {
		throw self::unimplemented();
	}

	/**
	 * @param GetRootNodeOptions|associative-array|null $options
	 * @return \Wikimedia\IDLeDOM\Node
	 */
	public function getRootNode( /* ?mixed */ $options = null ) : \Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?\Wikimedia\IDLeDOM\Node
	 */
	public function getParentNode() : ?\Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Element
	 */
	public function getParentElement() : ?Element {
		throw self::unimplemented();
	}

	/**
	 * @return bool
	 */
	public function hasChildNodes() : bool {
		throw self::unimplemented();
	}

	/**
	 * @return NodeList
	 */
	public function getChildNodes() : NodeList {
		throw self::unimplemented();
	}

	/**
	 * @return ?\Wikimedia\IDLeDOM\Node
	 */
	public function getFirstChild() : ?\Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?\Wikimedia\IDLeDOM\Node
	 */
	public function getLastChild() : ?\Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?\Wikimedia\IDLeDOM\Node
	 */
	public function getPreviousSibling() : ?\Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?\Wikimedia\IDLeDOM\Node
	 */
	public function getNextSibling() : ?\Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getNodeValue() : ?string {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $val
	 */
	public function setNodeValue( ?string $val ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getTextContent() : ?string {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $val
	 */
	public function setTextContent( ?string $val ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function normalize() : void {
		throw self::unimplemented();
	}

	/**
	 * @param bool $deep
	 * @return \Wikimedia\IDLeDOM\Node
	 */
	public function cloneNode( bool $deep = false ) : \Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @param ?\Wikimedia\IDLeDOM\Node $otherNode
	 * @return bool
	 */
	public function isEqualNode( ?\Wikimedia\IDLeDOM\Node $otherNode ) : bool {
		throw self::unimplemented();
	}

	/**
	 * @param \Wikimedia\IDLeDOM\Node $other
	 * @return int
	 */
	public function compareDocumentPosition( \Wikimedia\IDLeDOM\Node $other ) : int {
		throw self::unimplemented();
	}

	/**
	 * @param ?\Wikimedia\IDLeDOM\Node $other
	 * @return bool
	 */
	public function contains( ?\Wikimedia\IDLeDOM\Node $other ) : bool {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @return ?string
	 */
	public function lookupPrefix( ?string $namespace ) : ?string {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $prefix
	 * @return ?string
	 */
	public function lookupNamespaceURI( ?string $prefix ) : ?string {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @return bool
	 */
	public function isDefaultNamespace( ?string $namespace ) : bool {
		throw self::unimplemented();
	}

	/**
	 * @param \Wikimedia\IDLeDOM\Node $node
	 * @param ?\Wikimedia\IDLeDOM\Node $child
	 * @return \Wikimedia\IDLeDOM\Node
	 */
	public function insertBefore( \Wikimedia\IDLeDOM\Node $node, ?\Wikimedia\IDLeDOM\Node $child ) : \Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @param \Wikimedia\IDLeDOM\Node $node
	 * @return \Wikimedia\IDLeDOM\Node
	 */
	public function appendChild( \Wikimedia\IDLeDOM\Node $node ) : \Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @param \Wikimedia\IDLeDOM\Node $node
	 * @param \Wikimedia\IDLeDOM\Node $child
	 * @return \Wikimedia\IDLeDOM\Node
	 */
	public function replaceChild( \Wikimedia\IDLeDOM\Node $node, \Wikimedia\IDLeDOM\Node $child ) : \Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

	/**
	 * @param \Wikimedia\IDLeDOM\Node $child
	 * @return \Wikimedia\IDLeDOM\Node
	 */
	public function removeChild( \Wikimedia\IDLeDOM\Node $child ) : \Wikimedia\IDLeDOM\Node {
		throw self::unimplemented();
	}

}
