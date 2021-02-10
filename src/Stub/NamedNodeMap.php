<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Attr;

trait NamedNodeMap {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return int
	 */
	public function getLength() : int {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return ?Attr
	 */
	public function getNamedItemNS( ?string $namespace, string $localName ) : ?Attr {
		throw self::unimplemented();
	}

	/**
	 * @param Attr $attr
	 * @return ?Attr
	 */
	public function setNamedItem( Attr $attr ) : ?Attr {
		throw self::unimplemented();
	}

	/**
	 * @param Attr $attr
	 * @return ?Attr
	 */
	public function setNamedItemNS( Attr $attr ) : ?Attr {
		throw self::unimplemented();
	}

	/**
	 * @param string $qualifiedName
	 * @return Attr
	 */
	public function removeNamedItem( string $qualifiedName ) : Attr {
		throw self::unimplemented();
	}

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return Attr
	 */
	public function removeNamedItemNS( ?string $namespace, string $localName ) : Attr {
		throw self::unimplemented();
	}

}
