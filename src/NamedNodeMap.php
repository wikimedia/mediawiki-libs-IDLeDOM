<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface NamedNodeMap {
	/**
	 * @return int
	 */
	public function getLength() : int;

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return ?Attr
	 */
	public function getNamedItemNS( ?string $namespace, string $localName ) : ?Attr;

	/**
	 * @param Attr $attr
	 * @return ?Attr
	 */
	public function setNamedItem( Attr $attr ) : ?Attr;

	/**
	 * @param Attr $attr
	 * @return ?Attr
	 */
	public function setNamedItemNS( Attr $attr ) : ?Attr;

	/**
	 * @param string $qualifiedName
	 * @return Attr
	 */
	public function removeNamedItem( string $qualifiedName ) : Attr;

	/**
	 * @param ?string $namespace
	 * @param string $localName
	 * @return Attr
	 */
	public function removeNamedItemNS( ?string $namespace, string $localName ) : Attr;

}
