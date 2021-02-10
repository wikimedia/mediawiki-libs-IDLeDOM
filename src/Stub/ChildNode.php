<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;

trait ChildNode {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function before( /* mixed */ ...$nodes ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function after( /* mixed */ ...$nodes ) : void {
		throw self::unimplemented();
	}

	/**
	 * @param Node|string ...$nodes
	 * @return void
	 */
	public function replaceWith( /* mixed */ ...$nodes ) : void {
		throw self::unimplemented();
	}

	/**
	 * @return void
	 */
	public function remove() : void {
		throw self::unimplemented();
	}

}
