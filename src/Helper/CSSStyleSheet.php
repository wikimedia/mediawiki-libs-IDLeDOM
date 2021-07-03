<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait CSSStyleSheet {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\CSSStyleSheet $this';
		// @var \Wikimedia\IDLeDOM\CSSStyleSheet $this
		switch ( $name ) {
			case "type":
				return $this->getType();
			case "href":
				return $this->getHref();
			case "ownerNode":
				return $this->getOwnerNode();
			case "parentStyleSheet":
				return $this->getParentStyleSheet();
			case "title":
				return $this->getTitle();
			case "media":
				return $this->getMedia();
			case "disabled":
				return $this->getDisabled();
			case "ownerRule":
				return $this->getOwnerRule();
			case "cssRules":
				return $this->getCssRules();
			case "rules":
				return $this->getRules();
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
		'@phan-var \Wikimedia\IDLeDOM\CSSStyleSheet $this';
		// @var \Wikimedia\IDLeDOM\CSSStyleSheet $this
		switch ( $name ) {
			case "type":
				return true;
			case "href":
				return $this->getHref() !== null;
			case "ownerNode":
				return $this->getOwnerNode() !== null;
			case "parentStyleSheet":
				return $this->getParentStyleSheet() !== null;
			case "title":
				return $this->getTitle() !== null;
			case "media":
				return true;
			case "disabled":
				return true;
			case "ownerRule":
				return $this->getOwnerRule() !== null;
			case "cssRules":
				return true;
			case "rules":
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
		'@phan-var \Wikimedia\IDLeDOM\CSSStyleSheet $this';
		// @var \Wikimedia\IDLeDOM\CSSStyleSheet $this
		switch ( $name ) {
			case "media":
				$this->setMedia( $value );
				return;
			case "disabled":
				$this->setDisabled( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\CSSStyleSheet $this';
		// @var \Wikimedia\IDLeDOM\CSSStyleSheet $this
		switch ( $name ) {
			case "type":
				break;
			case "href":
				break;
			case "ownerNode":
				break;
			case "parentStyleSheet":
				break;
			case "title":
				break;
			case "media":
				break;
			case "disabled":
				break;
			case "ownerRule":
				break;
			case "cssRules":
				break;
			case "rules":
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
