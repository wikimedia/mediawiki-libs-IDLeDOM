<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface XPathEvaluatorBase {
	/**
	 * @param string $expression
	 * @param ?XPathNSResolver $resolver
	 * @return XPathExpression
	 */
	public function createExpression( string $expression, ?XPathNSResolver $resolver = null ) : XPathExpression;

	/**
	 * @param Node $nodeResolver
	 * @return XPathNSResolver
	 */
	public function createNSResolver( Node $nodeResolver ) : XPathNSResolver;

	/**
	 * @param string $expression
	 * @param Node $contextNode
	 * @param ?XPathNSResolver $resolver
	 * @param int $type
	 * @param ?XPathResult $result
	 * @return XPathResult
	 */
	public function evaluate( string $expression, Node $contextNode, ?XPathNSResolver $resolver = null, int $type = 0, ?XPathResult $result = null ) : XPathResult;

}
