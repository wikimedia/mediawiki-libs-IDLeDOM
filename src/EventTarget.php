<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface EventTarget {

	/**
	 * @param string $type
	 * @param ?EventListener $callback
	 * @param AddEventListenerOptions|bool|null $options
	 * @return void
	 */
	public function addEventListener( string $type, ?EventListener $callback, ?mixed $options = null ) : void;

	/**
	 * @param string $type
	 * @param ?EventListener $callback
	 * @param EventListenerOptions|bool|null $options
	 * @return void
	 */
	public function removeEventListener( string $type, ?EventListener $callback, ?mixed $options = null ) : void;

	/**
	 * @param Event $event
	 * @return bool
	 */
	public function dispatchEvent( Event $event ) : bool;

}
