<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;

trait NodeList {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract public function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @param int $index
	 * @return ?Node
	 */
	public function item( int $index ) : ?Node {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getLength() : int {
		throw self::_unimplemented();
	}

	/**
	 * @return \Iterator<Node>
	 */
	public function getIterator() {
		throw self::_unimplemented();
	}

}
