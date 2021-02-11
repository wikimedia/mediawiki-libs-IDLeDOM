<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\DOMHighResTimeStamp;
use Wikimedia\IDLeDOM\EventTarget;

trait Event {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract protected function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return string
	 */
	public function getType() : string {
		throw self::_unimplemented();
	}

	/**
	 * @return ?EventTarget
	 */
	public function getTarget() : ?EventTarget {
		throw self::_unimplemented();
	}

	/**
	 * @return ?EventTarget
	 */
	public function getCurrentTarget() : ?EventTarget {
		throw self::_unimplemented();
	}

	/**
	 * @return list<EventTarget>
	 */
	public function composedPath() : array {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getEventPhase() : int {
		throw self::_unimplemented();
	}

	/**
	 * @return void
	 */
	public function stopPropagation() : void {
		throw self::_unimplemented();
	}

	/**
	 * @return void
	 */
	public function stopImmediatePropagation() : void {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getBubbles() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getCancelable() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @return void
	 */
	public function preventDefault() : void {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getDefaultPrevented() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getComposed() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @return bool
	 */
	public function getIsTrusted() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @return DOMHighResTimeStamp
	 */
	public function getTimeStamp() : DOMHighResTimeStamp {
		throw self::_unimplemented();
	}

}
