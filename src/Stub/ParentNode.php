<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Element;
use Wikimedia\IDLeDOM\HTMLCollection;
use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\NodeList;

trait ParentNode {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract public function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @return HTMLCollection
	 */
	public function getChildren() : HTMLCollection {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Element
	 */
	public function getFirstElementChild() : ?Element {
		throw self::_unimplemented();
	}

	/**
	 * @return ?Element
	 */
	public function getLastElementChild() : ?Element {
		throw self::_unimplemented();
	}

	/**
	 * @return int
	 */
	public function getChildElementCount() : int {
		throw self::_unimplemented();
	}

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function prepend( /* mixed */ ...$nodes ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function append( /* mixed */ ...$nodes ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function replaceChildren( /* mixed */ ...$nodes ) : void {
		throw self::_unimplemented();
	}

	/**
	 * @param string $selectors
	 * @return ?Element
	 */
	public function querySelector( string $selectors ) : ?Element {
		throw self::_unimplemented();
	}

	/**
	 * @param string $selectors
	 * @return NodeList
	 */
	public function querySelectorAll( string $selectors ) : NodeList {
		throw self::_unimplemented();
	}

}
