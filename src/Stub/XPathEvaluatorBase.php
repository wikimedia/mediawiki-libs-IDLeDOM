<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\XPathExpression;
use Wikimedia\IDLeDOM\XPathNSResolver;
use Wikimedia\IDLeDOM\XPathResult;

trait XPathEvaluatorBase {

	/**
	 * @return \Exception
	 */
	abstract public function unimplemented() : \Exception;

	/**
	 * @param string $expression
	 * @param XPathNSResolver|callable|null $resolver
	 * @return XPathExpression
	 */
	public function createExpression( string $expression, /* ?mixed */ $resolver = null ) : XPathExpression {
		throw self::unimplemented();
	}

	/**
	 * @param Node $nodeResolver
	 * @return XPathNSResolver|callable
	 */
	public function createNSResolver( Node $nodeResolver ) {
		throw self::unimplemented();
	}

	/**
	 * @param string $expression
	 * @param Node $contextNode
	 * @param XPathNSResolver|callable|null $resolver
	 * @param int $type
	 * @param ?XPathResult $result
	 * @return XPathResult
	 */
	public function evaluate( string $expression, Node $contextNode, /* ?mixed */ $resolver = null, int $type = 0, ?XPathResult $result = null ) : XPathResult {
		throw self::unimplemented();
	}

}
