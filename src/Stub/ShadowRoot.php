<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\EventHandler;

trait ShadowRoot {
	use \Wikimedia\IDLeDOM\Stub\DocumentFragment;
	use \Wikimedia\IDLeDOM\Stub\DocumentOrShadowRoot;

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return int
	 */
	public function getMode() : int {
		throw self::unimplemented();
	}

	/**
	 * @return Element
	 */
	public function getHost() : Element {
		throw self::unimplemented();
	}

	/**
	 * @return EventHandler
	 */
	public function getOnslotchange() : EventHandler {
		throw self::unimplemented();
	}

	/**
	 * @param EventHandler $val
	 */
	public function setOnslotchange( EventHandler $val ) : void {
		throw self::unimplemented();
	}

}
