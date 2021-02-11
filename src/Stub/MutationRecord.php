<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeList;

trait MutationRecord {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract public function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return string
	 */
	public function getType() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return Node
	 */
	public function getTarget() : Node {
		throw self::_unimplemented();
	}

	/**
	 * @return NodeList
	 */
	public function getAddedNodes() : NodeList {
		throw self::_unimplemented();
	}

	/**
	 * @return NodeList
	 */
	public function getRemovedNodes() : NodeList {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function getPreviousSibling() : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Node
	 */
	public function getNextSibling() : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getAttributeName() : ?string {
		throw self::_unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getAttributeNamespace() : ?string {
		throw self::_unimplemented();
	}

	/**
	 * @return ?string
	 */
	public function getOldValue() : ?string {
		throw self::_unimplemented();
	}

}
