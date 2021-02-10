<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\XPathResult;

trait XPathExpression {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param Node $contextNode
	 * @param int $type
	 * @param ?XPathResult $result
	 * @return XPathResult
	 */
	public function evaluate( Node $contextNode, int $type = 0, ?XPathResult $result = null ) : XPathResult {
		throw self::unimplemented();
	}

}
