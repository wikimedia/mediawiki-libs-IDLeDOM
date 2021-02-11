<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Attr;

trait NamedNodeMap {

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
	 * @return ?Attr
	 */
	public function item( int $index ) : ?Attr {
		throw self::_unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return ?Attr
	 */
	public function getNamedItem( string $qualifiedName ) : ?Attr {
		throw self::_unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return ?Attr
	 */
	public function getNamedItemNS( ?string $namespace, string $localName ) : ?Attr {
		throw self::_unimplemented();
	}

	/**
	 * @param Attr $attr
	 * @return ?Attr
	 */
	public function setNamedItem( Attr $attr ) : ?Attr {
		throw self::_unimplemented();
	}

	/**
	 * @param Attr $attr
	 * @return ?Attr
	 */
	public function setNamedItemNS( Attr $attr ) : ?Attr {
		throw self::_unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return Attr
	 */
	public function removeNamedItem( string $qualifiedName ) : Attr {
		throw self::_unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return Attr
	 */
	public function removeNamedItemNS( ?string $namespace, string $localName ) : Attr {
		throw self::_unimplemented();
	}

}
