<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Node;

trait NodeFilter {
	/**
	 * Make this callback interface callable.
	 * @param mixed ...$args
	 * @return int
	 */
	public function __invoke( ...$args ) {
		'@phan-var \Wikimedia\IDLeDOM\NodeFilter $this';
		// @var \Wikimedia\IDLeDOM\NodeFilter $this
		return $this->acceptNode( $args[0] );
	}

	/**
	 * Create a NodeFilter from a callable.
	 *
	 * @param callable|\Wikimedia\IDLeDOM\NodeFilter $f
	 * @return \Wikimedia\IDLeDOM\NodeFilter
	 */
	public static function cast( $f ) {
		if ( $f instanceof \Wikimedia\IDLeDOM\NodeFilter ) {
			return $f;
		}
		return new class( $f ) implements \Wikimedia\IDLeDOM\NodeFilter {
			use NodeFilter;

			/** @var callable */
			private $f;

			/**
			 * @param callable $f
			 */
			public function __construct( $f ) {
				$this->f = $f;
			}

			/**
			 * @param Node $node
			 * @return int
			 */
			public function acceptNode( /* Node */ $node ) : int {
				$f = $this->f;
				return $f( $node );
			}
		};
	}
}
