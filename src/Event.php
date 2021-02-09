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
	public function getSrcElement() : ?EventTarget;

	/**
	 * @return ?EventTarget
	 */
	public function getCurrentTarget() : ?EventTarget;

	/**
	 * @return int
	 */
	public function getEventPhase() : int;

	/**
	 * @return bool
	 */
	public function getCancelBubble() : bool;

	/**
	 * @param bool $val
	 */
	public function setCancelBubble( bool $val ) : void;

	/**
	 * @return bool
	 */
	public function getBubbles() : bool;

	/**
	 * @return bool
	 */
	public function getCancelable() : bool;

	/**
	 * @return bool
	 */
	public function getReturnValue() : bool;

	/**
	 * @param bool $val
	 */
	public function setReturnValue( bool $val ) : void;

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
	 * @return DOMHighResTimeStamp
	 */
	public function getTimeStamp() : DOMHighResTimeStamp;

}
