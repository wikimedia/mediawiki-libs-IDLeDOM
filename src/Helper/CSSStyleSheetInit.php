<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\MediaList;

trait CSSStyleSheetInit {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\CSSStyleSheetInit $this';
		// @var \Wikimedia\IDLeDOM\CSSStyleSheetInit $this
		switch ( $name ) {
			case "baseURL":
				return $this->getBaseURL();
			case "media":
				return $this->getMedia();
			case "disabled":
				return $this->getDisabled();
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
		'@phan-var \Wikimedia\IDLeDOM\CSSStyleSheetInit $this';
		// @var \Wikimedia\IDLeDOM\CSSStyleSheetInit $this
		switch ( $name ) {
			case "baseURL":
				return true;
			case "media":
				return true;
			case "disabled":
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
			case "baseURL":
			case "media":
			case "disabled":
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
	 * Create a CSSStyleSheetInit from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\CSSStyleSheetInit $a
	 * @return \Wikimedia\IDLeDOM\CSSStyleSheetInit
	 */
	public static function cast( $a ) {
		if ( $a instanceof \Wikimedia\IDLeDOM\CSSStyleSheetInit ) {
			return $a;
		}
		return new class( $a ) extends \Wikimedia\IDLeDOM\CSSStyleSheetInit {
			use CSSStyleSheetInit;

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
			public function getBaseURL() : string {
				return $this->a["baseURL"] ?? null;
			}

			/**
			 * @return MediaList|string
			 */
			public function getMedia() {
				return $this->a["media"] ?? '';
			}

			/**
			 * @return bool
			 */
			public function getDisabled() : bool {
				return $this->a["disabled"] ?? false;
			}

		};
	}

}
