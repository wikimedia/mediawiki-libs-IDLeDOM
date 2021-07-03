<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait Location {
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function __get( string $name ) {
		'@phan-var \Wikimedia\IDLeDOM\Location $this';
		// @var \Wikimedia\IDLeDOM\Location $this
		switch ( $name ) {
			case "href":
				return $this->getHref();
			case "origin":
				return $this->getOrigin();
			case "protocol":
				return $this->getProtocol();
			case "host":
				return $this->getHost();
			case "hostname":
				return $this->getHostname();
			case "port":
				return $this->getPort();
			case "pathname":
				return $this->getPathname();
			case "search":
				return $this->getSearch();
			case "hash":
				return $this->getHash();
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
		'@phan-var \Wikimedia\IDLeDOM\Location $this';
		// @var \Wikimedia\IDLeDOM\Location $this
		switch ( $name ) {
			case "href":
				return true;
			case "origin":
				return true;
			case "protocol":
				return true;
			case "host":
				return true;
			case "hostname":
				return true;
			case "port":
				return true;
			case "pathname":
				return true;
			case "search":
				return true;
			case "hash":
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
		'@phan-var \Wikimedia\IDLeDOM\Location $this';
		// @var \Wikimedia\IDLeDOM\Location $this
		switch ( $name ) {
			case "href":
				$this->setHref( $value );
				return;
			case "protocol":
				$this->setProtocol( $value );
				return;
			case "host":
				$this->setHost( $value );
				return;
			case "hostname":
				$this->setHostname( $value );
				return;
			case "port":
				$this->setPort( $value );
				return;
			case "pathname":
				$this->setPathname( $value );
				return;
			case "search":
				$this->setSearch( $value );
				return;
			case "hash":
				$this->setHash( $value );
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
		'@phan-var \Wikimedia\IDLeDOM\Location $this';
		// @var \Wikimedia\IDLeDOM\Location $this
		switch ( $name ) {
			case "href":
				break;
			case "origin":
				break;
			case "protocol":
				break;
			case "host":
				break;
			case "hostname":
				break;
			case "port":
				break;
			case "pathname":
				break;
			case "search":
				break;
			case "hash":
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
		'@phan-var \Wikimedia\IDLeDOM\Location $this';
		// @var \Wikimedia\IDLeDOM\Location $this
		return $this->getHref();
	}

}
