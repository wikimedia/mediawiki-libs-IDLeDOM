// Extensions added for compatibility with PHP DOM* classes (xml extension)

partial interface Document {
  // This exists in PHP's built-in DOMDocument.  PHP specs say:
  // "Encoding of the document, as specified by the XML declaration.
  // This attribute is not present in the final DOM Level 3 specification,
  // but is the only way of manipulating XML document encoding in this
  // implementation."
  [PHPExtension] attribute DOMString encoding;
  // PHP specs say: "Do not remove redundant white space. Default to true.
  // Setting this to false has the same effect as passing LIBXML_NOBLANKS
  // as option to DOMDocument::load() etc.
  [PHPExtension] attribute boolean preserveWhiteSpace;
  // PHP specs say: "Nicely formats output with indentation and extra space.
  // This has no effect if the document was loaded with preserveWhitespace
  // enabled."
  [PHPExtension] attribute boolean formatOutput;
  // PHP specs say: "Loads and validates against the DTD. Default to false."
  [PHPExtension] attribute boolean validateOnParse;
  // PHP specs say: "Throws DOMException on errors. Default to true."
  [PHPExtension] attribute boolean strictErrorChecking;

  // These are often used in PHP code instead of the "proper" DOMImplementation
  // or DOM parsing methods.
  // We don't support calling loadHTML/loadXML statically (which triggers an
  // E_STRICT error in modern PHP) and therefore the return value is always
  // a boolean.
  [PHPExtension] boolean loadHTML(DOMString source, optional unsigned long options = 0);
  [PHPExtension] boolean loadXML(DOMString source, optional unsigned long options = 0);
  [PHPExtension] (DOMString or boolean) saveHTML(optional Node? node = null);
  [PHPExtension] (DOMString or boolean) saveXML(optional Node? node = null, optional unsigned long options = 0);
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

partial interface DocumentFragment {
  // This is often used in PHP code instead of the "proper"
  // DOM parsing methods.
  [PHPExtension]
  boolean appendXML(DOMString data);
};
