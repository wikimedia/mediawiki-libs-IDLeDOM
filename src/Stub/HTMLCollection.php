<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Element;

trait HTMLCollection {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract protected function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return int
	 */
	public function getLength() : int {
		throw self::_unimplemented();
	}

	/**
	 * @param int $index
	 * @return ?Element
	 */
	public function item( int $index ) : ?Element {
		throw self::_unimplemented();
	}

	/**
	 * @param string $name
	 * @return ?Element
	 */
	public function namedItem( string $name ) : ?Element {
		throw self::_unimplemented();
	}

}
