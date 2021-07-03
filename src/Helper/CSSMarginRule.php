<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait CSSMarginRule {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\CSSMarginRule $this';
		// @var \Wikimedia\IDLeDOM\CSSMarginRule $this
		switch ( $name ) {
			case "cssText":
				return $this->getCssText();
			case "parentRule":
				return $this->getParentRule();
			case "parentStyleSheet":
				return $this->getParentStyleSheet();
			case "type":
				return $this->getType();
			case "name":
				return $this->getName();
			case "style":
				return $this->getStyle();
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
		'@phan-var \Wikimedia\IDLeDOM\CSSMarginRule $this';
		// @var \Wikimedia\IDLeDOM\CSSMarginRule $this
		switch ( $name ) {
			case "cssText":
				return true;
			case "parentRule":
				return $this->getParentRule() !== null;
			case "parentStyleSheet":
				return $this->getParentStyleSheet() !== null;
			case "type":
				return true;
			case "name":
				return true;
			case "style":
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
		'@phan-var \Wikimedia\IDLeDOM\CSSMarginRule $this';
		// @var \Wikimedia\IDLeDOM\CSSMarginRule $this
		switch ( $name ) {
			case "cssText":
				$this->setCssText( $value );
				return;
			case "style":
				$this->setStyle( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\CSSMarginRule $this';
		// @var \Wikimedia\IDLeDOM\CSSMarginRule $this
		switch ( $name ) {
			case "cssText":
				break;
			case "parentRule":
				break;
			case "parentStyleSheet":
				break;
			case "type":
				break;
			case "name":
				break;
			case "style":
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
	 * @param string $val
	 */
	public function setStyle( string $val ) : void {
		'@phan-var \Wikimedia\IDLeDOM\CSSMarginRule $this';
		// @var \Wikimedia\IDLeDOM\CSSMarginRule $this
		$this->getStyle()->setCssText( $val );
	}

}
