<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * Event
 *
 * @see https://dom.spec.whatwg.org/#interface-event
 *
 * @property string $type
 * @property EventTarget|null $target
 * @property EventTarget|null $currentTarget
 * @property int $eventPhase
 * @property bool $bubbles
 * @property bool $cancelable
 * @property bool $defaultPrevented
 * @property bool $composed
 * @property bool $isTrusted
 * @property float $timeStamp
 * @phan-forbid-undeclared-magic-properties
 */
interface Event {

	/**
	 * @return string
	 */
	public function getType() : string;

	/**
	 * @return EventTarget|null
	 */
	public function getTarget();

	/**
	 * @return EventTarget|null
	 */
	public function getCurrentTarget();

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
