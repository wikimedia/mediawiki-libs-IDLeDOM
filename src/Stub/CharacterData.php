<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

trait CharacterData {
	use \Wikimedia\IDLeDOM\Stub\Node;
	use \Wikimedia\IDLeDOM\Stub\ChildNode;
	use \Wikimedia\IDLeDOM\Stub\NonDocumentTypeChildNode;

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return string
	 */
	public function getData() : string {
		throw self::unimplemented();
	}

	/**
	 * @param string $val
	 */
	public function setData( string $val ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return int
	 */
	public function getLength() : int {
		throw self::unimplemented();
	}

	/**
	 * @param int $offset
	 * @param int $count
	 * @return string
	 */
	public function substringData( int $offset, int $count ) : string {
		throw self::unimplemented();
	}

	/**
	 * @param string $data
	 * @return void
	 */
	public function appendData( string $data ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param int $offset
	 * @param string $data
	 * @return void
	 */
	public function insertData( int $offset, string $data ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param int $offset
	 * @param int $count
	 * @return void
	 */
	public function deleteData( int $offset, int $count ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param int $offset
	 * @param int $count
	 * @param string $data
	 * @return void
	 */
	public function replaceData( int $offset, int $count, string $data ) : void {
		throw self::unimplemented();
	}

}
