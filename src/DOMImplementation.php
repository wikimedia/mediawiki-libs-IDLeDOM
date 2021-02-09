<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

interface DOMImplementation {
	/**
	 * @param string $qualifiedName
	 * @param string $publicId
	 * @param string $systemId
	 * @return DocumentType
	 */
	public function createDocumentType( string $qualifiedName, string $publicId, string $systemId ) : DocumentType;

	/**
	 * @param ?string $namespace
	 * @param string $qualifiedName
	 * @param ?DocumentType $doctype
	 * @return XMLDocument
	 */
	public function createDocument( ?string $namespace, string $qualifiedName, ?DocumentType $doctype = null ) : XMLDocument;

	/**
	 * @param ?string $title
	 * @return Document
	 */
	public function createHTMLDocument( ?string $title = null ) : Document;

	/**
	 * @return bool
	 */
	public function hasFeature() : bool;

}
