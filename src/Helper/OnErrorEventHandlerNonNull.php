<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Event;

trait OnErrorEventHandlerNonNull {
	/**
	 * Make this callback interface callable.
	 * @param mixed ...$args
	 * @return mixed|null
	 */
	public function __invoke( ...$args ) {
		'@phan-var \Wikimedia\IDLeDOM\OnErrorEventHandlerNonNull $this';
		// @var \Wikimedia\IDLeDOM\OnErrorEventHandlerNonNull $this
		return $this->invoke( $args[0], $args[1] ?? null, $args[2] ?? null, $args[3] ?? null, $args[4] ?? null );
	}

	/**
	 * Create a OnErrorEventHandlerNonNull from a callable.
	 *
	 * @param callable|\Wikimedia\IDLeDOM\OnErrorEventHandlerNonNull $f
	 * @return \Wikimedia\IDLeDOM\OnErrorEventHandlerNonNull
	 */
	public static function cast( $f ) {
		if ( $f instanceof \Wikimedia\IDLeDOM\OnErrorEventHandlerNonNull ) {
			return $f;
		}
		return new class( $f ) implements \Wikimedia\IDLeDOM\OnErrorEventHandlerNonNull {
			use OnErrorEventHandlerNonNull;

			/** @var callable */
			private $f;

			/**
			 * @param callable $f
			 */
			public function __construct( $f ) {
				$this->f = $f;
			}

			/**
			 * @param Event|string $event
			 * @param ?string $source
			 * @param ?int $lineno
			 * @param ?int $colno
			 * @param mixed|null $error
			 * @return mixed|null
			 */
			public function invoke( /* mixed */ $event, ?string $source = null, ?int $lineno = null, ?int $colno = null, /* any */ $error = null ) {
				$f = $this->f;
				return $f( $event, $source, $lineno, $colno, $error );
			}
		};
	}
}
