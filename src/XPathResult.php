<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface XPathResult {

	/**
	 * @return int
	 */
	public function getResultType() : int;

	/**
	 * @return float
	 */
	public function getNumberValue() : float;

	/**
	 * @return string
	 */
	public function getStringValue() : string;

	/**
	 * @return bool
	 */
	public function getBooleanValue() : bool;

	/**
	 * @return ?Node
	 */
	public function getSingleNodeValue() : ?Node;

	/**
	 * @return bool
	 */
	public function getInvalidIteratorState() : bool;

	/**
	 * @return int
	 */
	public function getSnapshotLength() : int;

}
