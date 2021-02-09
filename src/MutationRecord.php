<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface MutationRecord {
	/**
	 * @return string
	 */
	public function getType() : string;

	/**
	 * @return Node
	 */
	public function getTarget() : Node;

	/**
	 * @return NodeList
	 */
	public function getAddedNodes() : NodeList;

	/**
	 * @return NodeList
	 */
	public function getRemovedNodes() : NodeList;

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
	public function getAttributeName() : ?string;

	/**
	 * @return ?string
	 */
	public function getAttributeNamespace() : ?string;

	/**
	 * @return ?string
	 */
	public function getOldValue() : ?string;

}
