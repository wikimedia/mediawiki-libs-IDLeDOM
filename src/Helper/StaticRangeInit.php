<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Node;

trait StaticRangeInit {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\StaticRangeInit $this';
		// @var \Wikimedia\IDLeDOM\StaticRangeInit $this
		switch ( $name ) {
			case "startContainer":
				return $this->getStartContainer();
			case "startOffset":
				return $this->getStartOffset();
			case "endContainer":
				return $this->getEndContainer();
			case "endOffset":
				return $this->getEndOffset();
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
		'@phan-var \Wikimedia\IDLeDOM\StaticRangeInit $this';
		// @var \Wikimedia\IDLeDOM\StaticRangeInit $this
		switch ( $name ) {
			case "startContainer":
				return true;
			case "startOffset":
				return true;
			case "endContainer":
				return true;
			case "endOffset":
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
			case "startContainer":
			case "startOffset":
			case "endContainer":
			case "endOffset":
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
	 * Create a StaticRangeInit from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\StaticRangeInit $a
	 * @return \Wikimedia\IDLeDOM\StaticRangeInit
	 */
	public static function cast( $a ) {
		if ( $a instanceof \Wikimedia\IDLeDOM\StaticRangeInit ) {
			return $a;
		}
		return new class( $a ) extends \Wikimedia\IDLeDOM\StaticRangeInit {
			use StaticRangeInit;

			/** @var array */
			private $a;

			/**
			 * @param array $a
			 */
			public function __construct( $a ) {
				$this->a = $a;
			}

			/**
			 * @return Node
			 */
			public function getStartContainer() {
				return $this->a["startContainer"];
			}

			/**
			 * @return int
			 */
			public function getStartOffset() : int {
				return $this->a["startOffset"];
			}

			/**
			 * @return Node
			 */
			public function getEndContainer() {
				return $this->a["endContainer"];
			}

			/**
			 * @return int
			 */
			public function getEndOffset() : int {
				return $this->a["endOffset"];
			}

		};
	}

}
