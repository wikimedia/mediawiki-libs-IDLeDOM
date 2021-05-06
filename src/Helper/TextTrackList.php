<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait TextTrackList {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\TextTrackList $this';
		// @var \Wikimedia\IDLeDOM\TextTrackList $this
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
		'@phan-var \Wikimedia\IDLeDOM\TextTrackList $this';
		// @var \Wikimedia\IDLeDOM\TextTrackList $this
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
		'@phan-var \Wikimedia\IDLeDOM\TextTrackList $this';
		// @var \Wikimedia\IDLeDOM\TextTrackList $this
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
		'@phan-var \Wikimedia\IDLeDOM\TextTrackList $this';
		// @var \Wikimedia\IDLeDOM\TextTrackList $this
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

}
