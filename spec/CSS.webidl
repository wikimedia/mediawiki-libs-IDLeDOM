// WebIDL files for CSS Object Model (CSSOM)
// From: https://drafts.csswg.org/cssom/#idl-index

[Exposed=Window]
interface MediaList {
  stringifier attribute [LegacyNullToEmptyString] CSSOMString mediaText;
  readonly attribute unsigned long length;
  getter CSSOMString? item(unsigned long index);
  undefined appendMedium(CSSOMString medium);
  undefined deleteMedium(CSSOMString medium);
};

[Exposed=Window]
interface StyleSheet {
  readonly attribute CSSOMString type;
  readonly attribute USVString? href;
  readonly attribute (Element or ProcessingInstruction)? ownerNode;
  readonly attribute CSSStyleSheet? parentStyleSheet;
  readonly attribute DOMString? title;
  [SameObject, PutForwards=mediaText] readonly attribute MediaList media;
  attribute boolean disabled;
};

[Exposed=Window]
interface CSSStyleSheet : StyleSheet {
  constructor(optional CSSStyleSheetInit options = {});

  readonly attribute CSSRule? ownerRule;
  [SameObject] readonly attribute CSSRuleList cssRules;
  unsigned long insertRule(CSSOMString rule, optional unsigned long index = 0);
  undefined deleteRule(unsigned long index);

//  Promise<CSSStyleSheet> replace(USVString text);
  undefined replaceSync(USVString text);
};

dictionary CSSStyleSheetInit {
  DOMString baseURL = null;
  (MediaList or DOMString) media = "";
  boolean disabled = false;
};

partial interface CSSStyleSheet {
  [SameObject] readonly attribute CSSRuleList rules;
  long addRule(optional DOMString selector = "undefined", optional DOMString style = "undefined", optional unsigned long index);
  undefined removeRule(optional unsigned long index = 0);
};

[Exposed=Window]
interface StyleSheetList {
  getter CSSStyleSheet? item(unsigned long index);
  readonly attribute unsigned long length;
};

partial interface mixin DocumentOrShadowRoot {
  [SameObject] readonly attribute StyleSheetList styleSheets;
};

interface mixin LinkStyle {
  readonly attribute CSSStyleSheet? sheet;
};

ProcessingInstruction includes LinkStyle;
[Exposed=Window]
interface CSSRuleList {
  getter CSSRule? item(unsigned long index);
  readonly attribute unsigned long length;
};

[Exposed=Window]
interface CSSRule {
  attribute CSSOMString cssText;
  readonly attribute CSSRule? parentRule;
  readonly attribute CSSStyleSheet? parentStyleSheet;

  // the following attribute and constants are historical
  readonly attribute unsigned short type;
  const unsigned short STYLE_RULE = 1;
  const unsigned short CHARSET_RULE = 2;
  const unsigned short IMPORT_RULE = 3;
  const unsigned short MEDIA_RULE = 4;
  const unsigned short FONT_FACE_RULE = 5;
  const unsigned short PAGE_RULE = 6;
  const unsigned short MARGIN_RULE = 9;
  const unsigned short NAMESPACE_RULE = 10;
};

[Exposed=Window]
interface CSSStyleRule : CSSRule {
  attribute CSSOMString selectorText;
  [SameObject, PutForwards=cssText] readonly attribute CSSStyleDeclaration style;
};

[Exposed=Window]
interface CSSImportRule : CSSRule {
  readonly attribute USVString href;
  [SameObject, PutForwards=mediaText] readonly attribute MediaList media;
  [SameObject] readonly attribute CSSStyleSheet styleSheet;
};

[Exposed=Window]
interface CSSGroupingRule : CSSRule {
  [SameObject] readonly attribute CSSRuleList cssRules;
  unsigned long insertRule(CSSOMString rule, optional unsigned long index = 0);
  undefined deleteRule(unsigned long index);
};

[Exposed=Window]
interface CSSPageRule : CSSGroupingRule {
           attribute CSSOMString selectorText;
  [SameObject, PutForwards=cssText] readonly attribute CSSStyleDeclaration style;
};

[Exposed=Window]
interface CSSMarginRule : CSSRule {
  readonly attribute CSSOMString name;
  [SameObject, PutForwards=cssText] readonly attribute CSSStyleDeclaration style;
};

[Exposed=Window]
interface CSSNamespaceRule : CSSRule {
  readonly attribute CSSOMString namespaceURI;
  readonly attribute CSSOMString prefix;
};

[Exposed=Window]
interface CSSStyleDeclaration {
  [CEReactions] attribute CSSOMString cssText;
  readonly attribute unsigned long length;
  getter CSSOMString item(unsigned long index);
  CSSOMString getPropertyValue(CSSOMString property);
  CSSOMString getPropertyPriority(CSSOMString property);
  [CEReactions] undefined setProperty(CSSOMString property, [LegacyNullToEmptyString] CSSOMString value, optional [LegacyNullToEmptyString] CSSOMString priority = "");
  [CEReactions] CSSOMString removeProperty(CSSOMString property);
  readonly attribute CSSRule? parentRule;
  [CEReactions] attribute [LegacyNullToEmptyString] CSSOMString cssFloat;
};
// See CSSProperties.webidl for a discussion about the attributes corresponding
// to "supported CSS properties".

interface mixin ElementCSSInlineStyle {
  [SameObject, PutForwards=cssText] readonly attribute CSSStyleDeclaration style;
};

HTMLElement includes ElementCSSInlineStyle;

SVGElement includes ElementCSSInlineStyle;

MathMLElement includes ElementCSSInlineStyle;

partial interface Window {
  [NewObject] CSSStyleDeclaration getComputedStyle(Element elt, optional CSSOMString? pseudoElt);
};

//[Exposed=Window]
//namespace CSS {
//  CSSOMString escape(CSSOMString ident);
//};
