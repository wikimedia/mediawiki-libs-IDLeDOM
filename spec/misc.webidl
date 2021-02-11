// These definitions are from other standards, but are referenced from
// the DOM standard: EventHandler, DOMHighResTimeStamp, HTMLSlotElement
// In addition, HTMLSlotElement pulls in HTMLElement.

// https://html.spec.whatwg.org/multipage/webappapis.html#eventhandler
[LegacyTreatNonObjectAsNull]
callback EventHandlerNonNull = any (Event event);
typedef EventHandlerNonNull? EventHandler;

// https://w3c.github.io/hr-time/#dom-domhighrestimestamp
typedef double DOMHighResTimeStamp;

// https://html.spec.whatwg.org/multipage/scripting.html#htmlslotelement
[Exposed=Window]
interface HTMLSlotElement : HTMLElement {
  [HTMLConstructor] constructor();

  [CEReactions] attribute DOMString name;
  sequence<Node> assignedNodes(optional AssignedNodesOptions options = {});
  sequence<Element> assignedElements(optional AssignedNodesOptions options = {});
};

dictionary AssignedNodesOptions {
  boolean flatten = false;
};

// https://html.spec.whatwg.org/multipage/dom.html#htmlelement
interface HTMLElement : Element {
  [HTMLConstructor] constructor();

  // metadata attributes
  [CEReactions] attribute DOMString title;
  [CEReactions] attribute DOMString lang;
  [CEReactions] attribute boolean translate;
  [CEReactions] attribute DOMString dir;

  // user interaction
  [CEReactions] attribute boolean hidden;
  undefined click();
  [CEReactions] attribute DOMString accessKey;
  readonly attribute DOMString accessKeyLabel;
  [CEReactions] attribute boolean draggable;
  [CEReactions] attribute boolean spellcheck;
  [CEReactions] attribute DOMString autocapitalize;

  [CEReactions] attribute [LegacyNullToEmptyString] DOMString innerText;

  // ElementInternals is removed to restrict the transitive closure of
  // dependencies here.
  //ElementInternals attachInternals();
};

// these are part of the above, but we're going to trim them out for now
// in an order to contain the transitive closure of dependencies.
//HTMLElement includes GlobalEventHandlers;
//HTMLElement includes DocumentAndElementEventHandlers;
//HTMLElement includes ElementContentEditable;
//HTMLElement includes HTMLOrSVGElement;

[Exposed=Window]
interface HTMLUnknownElement : HTMLElement {
  // Note: intentionally no [HTMLConstructor]
};
