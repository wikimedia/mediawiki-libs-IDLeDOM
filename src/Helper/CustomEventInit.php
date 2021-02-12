<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait CustomEventInit {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\CustomEventInit $this';
		// @var \Wikimedia\IDLeDOM\CustomEventInit $this
		switch ( $name ) {
			case "bubbles":
				return $this->getBubbles();
			case "cancelable":
				return $this->getCancelable();
			case "composed":
				return $this->getComposed();
			case "detail":
				return $this->getDetail();
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
			case "bubbles":
			case "cancelable":
			case "composed":
			case "detail":
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
	 * Create a CustomEventInit from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\CustomEventInit $a
	 * @return \Wikimedia\IDLeDOM\CustomEventInit
	 */
	public static function cast( $a ): \Wikimedia\IDLeDOM\CustomEventInit {
		if ( $a instanceof \Wikimedia\IDLeDOM\CustomEventInit ) {
			return $a;
		}
		return new class( $a ) implements \Wikimedia\IDLeDOM\CustomEventInit {
			use CustomEventInit;

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

			/**
			 * @return mixed|null
			 */
			public function getDetail() {
				return $this->a["detail"] ?? null;
			}

		};
	}

}
