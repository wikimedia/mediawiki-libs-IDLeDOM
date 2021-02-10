<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\HTMLCollection;
use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeList;

trait ParentNode {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @return HTMLCollection
	 */
	public function getChildren() : HTMLCollection {
		throw self::unimplemented();
	}

	/**
	 * @return ?Element
	 */
	public function getFirstElementChild() : ?Element {
		throw self::unimplemented();
	}

	/**
	 * @return ?Element
	 */
	public function getLastElementChild() : ?Element {
		throw self::unimplemented();
	}

	/**
	 * @return int
	 */
	public function getChildElementCount() : int {
		throw self::unimplemented();
	}

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function prepend( /* mixed */ ...$nodes ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function append( /* mixed */ ...$nodes ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function replaceChildren( /* mixed */ ...$nodes ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param string $selectors
	 * @return ?Element
	 */
	public function querySelector( string $selectors ) : ?Element {
		throw self::unimplemented();
	}

	/**
	 * @param string $selectors
	 * @return NodeList
	 */
	public function querySelectorAll( string $selectors ) : NodeList {
		throw self::unimplemented();
	}

}
