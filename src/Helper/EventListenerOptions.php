<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait EventListenerOptions {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\EventListenerOptions $this';
		// @var \Wikimedia\IDLeDOM\EventListenerOptions $this
		switch ( $name ) {
			case "capture":
				return $this->getCapture();
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
	 * @param string $name
	 * @return bool
	 */
	public function __isset( string $name ) : bool {
		'@phan-var \Wikimedia\IDLeDOM\EventListenerOptions $this';
		// @var \Wikimedia\IDLeDOM\EventListenerOptions $this
		switch ( $name ) {
			case "capture":
				return true;
			default:
				break;
		}
		return false;
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists( $offset ): bool {
		switch ( $offset ) {
			case "capture":
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
	 * Create a EventListenerOptions from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\EventListenerOptions $a
	 * @return \Wikimedia\IDLeDOM\EventListenerOptions
	 */
	public static function cast( $a ) {
		if ( $a instanceof \Wikimedia\IDLeDOM\EventListenerOptions ) {
			return $a;
		}
		return new class( $a ) extends \Wikimedia\IDLeDOM\EventListenerOptions {
			use EventListenerOptions;

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

		};
	}

}
