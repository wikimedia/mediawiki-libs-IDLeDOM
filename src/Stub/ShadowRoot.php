<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\EventHandler;

trait ShadowRoot {
	use \Wikimedia\IDLeDOM\Stub\DocumentFragment;
	use \Wikimedia\IDLeDOM\Stub\DocumentOrShadowRoot;

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract protected function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return int
	 */
	public function getMode() : int {
		throw self::_unimplemented();
	}

	/**
	 * @return Element
	 */
	public function getHost() : Element {
		throw self::_unimplemented();
	}

	/**
	 * @return EventHandler
	 */
	public function getOnslotchange() : EventHandler {
		throw self::_unimplemented();
	}

	/**
	 * @param EventHandler $val
	 */
	public function setOnslotchange( EventHandler $val ) : void {
		throw self::_unimplemented();
	}

}
