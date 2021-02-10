<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeList;

trait MutationRecord {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return string
	 */
	public function getType() : string {
		throw self::unimplemented();
	}

	/**
	 * @return Node
	 */
	public function getTarget() : Node {
		throw self::unimplemented();
	}

	/**
	 * @return NodeList
	 */
	public function getAddedNodes() : NodeList {
		throw self::unimplemented();
	}

	/**
	 * @return NodeList
	 */
	public function getRemovedNodes() : NodeList {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function getPreviousSibling() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function getNextSibling() : ?Node {
		throw self::unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getAttributeName() : ?string {
		throw self::unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getAttributeNamespace() : ?string {
		throw self::unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getOldValue() : ?string {
		throw self::unimplemented();
	}

}
