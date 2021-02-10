<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait ElementCreationOptions {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "is":
				return $this->getIs();
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
	 * @return string
	 */
	abstract public function getIs() : string;

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists( $offset ): bool {
		switch ( $offset ) {
			case "is":
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
	 * Create a ElementCreationOptions from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\ElementCreationOptions $a
	 * @return \Wikimedia\IDLeDOM\ElementCreationOptions
	 */
	public static function cast( $a ): \Wikimedia\IDLeDOM\ElementCreationOptions {
		if ( $a instanceof \Wikimedia\IDLeDOM\ElementCreationOptions ) {
			return $a;
		}
		return new class( $a ) implements \Wikimedia\IDLeDOM\ElementCreationOptions {
			use ElementCreationOptions;

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
			public function getIs() : string {
				return $this->a["is"];
			}

		};
	}

}
