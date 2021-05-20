<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait DOMTokenList {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		switch ( $name ) {
			case "length":
				return $this->getLength();
			case "value":
				return $this->getValue();
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
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		switch ( $name ) {
			case "length":
				return true;
			case "value":
				return true;
			default:
				break;
		}
		return false;
	}

	/**
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set( string $name, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		switch ( $name ) {
			case "value":
				$this->setValue( $value );
				return;
			default:
				break;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __set(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

	/**
	 * @param string $name
	 */
	public function __unset( string $name ) : void {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		switch ( $name ) {
			case "length":
				break;
			case "value":
				break;
			default:
				return;
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via __unset(): ' . $name .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

	/**
	 * @return string
	 */
	public function __toString() : string {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		return $this->getValue();
	}

	/**
	 * @return int
	 */
	public function count() : int {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		return $this->getLength();
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists( $offset ): bool {
		return $this->offsetGet( $offset ) !== null;
	}

	/**
	 * @param mixed $offset
	 * @return mixed
	 */
	public function offsetGet( $offset ) {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		if ( is_numeric( $offset ) ) {
			return $this->item( $offset );
		} elseif ( is_string( $offset ) ) {
			/* Fall through */
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via offsetGet(): ' . $offset .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
		return null;
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet( $offset, $value ) : void {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		if ( is_numeric( $offset ) ) {
			/* Fall through */
		} elseif ( is_string( $offset ) ) {
			/* Fall through */
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via offsetSet(): ' . $offset .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset( $offset ) : void {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		if ( is_numeric( $offset ) ) {
			/* Fall through */
		} elseif ( is_string( $offset ) ) {
			/* Fall through */
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via offsetUnset(): ' . $offset .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

	/**
	 * @return \Iterator<string> Value iterator returning string items
	 */
	public function getIterator() {
		'@phan-var \Wikimedia\IDLeDOM\DOMTokenList $this';
		// @var \Wikimedia\IDLeDOM\DOMTokenList $this
		for ( $i = 0; $i < $this->getLength(); $i++ ) {
			yield $this->item( $i );
		}
	}

}
