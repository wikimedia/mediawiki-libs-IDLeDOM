<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Stubs;

use Wikimedia\IDLeDOM\Node;

trait NodeFilter {
	/**
	 * Make this callback interface callable.
	 * @param mixed ...$args
	 * @return int
	 */
	public function __invoke( ...$args ) {
		return $this->acceptNode( $args[0] );
	}

	/**
	 * @param Node $node
	 * @return int
	 */
	abstract public function acceptNode( Node $node ) : int;

	/**
	 * Create a NodeFilter from a callable.
	 *
	 * @param callable $f
	 * @return \Wikimedia\IDLeDOM\NodeFilter
	 */
	public static function cast( callable $f ): \Wikimedia\IDLeDOM\NodeFilter {
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
			public function acceptNode( Node $node ) : int {
				$f = $this->f;
				return $f( $node );
			}
		};
	}
}
