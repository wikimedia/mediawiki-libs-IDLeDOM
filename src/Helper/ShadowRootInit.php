<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\ShadowRootMode;

trait ShadowRootInit {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\ShadowRootInit $this';
		// @var \Wikimedia\IDLeDOM\ShadowRootInit $this
		switch ( $name ) {
			case "mode":
				return $this->getMode();
			case "delegatesFocus":
				return $this->getDelegatesFocus();
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
		'@phan-var \Wikimedia\IDLeDOM\ShadowRootInit $this';
		// @var \Wikimedia\IDLeDOM\ShadowRootInit $this
		switch ( $name ) {
			case "mode":
				return true;
			case "delegatesFocus":
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
			case "mode":
			case "delegatesFocus":
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
	 * Create a ShadowRootInit from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\ShadowRootInit $a
	 * @return \Wikimedia\IDLeDOM\ShadowRootInit
	 */
	public static function cast( $a ) {
		if ( $a instanceof \Wikimedia\IDLeDOM\ShadowRootInit ) {
			return $a;
		}
		return new class( $a ) implements \Wikimedia\IDLeDOM\ShadowRootInit {
			use ShadowRootInit;

			/** @var array */
			private $a;

			/**
			 * @param array $a
			 */
			public function __construct( $a ) {
				$this->a = $a;
			}

			/**
			 * @return string
			 */
			public function getMode() : /* ShadowRootMode */ string {
				return ShadowRootMode::cast( $this->a["mode"] );
			}

			/**
			 * @return bool
			 */
			public function getDelegatesFocus() : bool {
				return $this->a["delegatesFocus"] ?? false;
			}

		};
	}

}
