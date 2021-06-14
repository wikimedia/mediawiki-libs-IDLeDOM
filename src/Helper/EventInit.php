<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait EventInit {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\EventInit $this';
		// @var \Wikimedia\IDLeDOM\EventInit $this
		switch ( $name ) {
			case "bubbles":
				return $this->getBubbles();
			case "cancelable":
				return $this->getCancelable();
			case "composed":
				return $this->getComposed();
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
		'@phan-var \Wikimedia\IDLeDOM\EventInit $this';
		// @var \Wikimedia\IDLeDOM\EventInit $this
		switch ( $name ) {
			case "bubbles":
				return true;
			case "cancelable":
				return true;
			case "composed":
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
			case "bubbles":
			case "cancelable":
			case "composed":
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
	 * Create a EventInit from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\EventInit $a
	 * @return \Wikimedia\IDLeDOM\EventInit
	 */
	public static function cast( $a ) {
		if ( $a instanceof \Wikimedia\IDLeDOM\EventInit ) {
			return $a;
		}
		return new class( $a ) extends \Wikimedia\IDLeDOM\EventInit {
			use EventInit;

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
			public function getBubbles() : bool {
				return $this->a["bubbles"] ?? false;
			}

			/**
			 * @return bool
			 */
			public function getCancelable() : bool {
				return $this->a["cancelable"] ?? false;
			}

			/**
			 * @return bool
			 */
			public function getComposed() : bool {
				return $this->a["composed"] ?? false;
			}

		};
	}

}
