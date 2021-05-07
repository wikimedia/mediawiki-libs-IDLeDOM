<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait AudioTrackList {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\AudioTrackList $this';
		// @var \Wikimedia\IDLeDOM\AudioTrackList $this
		switch ( $name ) {
			case "length":
				return $this->getLength();
			case "onchange":
				return $this->getOnchange();
			case "onaddtrack":
				return $this->getOnaddtrack();
			case "onremovetrack":
				return $this->getOnremovetrack();
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
		'@phan-var \Wikimedia\IDLeDOM\AudioTrackList $this';
		// @var \Wikimedia\IDLeDOM\AudioTrackList $this
		switch ( $name ) {
			case "length":
				return true;
			case "onchange":
				return true;
			case "onaddtrack":
				return true;
			case "onremovetrack":
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
		'@phan-var \Wikimedia\IDLeDOM\AudioTrackList $this';
		// @var \Wikimedia\IDLeDOM\AudioTrackList $this
		switch ( $name ) {
			case "onchange":
				$this->setOnchange( $value );
				return;
			case "onaddtrack":
				$this->setOnaddtrack( $value );
				return;
			case "onremovetrack":
				$this->setOnremovetrack( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\AudioTrackList $this';
		// @var \Wikimedia\IDLeDOM\AudioTrackList $this
		switch ( $name ) {
			case "length":
				break;
			case "onchange":
				break;
			case "onaddtrack":
				break;
			case "onremovetrack":
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
		'@phan-var \Wikimedia\IDLeDOM\AudioTrackList $this';
		// @var \Wikimedia\IDLeDOM\AudioTrackList $this
		if ( is_numeric( $offset ) ) {
			return $this->item( $offset );
		} elseif ( is_string( $offset ) ) {
			return $this->getTrackById( $offset );
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
		'@phan-var \Wikimedia\IDLeDOM\AudioTrackList $this';
		// @var \Wikimedia\IDLeDOM\AudioTrackList $this
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
		'@phan-var \Wikimedia\IDLeDOM\AudioTrackList $this';
		// @var \Wikimedia\IDLeDOM\AudioTrackList $this
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

}
