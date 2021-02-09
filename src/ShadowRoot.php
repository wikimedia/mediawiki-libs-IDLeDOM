<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface ShadowRoot extends DocumentOrShadowRoot {
	/**
	 * @return ShadowRootMode
	 */
	public function getMode() : ShadowRootMode;

	/**
	 * @return Element
	 */
	public function getHost() : Element;

	/**
	 * @return EventHandler
	 */
	public function getOnslotchange() : EventHandler;

	/**
	 * @param EventHandler $val
	 */
	public function setOnslotchange( EventHandler $val ) : void;

}
