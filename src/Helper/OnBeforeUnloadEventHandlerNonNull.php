<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Event;

trait OnBeforeUnloadEventHandlerNonNull {
	/**
	 * Make this callback interface callable.
	 * @param mixed ...$args
	 * @return ?string
	 */
	public function __invoke( ...$args ) {
		'@phan-var \Wikimedia\IDLeDOM\OnBeforeUnloadEventHandlerNonNull $this';
		// @var \Wikimedia\IDLeDOM\OnBeforeUnloadEventHandlerNonNull $this
		return $this->invoke( $args[0] );
	}

	/**
	 * Create a OnBeforeUnloadEventHandlerNonNull from a callable.
	 *
	 * @param callable|\Wikimedia\IDLeDOM\OnBeforeUnloadEventHandlerNonNull $f
	 * @return \Wikimedia\IDLeDOM\OnBeforeUnloadEventHandlerNonNull
	 */
	public static function cast( $f ) {
		if ( $f instanceof \Wikimedia\IDLeDOM\OnBeforeUnloadEventHandlerNonNull ) {
			return $f;
		}
		return new class( $f ) implements \Wikimedia\IDLeDOM\OnBeforeUnloadEventHandlerNonNull {
			use OnBeforeUnloadEventHandlerNonNull;

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
			 * @return ?string
			 */
			public function invoke( /* Event */ $event ) : ?string {
				$f = $this->f;
				return $f( $event );
			}
		};
	}
}
