<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait AssignedNodesOptions {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\AssignedNodesOptions $this';
		// @var \Wikimedia\IDLeDOM\AssignedNodesOptions $this
		switch ( $name ) {
			case "flatten":
				return $this->getFlatten();
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
			case "flatten":
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
	 * Create a AssignedNodesOptions from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\AssignedNodesOptions $a
	 * @return \Wikimedia\IDLeDOM\AssignedNodesOptions
	 */
	public static function cast( $a ): \Wikimedia\IDLeDOM\AssignedNodesOptions {
		if ( $a instanceof \Wikimedia\IDLeDOM\AssignedNodesOptions ) {
			return $a;
		}
		return new class( $a ) implements \Wikimedia\IDLeDOM\AssignedNodesOptions {
			use AssignedNodesOptions;

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
			public function getFlatten() : bool {
				return $this->a["flatten"] ?? false;
			}

		};
	}

}
