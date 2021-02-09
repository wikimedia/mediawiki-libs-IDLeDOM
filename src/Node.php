<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Node {

	/**
	 * @return int
	 */
	public function getNodeType() : int;

	/**
	 * @return string
	 */
	public function getNodeName() : string;

	/**
	 * @return string
	 */
	public function getBaseURI() : string;

	/**
	 * @return bool
	 */
	public function getIsConnected() : bool;

	/**
	 * @return ?Document
	 */
	public function getOwnerDocument() : ?Document;

	/**
	 * @return ?Node
	 */
	public function getParentNode() : ?Node;

	/**
	 * @return ?Element
	 */
	public function getParentElement() : ?Element;

	/**
	 * @return NodeList
	 */
	public function getChildNodes() : NodeList;

	/**
	 * @return ?Node
	 */
	public function getFirstChild() : ?Node;

	/**
	 * @return ?Node
	 */
	public function getLastChild() : ?Node;

	/**
	 * @return ?Node
	 */
	public function getPreviousSibling() : ?Node;

	/**
	 * @return ?Node
	 */
	public function getNextSibling() : ?Node;

	/**
	 * @return ?string
	 */
	public function getNodeValue() : ?string;

	/**
	 * @param ?string $val
	 */
	public function setNodeValue( ?string $val ) : void;

	/**
	 * @return ?string
	 */
	public function getTextContent() : ?string;

	/**
	 * @param ?string $val
	 */
	public function setTextContent( ?string $val ) : void;

}
