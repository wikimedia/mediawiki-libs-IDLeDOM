<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\EventHandler;

trait AbortSignal {
	use \Wikimedia\IDLeDOM\Stub\EventTarget;

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract protected function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return bool
	 */
	public function getAborted() : bool {
		throw self::_unimplemented();
	}

	/**
	 * @return EventHandler
	 */
	public function getOnabort() : EventHandler {
		throw self::_unimplemented();
	}

	/**
	 * @param EventHandler $val
	 */
	public function setOnabort( EventHandler $val ) : void {
		throw self::_unimplemented();
	}

}
