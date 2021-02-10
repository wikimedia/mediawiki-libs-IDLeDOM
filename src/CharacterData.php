<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface CharacterData extends Node, ChildNode, NonDocumentTypeChildNode {
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

	/**
	 * @param int $offset
	 * @param int $count
	 * @return string
	 */
	public function substringData( int $offset, int $count ) : string;

	/**
	 * @param string $data
	 * @return void
	 */
	public function appendData( string $data ) : void;

	/**
	 * @param int $offset
	 * @param string $data
	 * @return void
	 */
	public function insertData( int $offset, string $data ) : void;

	/**
	 * @param int $offset
	 * @param int $count
	 * @return void
	 */
	public function deleteData( int $offset, int $count ) : void;

	/**
	 * @param int $offset
	 * @param int $count
	 * @param string $data
	 * @return void
	 */
	public function replaceData( int $offset, int $count, string $data ) : void;

}
