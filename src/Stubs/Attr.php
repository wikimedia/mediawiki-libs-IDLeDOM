<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stubs;

use Wikimedia\IDLeDOM\Element;

trait Attr {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		switch ( $name ) {
			case "namespaceURI":
				return $this->getNamespaceURI();
			case "prefix":
				return $this->getPrefix();
			case "localName":
				return $this->getLocalName();
			case "name":
				return $this->getName();
			case "value":
				return $this->getValue();
			case "ownerElement":
				return $this->getOwnerElement();
			case "specified":
				return $this->getSpecified();
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
	 * @param mixed $value
	 */
	public function __set( string $name, mixed $value ) : void {
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
	 * @return ?string
	 */
	abstract public function getNamespaceURI() : ?string;

	/**
	 * @return ?string
	 */
	abstract public function getPrefix() : ?string;

	/**
	 * @return string
	 */
	abstract public function getLocalName() : string;

	/**
	 * @return string
	 */
	abstract public function getName() : string;

	/**
	 * @return string
	 */
	abstract public function getValue() : string;

	/**
	 * @param string $value
	 */
	abstract public function setValue( string $value ) : void;

	/**
	 * @return ?Element
	 */
	abstract public function getOwnerElement() : ?Element;

	/**
	 * @return bool
	 */
	abstract public function getSpecified() : bool;

}
