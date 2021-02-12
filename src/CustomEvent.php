<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * CustomEvent
 *
 * @see https://dom.spec.whatwg.org/#interface-customevent
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
 * @property ?mixed $detail
 * @phan-forbid-undeclared-magic-properties
 */
interface CustomEvent extends Event {

	/**
	 * @return ?mixed
	 */
	public function getDetail();

}
