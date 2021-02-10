<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stubs;

use Wikimedia\IDLeDOM\MutationObserver;
use Wikimedia\IDLeDOM\MutationRecord;

trait MutationCallback {
	/**
	 * Make this callback interface callable.
	 * @param mixed ...$args
	 * @return void
	 */
	public function __invoke( ...$args ) {
		$this->invoke( $args[0], $args[1] );
	}

	/**
	 * @param list<MutationRecord> $mutations
	 * @param MutationObserver $observer
	 * @return void
	 */
	abstract public function invoke( array $mutations, MutationObserver $observer ) : void;

	/**
	 * Create a MutationCallback from a callable.
	 *
	 * @param callable|\Wikimedia\IDLeDOM\MutationCallback $f
	 * @return \Wikimedia\IDLeDOM\MutationCallback
	 */
	public static function cast( $f ): \Wikimedia\IDLeDOM\MutationCallback {
		if ( $f instanceof \Wikimedia\IDLeDOM\MutationCallback ) {
			return $f;
		}
		return new class( $f ) implements \Wikimedia\IDLeDOM\MutationCallback {
			use MutationCallback;

			/** @var callable */
			private $f;

			/**
			 * @param callable $f
			 */
			public function __construct( $f ) {
				$this->f = $f;
			}

			/**
			 * @param list<MutationRecord> $mutations
			 * @param MutationObserver $observer
			 * @return void
			 */
			public function invoke( array $mutations, MutationObserver $observer ) : void {
				$f = $this->f;
				$f( $mutations, $observer );
			}
		};
	}
}
