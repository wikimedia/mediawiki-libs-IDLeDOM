<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stub;

use Wikimedia\IDLeDOM\Node;
use Wikimedia\IDLeDOM\XPathResult;

trait XPathExpression {

	// Underscore is used to avoid conflicts with DOM-reserved names
	// phpcs:disable PSR2.Methods.MethodDeclaration.Underscore
	// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName

	/**
	 * @return \Exception
	 */
	abstract public function _unimplemented() : \Exception;

	// phpcs:enable

	/**
	 * @param Node $contextNode
	 * @param int $type
	 * @param ?XPathResult $result
	 * @return XPathResult
	 */
	public function evaluate( Node $contextNode, int $type = 0, ?XPathResult $result = null ) : XPathResult {
		throw self::_unimplemented();
	}

}
