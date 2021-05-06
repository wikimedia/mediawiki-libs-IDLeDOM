<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait VideoTrack {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\VideoTrack $this';
		// @var \Wikimedia\IDLeDOM\VideoTrack $this
		switch ( $name ) {
			case "id":
				return $this->getId();
			case "kind":
				return $this->getKind();
			case "label":
				return $this->getLabel();
			case "language":
				return $this->getLanguage();
			case "selected":
				return $this->getSelected();
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
		'@phan-var \Wikimedia\IDLeDOM\VideoTrack $this';
		// @var \Wikimedia\IDLeDOM\VideoTrack $this
		switch ( $name ) {
			case "id":
				return true;
			case "kind":
				return true;
			case "label":
				return true;
			case "language":
				return true;
			case "selected":
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
		'@phan-var \Wikimedia\IDLeDOM\VideoTrack $this';
		// @var \Wikimedia\IDLeDOM\VideoTrack $this
		switch ( $name ) {
			case "selected":
				$this->setSelected( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\VideoTrack $this';
		// @var \Wikimedia\IDLeDOM\VideoTrack $this
		switch ( $name ) {
			case "id":
				break;
			case "kind":
				break;
			case "label":
				break;
			case "language":
				break;
			case "selected":
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
