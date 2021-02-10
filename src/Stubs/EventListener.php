<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stubs;

use Wikimedia\IDLeDOM\Event;

trait EventListener {
	/**
	 * Make this callback interface callable.
	 * @param mixed ...$args
	 * @return void
	 */
	public function __invoke( ...$args ) {
		$this->handleEvent( $args[0] );
	}

	/**
	 * @param Event $event
	 * @return void
	 */
	abstract public function handleEvent( Event $event ) : void;

	/**
	 * Create a EventListener from a callable.
	 *
	 * @param callable|\Wikimedia\IDLeDOM\EventListener $f
	 * @return \Wikimedia\IDLeDOM\EventListener
	 */
	public static function cast( $f ): \Wikimedia\IDLeDOM\EventListener {
		if ( $f instanceof \Wikimedia\IDLeDOM\EventListener ) {
			return $f;
		}
		return new class( $f ) implements \Wikimedia\IDLeDOM\EventListener {
			use EventListener;

			/** @var callable */
			private $f;

			/**
			 * @param callable $f
			 */
			public function __construct( $f ) {
				$this->f = $f;
			}

			/**
			 * @param Event $event
			 * @return void
			 */
			public function handleEvent( Event $event ) : void {
				$f = $this->f;
				$f( $event );
			}
		};
	}
}
