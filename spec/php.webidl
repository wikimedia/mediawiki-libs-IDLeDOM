// Extensions added for compatibility with PHP DOM* classes (xml extension)

partial interface Document {
  // This exists in PHP's built-in DOMDocument.  PHP specs say:
  // "Encoding of the document, as specified by the XML declaration.
  // This attribute is not present in the final DOM Level 3 specification,
  // but is the only way of manipulating XML document encoding in this
  // implementation."
  [PHPExtension] attribute DOMString encoding;
};

partial interface Element {
  // PHP requires you to tell it which attribute is the "id" for the Element
  // before it will populate the index used by Document::getElementById()
  // These can be no-ops in a standards-compliant DOM implementation
  [PHPExtension]
  undefined setIdAttribute(DOMString qualifiedName, boolean isId);
  [PHPExtension]
  undefined setIdAttributeNode(Attr attr, boolean isId);
  [PHPExtension]
  undefined setIdAttributeNS(DOMString namespace, DOMString qualifiedName, boolean isId);
};
