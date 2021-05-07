<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait DOMStringMap {
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
		'@phan-var \Wikimedia\IDLeDOM\DOMStringMap $this';
		// @var \Wikimedia\IDLeDOM\DOMStringMap $this
		if ( is_numeric( $offset ) ) {
			/* Fall through */
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
		'@phan-var \Wikimedia\IDLeDOM\DOMStringMap $this';
		// @var \Wikimedia\IDLeDOM\DOMStringMap $this
		if ( is_numeric( $offset ) ) {
			/* Fall through */
		} elseif ( is_string( $offset ) ) {
			$this->setNamedItem( $offset, $value );
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
		'@phan-var \Wikimedia\IDLeDOM\DOMStringMap $this';
		// @var \Wikimedia\IDLeDOM\DOMStringMap $this
		if ( is_numeric( $offset ) ) {
			/* Fall through */
		} elseif ( is_string( $offset ) ) {
			$this->removeNamedItem( $offset );
		}
		$trace = debug_backtrace();
		trigger_error(
			'Undefined property via offsetUnset(): ' . $offset .
			' in ' . $trace[0]['file'] .
			' on line ' . $trace[0]['line'],
			E_USER_NOTICE
		);
	}

}
