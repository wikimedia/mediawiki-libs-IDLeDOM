<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * CustomEventInit
 *
 * @see https://dom.spec.whatwg.org/#dictdef-customeventinit
 *
 * @property bool $bubbles
 * @property bool $cancelable
 * @property bool $composed
 * @property mixed|null $detail
 * @phan-forbid-undeclared-magic-properties
 */
interface CustomEventInit extends EventInit {
	// Direct parent: EventInit

	/**
	 * @return mixed|null
	 */
	public function getDetail();

}
