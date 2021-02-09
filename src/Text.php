<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Text extends Slottable {

	/**
	 * @param int $offset
	 * @return Text
	 */
	public function splitText( int $offset ) : Text;

	/**
	 * @return string
	 */
	public function getWholeText() : string;

}
