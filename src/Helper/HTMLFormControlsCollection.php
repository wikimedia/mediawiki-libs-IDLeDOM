<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait HTMLFormControlsCollection {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this';
		// @var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this
		switch ( $name ) {
			case "length":
				return $this->getLength();
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this';
		// @var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this
		switch ( $name ) {
			case "length":
				return true;
			default:
				break;
		}
		return false;
	}

	/**
	 * @return int
	 */
	public function count() : int {
		'@phan-var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this';
		// @var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this';
		// @var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this
		if ( is_numeric( $offset ) ) {
			return $this->item( $offset );
		} elseif ( is_string( $offset ) ) {
			return $this->namedItem( $offset );
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this';
		// @var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this
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
		'@phan-var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this';
		// @var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this
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
	 * @return \Iterator An Iterator<Element>
	 */
	public function getIterator() {
		'@phan-var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this';
		// @var \Wikimedia\IDLeDOM\HTMLFormControlsCollection $this
		for ( $i = 0; $i < $this->getLength(); $i++ ) {
			yield $this->item( $i );
		}
	}

}
