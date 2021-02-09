<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface Document extends DocumentOrShadowRoot, NonElementParentNode, ParentNode, XPathEvaluatorBase {

	/**
	 * @return DOMImplementation
	 */
	public function getImplementation() : DOMImplementation;

	/**
	 * @return string
	 */
	public function getURL() : string;

	/**
	 * @return string
	 */
	public function getDocumentURI() : string;

	/**
	 * @return string
	 */
	public function getCompatMode() : string;

	/**
	 * @return string
	 */
	public function getCharacterSet() : string;

	/**
	 * @return string
	 */
	public function getCharset() : string;

	/**
	 * @return string
	 */
	public function getInputEncoding() : string;

	/**
	 * @return string
	 */
	public function getContentType() : string;

	/**
	 * @return ?DocumentType
	 */
	public function getDoctype() : ?DocumentType;

	/**
	 * @return ?Element
	 */
	public function getDocumentElement() : ?Element;

}
