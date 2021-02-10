<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

trait Text {
	use \Wikimedia\IDLeDOM\Stub\CharacterData;
	use \Wikimedia\IDLeDOM\Stub\Slottable;

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param int $offset
	 * @return \Wikimedia\IDLeDOM\Text
	 */
	public function splitText( int $offset ) : \Wikimedia\IDLeDOM\Text {
		throw self::unimplemented();
	}

	/**
	 * @return string
	 */
	public function getWholeText() : string {
		throw self::unimplemented();
	}

}
