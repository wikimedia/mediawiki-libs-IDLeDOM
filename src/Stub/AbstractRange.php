<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;

trait AbstractRange {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract public function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return Node
	 */
	public function getStartContainer() : Node {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getStartOffset() : int {
		throw self::_unimplemented();
	}

	/**
	 * @return Node
	 */
	public function getEndContainer() : Node {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getEndOffset() : int {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getCollapsed() : bool {
		throw self::_unimplemented();
	}

}
