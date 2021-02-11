<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface ShadowRoot extends DocumentFragment, DocumentOrShadowRoot {
	/**
	 * @return int
	 */
	public function getMode() : int;

	/**
	 * @return Element
	 */
	public function getHost() : Element;

	/**
	 * @return EventHandlerNonNull|callable|null
	 */
	public function getOnslotchange();

	/**
	 * @param EventHandlerNonNull|callable|null $val
	 */
	public function setOnslotchange( /* ?mixed */ $val ) : void;

}
