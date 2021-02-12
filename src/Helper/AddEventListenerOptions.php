<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\AbortSignal;

trait AddEventListenerOptions {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\AddEventListenerOptions $this';
		// @var \Wikimedia\IDLeDOM\AddEventListenerOptions $this
		switch ( $name ) {
			case "capture":
				return $this->getCapture();
			case "passive":
				return $this->getPassive();
			case "once":
				return $this->getOnce();
			case "signal":
				return $this->getSignal();
			default:
				break;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __get(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
		return null;
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists( $offset ): bool {
		switch ( $offset ) {
			case "capture":
			case "passive":
			case "once":
			case "signal":
				return true;
			default:
				break;
		}
		return false;
	}

	/**
	 * @param mixed $offset
	 * @return mixed
	 */
	public function offsetGet( $offset ) {
		return $this->$offset;
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet( $offset, $value ) : void {
		$this->$offset = $value;
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset( $offset ) : void {
		unset( $this->$offset );
	}

	/**
	 * Create a AddEventListenerOptions from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\AddEventListenerOptions $a
	 * @return \Wikimedia\IDLeDOM\AddEventListenerOptions
	 */
	public static function cast( $a ): \Wikimedia\IDLeDOM\AddEventListenerOptions {
		if ( $a instanceof \Wikimedia\IDLeDOM\AddEventListenerOptions ) {
			return $a;
		}
		return new class( $a ) implements \Wikimedia\IDLeDOM\AddEventListenerOptions {
			use AddEventListenerOptions;

			/** @var array */
			private $a;

			/**
			 * @param array $a
			 */
			public function __construct( $a ) {
				$this->a = $a;
			}

			/**
			 * @return bool
			 */
			public function getCapture() : bool {
				return $this->a["capture"] ?? false;
			}

			/**
			 * @return bool
			 */
			public function getPassive() : bool {
				return $this->a["passive"] ?? false;
			}

			/**
			 * @return bool
			 */
			public function getOnce() : bool {
				return $this->a["once"] ?? false;
			}

			/**
			 * @return AbortSignal
			 */
			public function getSignal() {
				return $this->a["signal"];
			}

		};
	}

}
