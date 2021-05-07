<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait MutationObserverInit {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\MutationObserverInit $this';
		// @var \Wikimedia\IDLeDOM\MutationObserverInit $this
		switch ( $name ) {
			case "childList":
				return $this->getChildList();
			case "attributes":
				return $this->getAttributes();
			case "characterData":
				return $this->getCharacterData();
			case "subtree":
				return $this->getSubtree();
			case "attributeOldValue":
				return $this->getAttributeOldValue();
			case "characterDataOldValue":
				return $this->getCharacterDataOldValue();
			case "attributeFilter":
				return $this->getAttributeFilter();
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
		'@phan-var \Wikimedia\IDLeDOM\MutationObserverInit $this';
		// @var \Wikimedia\IDLeDOM\MutationObserverInit $this
		switch ( $name ) {
			case "childList":
				return true;
			case "attributes":
				return true;
			case "characterData":
				return true;
			case "subtree":
				return true;
			case "attributeOldValue":
				return true;
			case "characterDataOldValue":
				return true;
			case "attributeFilter":
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
			case "childList":
			case "attributes":
			case "characterData":
			case "subtree":
			case "attributeOldValue":
			case "characterDataOldValue":
			case "attributeFilter":
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
	 * Create a MutationObserverInit from an associative array.
	 *
	 * @param array|\Wikimedia\IDLeDOM\MutationObserverInit $a
	 * @return \Wikimedia\IDLeDOM\MutationObserverInit
	 */
	public static function cast( $a ) {
		if ( $a instanceof \Wikimedia\IDLeDOM\MutationObserverInit ) {
			return $a;
		}
		return new class( $a ) implements \Wikimedia\IDLeDOM\MutationObserverInit {
			use MutationObserverInit;

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
			public function getChildList() : bool {
				return $this->a["childList"] ?? false;
			}

			/**
			 * @return bool
			 */
			public function getAttributes() : bool {
				return $this->a["attributes"];
			}

			/**
			 * @return bool
			 */
			public function getCharacterData() : bool {
				return $this->a["characterData"];
			}

			/**
			 * @return bool
			 */
			public function getSubtree() : bool {
				return $this->a["subtree"] ?? false;
			}

			/**
			 * @return bool
			 */
			public function getAttributeOldValue() : bool {
				return $this->a["attributeOldValue"];
			}

			/**
			 * @return bool
			 */
			public function getCharacterDataOldValue() : bool {
				return $this->a["characterDataOldValue"];
			}

			/**
			 * @return list<string>
			 */
			public function getAttributeFilter() : array {
				return $this->a["attributeFilter"];
			}

		};
	}

}
