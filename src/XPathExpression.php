<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface XPathExpression {
	/**
	 * @param Node $contextNode
	 * @param int $type
	 * @param XPathResult|null $result
	 * @return XPathResult
	 */
	public function evaluate( /* Node */ $contextNode, int $type = 0, /* ?XPathResult */ $result = null );

}
