<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface HTMLSlotElement extends HTMLElement {

	/**
	 * @return string
	 */
	public function getName() : string;

	/**
	 * @param string $val
	 */
	public function setName( string $val ) : void;

	/**
	 * @param AssignedNodesOptions|associative-array|null $options
	 * @return list<Node>
	 */
	public function assignedNodes( /* ?mixed */ $options = null ) : array;

	/**
	 * @param AssignedNodesOptions|associative-array|null $options
	 * @return list<Element>
	 */
	public function assignedElements( /* ?mixed */ $options = null ) : array;

}
