<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Attr {
	/**
	 * @return ?string
	 */
	public function getNamespaceURI() : ?string;

	/**
	 * @return ?string
	 */
	public function getPrefix() : ?string;

	/**
	 * @return string
	 */
	public function getLocalName() : string;

	/**
	 * @return string
	 */
	public function getName() : string;

	/**
	 * @return string
	 */
	public function getValue() : string;

	/**
	 * @param string $val
	 */
	public function setValue( string $val ) : void;

	/**
	 * @return ?Element
	 */
	public function getOwnerElement() : ?Element;

	/**
	 * @return bool
	 */
	public function getSpecified() : bool;

}
