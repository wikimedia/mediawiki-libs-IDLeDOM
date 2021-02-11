<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Event {

	/**
	 * @return string
	 */
	public function getType() : string;

	/**
	 * @return ?EventTarget
	 */
	public function getTarget() : ?EventTarget;

	/**
	 * @return ?EventTarget
	 */
	public function getCurrentTarget() : ?EventTarget;

	/**
	 * @return list<EventTarget>
	 */
	public function composedPath() : array;

	/** @var int */
	public const NONE = 0;

	/** @var int */
	public const CAPTURING_PHASE = 1;

	/** @var int */
	public const AT_TARGET = 2;

	/** @var int */
	public const BUBBLING_PHASE = 3;

	/**
	 * @return int
	 */
	public function getEventPhase() : int;

	/**
	 * @return void
	 */
	public function stopPropagation() : void;

	/**
	 * @return void
	 */
	public function stopImmediatePropagation() : void;

	/**
	 * @return bool
	 */
	public function getBubbles() : bool;

	/**
	 * @return bool
	 */
	public function getCancelable() : bool;

	/**
	 * @return void
	 */
	public function preventDefault() : void;

	/**
	 * @return bool
	 */
	public function getDefaultPrevented() : bool;

	/**
	 * @return bool
	 */
	public function getComposed() : bool;

	/**
	 * @return bool
	 */
	public function getIsTrusted() : bool;

	/**
	 * @return float
	 */
	public function getTimeStamp() : float;

}
