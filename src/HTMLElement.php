<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface HTMLElement extends Element {

	/**
	 * @return string
	 */
	public function getTitle() : string;

	/**
	 * @param string $val
	 */
	public function setTitle( string $val ) : void;

	/**
	 * @return string
	 */
	public function getLang() : string;

	/**
	 * @param string $val
	 */
	public function setLang( string $val ) : void;

	/**
	 * @return bool
	 */
	public function getTranslate() : bool;

	/**
	 * @param bool $val
	 */
	public function setTranslate( bool $val ) : void;

	/**
	 * @return string
	 */
	public function getDir() : string;

	/**
	 * @param string $val
	 */
	public function setDir( string $val ) : void;

	/**
	 * @return bool
	 */
	public function getHidden() : bool;

	/**
	 * @param bool $val
	 */
	public function setHidden( bool $val ) : void;

	/**
	 * @return void
	 */
	public function click() : void;

	/**
	 * @return string
	 */
	public function getAccessKey() : string;

	/**
	 * @param string $val
	 */
	public function setAccessKey( string $val ) : void;

	/**
	 * @return string
	 */
	public function getAccessKeyLabel() : string;

	/**
	 * @return bool
	 */
	public function getDraggable() : bool;

	/**
	 * @param bool $val
	 */
	public function setDraggable( bool $val ) : void;

	/**
	 * @return bool
	 */
	public function getSpellcheck() : bool;

	/**
	 * @param bool $val
	 */
	public function setSpellcheck( bool $val ) : void;

	/**
	 * @return string
	 */
	public function getAutocapitalize() : string;

	/**
	 * @param string $val
	 */
	public function setAutocapitalize( string $val ) : void;

	/**
	 * @return string
	 */
	public function getInnerText() : string;

	/**
	 * @param string $val
	 */
	public function setInnerText( string $val ) : void;

}
