<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface DOMTokenList {
	/**
	 * @return int
	 */
	public function getLength() : int;

	/**
	 * @param string $token
	 * @return bool
	 */
	public function contains( string $token ) : bool;

	/**
	 * @param string ...$tokens
	 * @return void
	 */
	public function add( string ...$tokens ) : void;

	/**
	 * @param string ...$tokens
	 * @return void
	 */
	public function remove( string ...$tokens ) : void;

	/**
	 * @param string $token
	 * @param ?bool $force
	 * @return bool
	 */
	public function toggle( string $token, ?bool $force = null ) : bool;

	/**
	 * @param string $token
	 * @param string $newToken
	 * @return bool
	 */
	public function replace( string $token, string $newToken ) : bool;

	/**
	 * @param string $token
	 * @return bool
	 */
	public function supports( string $token ) : bool;

	/**
	 * @return string
	 */
	public function getValue() : string;

	/**
	 * @param string $val
	 */
	public function setValue( string $val ) : void;

}
