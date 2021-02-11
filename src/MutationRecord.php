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
	public function getTarget();

	/**
	 * @return NodeList
	 */
	public function getAddedNodes();

	/**
	 * @return NodeList
	 */
	public function getRemovedNodes();

	/**
	 * @return Node|null
	 */
	public function getPreviousSibling();

	/**
	 * @return Node|null
	 */
	public function getNextSibling();

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
