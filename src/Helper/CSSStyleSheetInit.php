<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\MediaList;

trait CSSStyleSheetInit {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * Handle an attempt to get a non-existing property on this
	 * object.  The default implementation raises an exception
	 * but the implementor can choose a different behavior:
	 * return null (like JavaScript), dynamically create the
	 * property, etc.
	 * @param string $prop the name of the property requested
	 * @return mixed
	 */
	protected function _getMissingProp( string $prop ) {
		$trace = debug_backtrace();
		while (
			count( $trace ) > 0 &&
			$trace[0]['function'] !== "__get"
		) {
			array_shift( $trace );
		}
		trigger_error(
			'Undefined property' .
			' via ' . ( $trace[0]['function'] ?? '' ) . '(): ' . $prop .
			' in ' . ( $trace[0]['file'] ?? '' ) .
			' on line ' . ( $trace[0]['line'] ?? '' ),
			E_USER_NOTICE
		);
		return null;
	}

	/**
	 * Handle an attempt to set a non-existing property on this
	 * object.  The default implementation raises an exception
	 * but the implementor can choose a different behavior:
	 * ignore the operation (like JavaScript), dynamically create
	 * the property, etc.
	 * @param string $prop the name of the property requested
	 * @param mixed $value the value to set
	 */
	protected function _setMissingProp( string $prop, $value ) : void {
		$trace = debug_backtrace();
		while (
			count( $trace ) > 0 &&
			$trace[0]['function'] !== "__set"
		) {
			array_shift( $trace );
		}
		trigger_error(
			'Undefined property' .
			' via ' . ( $trace[0]['function'] ?? '' ) . '(): ' . $prop .
			' in ' . ( $trace[0]['file'] ?? '' ) .
			' on line ' . ( $trace[0]['line'] ?? '' ),
			E_USER_NOTICE
		);
	}

	// phpcs:enable

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
		'@phan-var \Wikimedia\IDLeDOM\Helper\CSSStyleSheetInit $this';
		// @var \Wikimedia\IDLeDOM\Helper\CSSStyleSheetInit $this
		return $this->_getMissingProp( $name );
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
