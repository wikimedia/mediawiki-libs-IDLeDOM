<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Text extends CharacterData, Slottable {

	/**
	 * @param int $offset
	 * @return \Wikimedia\IDLeDOM\Text
	 */
	public function splitText( int $offset ) : \Wikimedia\IDLeDOM\Text;

	/**
	 * @return string
	 */
	public function getWholeText() : string;

}
