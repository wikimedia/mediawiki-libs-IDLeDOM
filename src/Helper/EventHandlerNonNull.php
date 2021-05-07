<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Event;

trait EventHandlerNonNull {
	/**
	 * Make this callback interface callable.
	 * @param mixed ...$args
	 * @return mixed|null
	 */
	public function __invoke( ...$args ) {
		'@phan-var \Wikimedia\IDLeDOM\EventHandlerNonNull $this';
		// @var \Wikimedia\IDLeDOM\EventHandlerNonNull $this
		return $this->invoke( $args[0] );
	}

	/**
	 * Create a EventHandlerNonNull from a callable.
	 *
	 * @param callable|\Wikimedia\IDLeDOM\EventHandlerNonNull $f
	 * @return \Wikimedia\IDLeDOM\EventHandlerNonNull
	 */
	public static function cast( $f ) {
		if ( $f instanceof \Wikimedia\IDLeDOM\EventHandlerNonNull ) {
			return $f;
		}
		return new class( $f ) implements \Wikimedia\IDLeDOM\EventHandlerNonNull {
			use EventHandlerNonNull;

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
			 * @return mixed|null
			 */
			public function invoke( /* Event */ $event ) {
				$f = $this->f;
				return $f( $event );
			}
		};
	}
}
