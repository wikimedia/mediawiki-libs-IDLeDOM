<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface CharacterData extends ChildNode, NonDocumentTypeChildNode {
	/**
	 * @return string
	 */
	public function getData() : string;

	/**
	 * @param string $val
	 */
	public function setData( string $val ) : void;

	/**
	 * @return int
	 */
	public function getLength() : int;

}
