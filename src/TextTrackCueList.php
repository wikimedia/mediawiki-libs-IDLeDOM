<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * TextTrackCueList
 *
 * @see https://dom.spec.whatwg.org/#interface-texttrackcuelist
 *
 * @property int $length
 * @phan-forbid-undeclared-magic-properties
 */
interface TextTrackCueList {
	/**
	 * @return int
	 */
	public function getLength() : int;

	/**
	 * @param string $id
	 * @return TextTrackCue|null
	 */
	public function getCueById( string $id );

}
