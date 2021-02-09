<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Range {

	/**
	 * @return Node
	 */
	public function getCommonAncestorContainer() : Node;

	/**
	 * @param Node $node
	 * @param int $offset
	 * @return void
	 */
	public function setStart( Node $node, int $offset ) : void;

	/**
	 * @param Node $node
	 * @param int $offset
	 * @return void
	 */
	public function setEnd( Node $node, int $offset ) : void;

	/**
	 * @param Node $node
	 * @return void
	 */
	public function setStartBefore( Node $node ) : void;

	/**
	 * @param Node $node
	 * @return void
	 */
	public function setStartAfter( Node $node ) : void;

	/**
	 * @param Node $node
	 * @return void
	 */
	public function setEndBefore( Node $node ) : void;

	/**
	 * @param Node $node
	 * @return void
	 */
	public function setEndAfter( Node $node ) : void;

	/**
	 * @param bool $toStart
	 * @return void
	 */
	public function collapse( bool $toStart = false ) : void;

	/**
	 * @param Node $node
	 * @return void
	 */
	public function selectNode( Node $node ) : void;

	/**
	 * @param Node $node
	 * @return void
	 */
	public function selectNodeContents( Node $node ) : void;

	/** @var int */
	public const START_TO_START = 0;

	/** @var int */
	public const START_TO_END = 1;

	/** @var int */
	public const END_TO_END = 2;

	/** @var int */
	public const END_TO_START = 3;

	/**
	 * @param int $how
	 * @param Range $sourceRange
	 * @return int
	 */
	public function compareBoundaryPoints( int $how, Range $sourceRange ) : int;

	/**
	 * @return void
	 */
	public function deleteContents() : void;

	/**
	 * @return DocumentFragment
	 */
	public function extractContents() : DocumentFragment;

	/**
	 * @return DocumentFragment
	 */
	public function cloneContents() : DocumentFragment;

	/**
	 * @param Node $node
	 * @return void
	 */
	public function insertNode( Node $node ) : void;

	/**
	 * @param Node $newParent
	 * @return void
	 */
	public function surroundContents( Node $newParent ) : void;

	/**
	 * @return Range
	 */
	public function cloneRange() : Range;

	/**
	 * @return void
	 */
	public function detach() : void;

	/**
	 * @param Node $node
	 * @param int $offset
	 * @return bool
	 */
	public function isPointInRange( Node $node, int $offset ) : bool;

	/**
	 * @param Node $node
	 * @param int $offset
	 * @return int
	 */
	public function comparePoint( Node $node, int $offset ) : int;

	/**
	 * @param Node $node
	 * @return bool
	 */
	public function intersectsNode( Node $node ) : bool;

}
