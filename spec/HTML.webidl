// WebIDL files from jsdom/lib/jsdom/living/nodes/HTML*Element.webidl
// Partial interface definitions are 'obsolete' legacy elements.

// https://html.spec.whatwg.org/#htmlanchorelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLAnchorElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString target;
  [CEReactions, Reflect] attribute DOMString download;
//  [CEReactions] attribute USVString ping;
  [CEReactions, Reflect] attribute DOMString rel;
  [SameObject, PutForwards=value] readonly attribute DOMTokenList relList;
  [CEReactions, Reflect] attribute DOMString hreflang;
  [CEReactions, Reflect] attribute DOMString type;

  [CEReactions] attribute DOMString text;

//  [CEReactions] attribute DOMString referrerPolicy;

  // also has obsolete members
};
HTMLAnchorElement includes HTMLHyperlinkElementUtils;

partial interface HTMLAnchorElement {
  [CEReactions, Reflect] attribute DOMString coords;
  [CEReactions, Reflect] attribute DOMString charset;
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect] attribute DOMString rev;
  [CEReactions, Reflect] attribute DOMString shape;
};


// https://html.spec.whatwg.org/#htmlareaelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLAreaElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString alt;
  [CEReactions, Reflect] attribute DOMString coords;
  [CEReactions, Reflect] attribute DOMString shape;
  [CEReactions, Reflect] attribute DOMString target;
//  [CEReactions] attribute DOMString download;
//  [CEReactions] attribute USVString ping;
  [CEReactions, Reflect] attribute DOMString rel;
  [SameObject, PutForwards=value] readonly attribute DOMTokenList relList;
//  [CEReactions] attribute DOMString referrerPolicy;

  // also has obsolete members
};
HTMLAreaElement includes HTMLHyperlinkElementUtils;

partial interface HTMLAreaElement {
  [CEReactions, Reflect] attribute boolean noHref;
};


[Exposed=Window,
 HTMLConstructor,
 NamedConstructor=Audio(optional DOMString src)]
interface HTMLAudioElement : HTMLMediaElement {};


[Exposed=Window,
 HTMLConstructor]
interface HTMLBRElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLBRElement {
  [CEReactions, Reflect] attribute DOMString clear;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLBaseElement : HTMLElement {
  [CEReactions] attribute USVString href;
  [CEReactions, Reflect] attribute DOMString target;
};


// https://html.spec.whatwg.org/#htmlbodyelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLBodyElement : HTMLElement {
  // also has obsolete members
};

// HTMLBodyElement includes WindowEventHandlers;

// https://html.spec.whatwg.org/#HTMLBodyElement-partial
partial interface HTMLBodyElement {
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString text;
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString link;
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString vLink;
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString aLink;
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString bgColor;
  [CEReactions, Reflect] attribute DOMString background;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLButtonElement : HTMLElement {
  [CEReactions, Reflect] attribute boolean autofocus;
  [CEReactions, Reflect] attribute boolean disabled;
  readonly attribute HTMLFormElement? form;
//  [CEReactions] attribute USVString formAction;
//  [CEReactions] attribute DOMString formEnctype;
//  [CEReactions] attribute DOMString formMethod;
  [CEReactions, Reflect] attribute boolean formNoValidate;
  [CEReactions, Reflect] attribute DOMString formTarget;
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions] attribute DOMString type;
  [CEReactions, Reflect] attribute DOMString value;

  readonly attribute boolean willValidate;
  readonly attribute ValidityState validity;
  readonly attribute DOMString validationMessage;
  boolean checkValidity();
  boolean reportValidity();
  undefined setCustomValidity(DOMString error);

  readonly attribute NodeList labels;
};


// typedef (CanvasRenderingContext2D or WebGLRenderingContext) RenderingContext;

[Exposed=Window,
 HTMLConstructor]
interface HTMLCanvasElement : HTMLElement {
  [CEReactions] attribute unsigned long width;
  [CEReactions] attribute unsigned long height;

//  RenderingContext? getContext(DOMString contextId, any... arguments);

  USVString toDataURL(optional DOMString type, optional any quality);
//  undefined toBlob(BlobCallback _callback, optional DOMString type, optional any quality);
//  OffscreenCanvas transferControlToOffscreen();
};

// callback BlobCallback = undefined (Blob? blob);


[Exposed=Window,
 HTMLConstructor]
interface HTMLDListElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLDListElement {
  [CEReactions, Reflect] attribute boolean compact;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLDataElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString value;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLDataListElement : HTMLElement {
  [SameObject] readonly attribute HTMLCollection options;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLDetailsElement : HTMLElement {
  [CEReactions, Reflect] attribute boolean open;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLDialogElement : HTMLElement {
  [CEReactions, Reflect] attribute boolean open;
//  attribute DOMString returnValue;
//  [CEReactions] undefined show();
//  [CEReactions] undefined showModal();
//  [CEReactions] undefined close(optional DOMString returnValue);
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLDirectoryElement : HTMLElement {
  [CEReactions, Reflect] attribute boolean compact;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLDivElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLDivElement {
  [CEReactions, Reflect] attribute DOMString align;
};


// https://html.spec.whatwg.org/multipage/dom.html#htmlelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLElement : Element {
  // metadata attributes
  [CEReactions, Reflect] attribute DOMString title;
  [CEReactions, Reflect] attribute DOMString lang;
  [CEReactions] attribute boolean translate;
  [CEReactions] attribute DOMString dir;

  // user interaction
  [CEReactions, Reflect] attribute boolean hidden;
  undefined click();
  [CEReactions, Reflect] attribute DOMString accessKey;
  readonly attribute DOMString accessKeyLabel;
  [CEReactions] attribute boolean draggable;
  [CEReactions] attribute boolean spellcheck;
  [CEReactions] attribute DOMString autocapitalize;

  [CEReactions] attribute [LegacyNullToEmptyString] DOMString innerText;

//  ElementInternals attachInternals();
};

// HTMLElement includes GlobalEventHandlers;
// HTMLElement includes DocumentAndElementEventHandlers;
// HTMLElement includes ElementContentEditable;
HTMLElement includes HTMLOrSVGElement;

// https://drafts.csswg.org/cssom-view/#extensions-to-the-htmlelement-interface
partial interface HTMLElement {
  readonly attribute Element? offsetParent;
  readonly attribute long offsetTop;
  readonly attribute long offsetLeft;
  readonly attribute long offsetWidth;
  readonly attribute long offsetHeight;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLEmbedElement : HTMLElement {
  [CEReactions, ReflectURL] attribute USVString src;
  [CEReactions, Reflect] attribute DOMString type;
  [CEReactions, Reflect] attribute DOMString width;
  [CEReactions, Reflect] attribute DOMString height;
//  Document? getSVGDocument();

  // also has obsolete members
};

partial interface HTMLEmbedElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect] attribute DOMString name;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLFieldSetElement : HTMLElement {
  [CEReactions, Reflect] attribute boolean disabled;
  readonly attribute HTMLFormElement? form;
  [CEReactions, Reflect] attribute DOMString name;

  readonly attribute DOMString type;

  [SameObject] readonly attribute HTMLCollection elements;

  readonly attribute boolean willValidate;
  [SameObject] readonly attribute ValidityState validity;
  readonly attribute DOMString validationMessage;
  boolean checkValidity();
  boolean reportValidity();
  undefined setCustomValidity(DOMString error);
};


// https://html.spec.whatwg.org/multipage/obsolete.html#htmlfontelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLFontElement : HTMLElement {
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString color;
  [CEReactions, Reflect] attribute DOMString face;
  [CEReactions, Reflect] attribute DOMString size;
};


// https://html.spec.whatwg.org/multipage/forms.html#htmlformelement
[Exposed=Window,
// We haven't made named/indexed getters work for HTMLFormElement yet, so don't include these until we do.
// LegacyOverrideBuiltins,
// LegacyUnenumerableNamedProperties,
 HTMLConstructor]
interface HTMLFormElement : HTMLElement {
  [CEReactions, Reflect="accept-charset"] attribute DOMString acceptCharset;
  [CEReactions] attribute USVString action;
//  [CEReactions] attribute DOMString autocomplete;
  [CEReactions] attribute DOMString enctype;
//  [CEReactions] attribute DOMString encoding;
  [CEReactions] attribute DOMString method;
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect] attribute boolean noValidate;
  [CEReactions, Reflect] attribute DOMString target;

  [SameObject] readonly attribute HTMLFormControlsCollection elements;
  readonly attribute unsigned long length;
//  getter Element (unsigned long index);
//  getter (RadioNodeList or Element) (DOMString name);

  undefined submit();
  undefined requestSubmit(optional HTMLElement submitter);
  [CEReactions] undefined reset();
  boolean checkValidity();
  boolean reportValidity();
};


[Exposed=Window]
interface HTMLFormControlsCollection : HTMLCollection {
  // inherits length and item()
//  getter (RadioNodeList or Element)? namedItem(DOMString name); // shadows inherited namedItem()
};

[Exposed=Window]
interface RadioNodeList : NodeList {
  attribute DOMString value;
};


// https://html.spec.whatwg.org/multipage/obsolete.html#htmlframeelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLFrameElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect] attribute DOMString scrolling;
  [CEReactions, ReflectURL] attribute USVString src;
  [CEReactions, Reflect] attribute DOMString frameBorder;
  [CEReactions, ReflectURL] attribute USVString longDesc;
  [CEReactions, Reflect] attribute boolean noResize;
  readonly attribute Document? contentDocument;
//  readonly attribute WindowProxy? contentWindow;

  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString marginHeight;
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString marginWidth;
};


// https://html.spec.whatwg.org/#htmlframesetelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLFrameSetElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString cols;
  [CEReactions, Reflect] attribute DOMString rows;
};
// HTMLFrameSetElement includes WindowEventHandlers;


[Exposed=Window,
 HTMLConstructor]
interface HTMLHRElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLHRElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect] attribute DOMString color;
  [CEReactions, Reflect] attribute boolean noShade;
  [CEReactions, Reflect] attribute DOMString size;
  [CEReactions, Reflect] attribute DOMString width;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLHeadElement : HTMLElement {};


[Exposed=Window,
 HTMLConstructor]
interface HTMLHeadingElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLHeadingElement {
  [CEReactions, Reflect] attribute DOMString align;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLHtmlElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLHtmlElement {
  [CEReactions, Reflect] attribute DOMString version;
};


// https://html.spec.whatwg.org/multipage/iframe-embed-object.html#htmliframeelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLIFrameElement : HTMLElement {
  [CEReactions, ReflectURL] attribute USVString src;
  [CEReactions, Reflect] attribute DOMString srcdoc;
  [CEReactions, Reflect] attribute DOMString name;
//  [SameObject, PutForwards=value] readonly attribute DOMTokenList sandbox;
  [CEReactions, Reflect] attribute boolean allowFullscreen;
//  [CEReactions] attribute boolean allowPaymentRequest;
//  [CEReactions] attribute boolean allowUserMedia;
  [CEReactions, Reflect] attribute DOMString width;
  [CEReactions, Reflect] attribute DOMString height;
//  [CEReactions] attribute DOMString referrerPolicy;
  readonly attribute Document? contentDocument;
//  readonly attribute WindowProxy? contentWindow;
  Document? getSVGDocument();

  // also has obsolete members
};

// https://html.spec.whatwg.org/multipage/obsolete.html#HTMLIFrameElement-partial
partial interface HTMLIFrameElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect] attribute DOMString scrolling;
  [CEReactions, Reflect] attribute DOMString frameBorder;
  [CEReactions, ReflectURL] attribute USVString longDesc;

  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString marginHeight;
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString marginWidth;
};


// https://html.spec.whatwg.org/multipage/embedded-content.html#htmlimageelement
[Exposed=Window,
 HTMLConstructor,
 NamedConstructor=Image(optional unsigned long width, optional unsigned long height)]
interface HTMLImageElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString alt;
  [CEReactions, ReflectURL] attribute USVString src;
  [CEReactions, Reflect] attribute USVString srcset;
  [CEReactions, Reflect] attribute DOMString sizes;
  [CEReactions, Reflect] attribute DOMString? crossOrigin;
  [CEReactions, Reflect] attribute DOMString useMap;
  [CEReactions, Reflect] attribute boolean isMap;
  [CEReactions] attribute unsigned long width;
  [CEReactions] attribute unsigned long height;
  readonly attribute unsigned long naturalWidth;
  readonly attribute unsigned long naturalHeight;
  readonly attribute boolean complete;
  readonly attribute USVString currentSrc;
//  [CEReactions] attribute DOMString referrerPolicy;

//  Promise<void> decode();

  // also has obsolete members
};

// https://html.spec.whatwg.org/multipage/obsolete.html#HTMLImageElement-partial
partial interface HTMLImageElement {
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, ReflectURL] attribute USVString lowsrc;
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect] attribute unsigned long hspace;
  [CEReactions, Reflect] attribute unsigned long vspace;
  [CEReactions, ReflectURL] attribute USVString longDesc;

  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString border;
};


// https://html.spec.whatwg.org/multipage/input.html#htmlinputelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLInputElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString accept;
  [CEReactions, Reflect] attribute DOMString alt;
  [CEReactions, Reflect] attribute DOMString autocomplete;
  [CEReactions, Reflect] attribute boolean autofocus;
  [CEReactions, Reflect="checked"] attribute boolean defaultChecked;
  attribute boolean checked;
  [CEReactions, Reflect] attribute DOMString dirName;
  [CEReactions, Reflect] attribute boolean disabled;
  readonly attribute HTMLFormElement? form;
//  attribute FileList? files;
//  [CEReactions] attribute USVString formAction;
//  [CEReactions] attribute DOMString formEnctype;
//  [CEReactions] attribute DOMString formMethod;
  [CEReactions, Reflect] attribute boolean formNoValidate;
  [CEReactions, Reflect] attribute DOMString formTarget;
//  [CEReactions] attribute unsigned long height;
  attribute boolean indeterminate;
  [CEReactions, Reflect] attribute DOMString inputMode;
  readonly attribute HTMLElement? list;
  [CEReactions, Reflect] attribute DOMString max;
  [CEReactions] attribute long maxLength;
  [CEReactions, Reflect] attribute DOMString min;
  [CEReactions] attribute long minLength;
  [CEReactions, Reflect] attribute boolean multiple;
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect] attribute DOMString pattern;
  [CEReactions, Reflect] attribute DOMString placeholder;
  [CEReactions, Reflect] attribute boolean readOnly;
  [CEReactions, Reflect] attribute boolean required;
  [CEReactions] attribute unsigned long size;
  [CEReactions, ReflectURL] attribute USVString src;
  [CEReactions, Reflect] attribute DOMString step;
  [CEReactions] attribute DOMString type;
  [CEReactions, Reflect="value"] attribute DOMString defaultValue;
  [CEReactions] attribute [LegacyNullToEmptyString] DOMString value;
//  attribute object? valueAsDate;
  attribute unrestricted double valueAsNumber;
//  [CEReactions] attribute unsigned long width;

  undefined stepUp(optional long n = 1);
  undefined stepDown(optional long n = 1);

  readonly attribute boolean willValidate;
  readonly attribute ValidityState validity;
  readonly attribute DOMString validationMessage;
  boolean checkValidity();
  boolean reportValidity();
  undefined setCustomValidity(DOMString error);

  readonly attribute NodeList? labels;

  undefined select();
  attribute unsigned long? selectionStart;
  attribute unsigned long? selectionEnd;
  attribute DOMString? selectionDirection;
  undefined setRangeText(DOMString replacement);
//  undefined setRangeText(DOMString replacement, unsigned long start, unsigned long end, optional SelectionMode selectionMode = "preserve");
  undefined setSelectionRange(unsigned long start, unsigned long end, optional DOMString direction);

  // also has obsolete members
};

// https://html.spec.whatwg.org/multipage/obsolete.html#HTMLInputElement-partial
partial interface HTMLInputElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect] attribute DOMString useMap;
};

// https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#selectionmode
enum SelectionMode {
  "select",
  "start",
  "end",
  "preserve" // default
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLLIElement : HTMLElement {
  [CEReactions, Reflect] attribute long value;

  // also has obsolete members
};

partial interface HTMLLIElement {
  [CEReactions, Reflect] attribute DOMString type;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLLabelElement : HTMLElement {
  readonly attribute HTMLFormElement? form;
  [CEReactions, Reflect="for"] attribute DOMString htmlFor;
  readonly attribute HTMLElement? control;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLLegendElement : HTMLElement {
  readonly attribute HTMLFormElement? form;

  // also has obsolete members
};

partial interface HTMLLegendElement {
  [CEReactions, Reflect] attribute DOMString align;
};


// https://html.spec.whatwg.org/#htmllinkelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLLinkElement : HTMLElement {
  [CEReactions, ReflectURL] attribute USVString href;
  [CEReactions, Reflect] attribute DOMString? crossOrigin;
  [CEReactions, Reflect] attribute DOMString rel;
//  [CEReactions] attribute DOMString as; // (default "")
  [SameObject, PutForwards=value] readonly attribute DOMTokenList relList;
  [CEReactions, Reflect] attribute DOMString media;
//  [CEReactions] attribute DOMString integrity;
  [CEReactions, Reflect] attribute DOMString hreflang;
  [CEReactions, Reflect] attribute DOMString type;
//  [SameObject, PutForwards=value] readonly attribute DOMTokenList sizes;
//  [CEReactions] attribute USVString imageSrcset;
//  [CEReactions] attribute DOMString imageSizes;
//  [CEReactions] attribute DOMString referrerPolicy;

  // also has obsolete members
};
// https://drafts.csswg.org/cssom/#the-linkstyle-interface
// HTMLLinkElement includes LinkStyle;

// https://html.spec.whatwg.org/#HTMLLinkElement-partial
partial interface HTMLLinkElement {
  [CEReactions, Reflect] attribute DOMString charset;
  [CEReactions, Reflect] attribute DOMString rev;
  [CEReactions, Reflect] attribute DOMString target;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLMapElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString name;
  [SameObject] readonly attribute HTMLCollection areas;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLMarqueeElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString behavior;
  [CEReactions, Reflect="bgcolor"] attribute DOMString bgColor;
  [CEReactions, Reflect] attribute DOMString direction;
  [CEReactions, Reflect] attribute DOMString height;
  [CEReactions, Reflect] attribute unsigned long hspace;
//  [CEReactions] attribute long loop;
  [CEReactions, Reflect="scrollamount"] attribute unsigned long scrollAmount;
  [CEReactions, Reflect="scrolldelay"] attribute unsigned long scrollDelay;
  [CEReactions, Reflect="truespeed"] attribute boolean trueSpeed;
  [CEReactions, Reflect] attribute unsigned long vspace;
  [CEReactions, Reflect] attribute DOMString width;

//  attribute EventHandler onbounce;
//  attribute EventHandler onfinish;
//  attribute EventHandler onstart;

//  undefined start();
//  undefined stop();
};


//enum CanPlayTypeResult { "" /* empty string */, "maybe", "probably" };
typedef (MediaStream or MediaSource /* or Blob */) MediaProvider;

[Exposed=Window]
interface HTMLMediaElement : HTMLElement {

  // error state
//  readonly attribute MediaError? error;

  // network state
  [CEReactions, ReflectURL] attribute USVString src;
//  attribute MediaProvider? srcObject;
  readonly attribute USVString currentSrc;
  [CEReactions, Reflect] attribute DOMString? crossOrigin;
  const unsigned short NETWORK_EMPTY = 0;
  const unsigned short NETWORK_IDLE = 1;
  const unsigned short NETWORK_LOADING = 2;
  const unsigned short NETWORK_NO_SOURCE = 3;
  readonly attribute unsigned short networkState;
  [CEReactions, Reflect] attribute DOMString preload; // TODO limited only to known values
  readonly attribute TimeRanges buffered;
  undefined load();
//  CanPlayTypeResult canPlayType(DOMString type);

  // ready state
  const unsigned short HAVE_NOTHING = 0;
  const unsigned short HAVE_METADATA = 1;
  const unsigned short HAVE_CURRENT_DATA = 2;
  const unsigned short HAVE_FUTURE_DATA = 3;
  const unsigned short HAVE_ENOUGH_DATA = 4;
  readonly attribute unsigned short readyState;
  readonly attribute boolean seeking;

  // playback state
  attribute double currentTime;
//  undefined fastSeek(double time);
  readonly attribute unrestricted double duration;
//  object getStartDate();
  readonly attribute boolean paused;
  attribute double defaultPlaybackRate;
  attribute double playbackRate;
  readonly attribute TimeRanges played;
  readonly attribute TimeRanges seekable;
  readonly attribute boolean ended;
  [CEReactions, Reflect] attribute boolean autoplay;
  [CEReactions, Reflect] attribute boolean loop;
  // Promise<void> play();
  undefined pause();

  // controls
  [CEReactions, Reflect] attribute boolean controls;
  attribute double volume;
  attribute boolean muted;
  [CEReactions, Reflect="muted"] attribute boolean defaultMuted;

  // tracks
  [SameObject] readonly attribute AudioTrackList audioTracks;
  [SameObject] readonly attribute VideoTrackList videoTracks;
  [SameObject] readonly attribute TextTrackList textTracks;
//  TextTrack addTextTrack(TextTrackKind kind, optional DOMString label = "", optional DOMString language = "");
};

enum TextTrackKind { "subtitles",  "captions",  "descriptions",  "chapters",  "metadata" };

// https://html.spec.whatwg.org/multipage/media.html#texttrack
interface TextTrack : EventTarget {
  readonly attribute TextTrackKind kind;
  readonly attribute DOMString label;
  readonly attribute DOMString language;

  readonly attribute DOMString id;
  readonly attribute DOMString inBandMetadataTrackDispatchType;

//  attribute TextTrackMode mode;

  readonly attribute TextTrackCueList? cues;
  readonly attribute TextTrackCueList? activeCues;

  undefined addCue(TextTrackCue cue);
  undefined removeCue(TextTrackCue cue);

  attribute EventHandler oncuechange;
};


[Exposed=Window]
interface TextTrackCue : EventTarget {
  readonly attribute TextTrack? track;

  attribute DOMString id;
  attribute double startTime;
  attribute unrestricted double endTime;
  attribute boolean pauseOnExit;

  attribute EventHandler onenter;
  attribute EventHandler onexit;
};


interface TextTrackCueList {
  readonly attribute unsigned long length;
  getter TextTrackCue (unsigned long index);
  [PHPExtension] getter TextTrackCue? getCueById(DOMString id);
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLMenuElement : HTMLElement {

  // also has obsolete members
};

partial interface HTMLMenuElement {
  [CEReactions, Reflect] attribute boolean compact;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLMetaElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect="http-equiv"] attribute DOMString httpEquiv;
  [CEReactions, Reflect] attribute DOMString content;

  // also has obsolete members
};

partial interface HTMLMetaElement {
  [CEReactions, Reflect] attribute DOMString scheme;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLMeterElement : HTMLElement {
  [CEReactions] attribute double value;
  [CEReactions] attribute double min;
  [CEReactions] attribute double max;
  [CEReactions] attribute double low;
  [CEReactions] attribute double high;
  [CEReactions] attribute double optimum;
  readonly attribute NodeList labels;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLModElement : HTMLElement {
  [CEReactions, ReflectURL] attribute USVString cite;
  [CEReactions, Reflect] attribute DOMString dateTime;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLOListElement : HTMLElement {
  [CEReactions, Reflect] attribute boolean reversed;
  [CEReactions] attribute long start;
  [CEReactions, Reflect] attribute DOMString type;

  // also has obsolete members
};

partial interface HTMLOListElement {
  [CEReactions, Reflect] attribute boolean compact;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLObjectElement : HTMLElement {
  [CEReactions, ReflectURL] attribute USVString data;
  [CEReactions, Reflect] attribute DOMString type;
//  [CEReactions] attribute boolean typeMustMatch;
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect] attribute DOMString useMap;
  readonly attribute HTMLFormElement? form;
  [CEReactions, Reflect] attribute DOMString width;
  [CEReactions, Reflect] attribute DOMString height;
  readonly attribute Document? contentDocument;
//  readonly attribute WindowProxy? contentWindow;
//  Document? getSVGDocument();

  readonly attribute boolean willValidate;
  readonly attribute ValidityState validity;
  readonly attribute DOMString validationMessage;
  boolean checkValidity();
  boolean reportValidity();
  undefined setCustomValidity(DOMString error);

  // also has obsolete members
};

partial interface HTMLObjectElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect] attribute DOMString archive;
  [CEReactions, Reflect] attribute DOMString code;
  [CEReactions, Reflect] attribute boolean declare;
  [CEReactions, Reflect] attribute unsigned long hspace;
  [CEReactions, Reflect] attribute DOMString standby;
  [CEReactions, Reflect] attribute unsigned long vspace;
  [CEReactions, ReflectURL] attribute DOMString codeBase;
  [CEReactions, Reflect] attribute DOMString codeType;

  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString border;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLOptGroupElement : HTMLElement {
  [CEReactions, Reflect] attribute boolean disabled;
  [CEReactions, Reflect] attribute DOMString label;
};


[Exposed=Window,
 HTMLConstructor,
 NamedConstructor=Option(optional DOMString text = "", optional DOMString value, optional boolean defaultSelected = false, optional boolean selected = false)]
interface HTMLOptionElement : HTMLElement {
  [CEReactions, Reflect] attribute boolean disabled;
  readonly attribute HTMLFormElement? form;
  [CEReactions] attribute DOMString label;
  [CEReactions, Reflect="selected"] attribute boolean defaultSelected;
  attribute boolean selected;
  [CEReactions] attribute DOMString value;

  [CEReactions] attribute DOMString text;
  readonly attribute long index;
};


[Exposed=Window]
interface HTMLOptionsCollection : HTMLCollection {
  // inherits item(), namedItem()
//  [CEReactions] attribute unsigned long length; // shadows inherited length
  [CEReactions] setter undefined (unsigned long index, HTMLOptionElement? option);
  [CEReactions] undefined add((HTMLOptionElement or HTMLOptGroupElement) element, optional (HTMLElement or long)? before = null);
  [CEReactions] undefined remove(long index);
  attribute long selectedIndex;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLOutputElement : HTMLElement {
  [SameObject, PutForwards=value] readonly attribute DOMTokenList htmlFor;
  readonly attribute HTMLFormElement? form;
  [CEReactions, Reflect] attribute DOMString name;

  readonly attribute DOMString type;
  [CEReactions] attribute DOMString defaultValue;
  [CEReactions] attribute DOMString value;

  readonly attribute boolean willValidate;
  readonly attribute ValidityState validity;
  readonly attribute DOMString validationMessage;
  boolean checkValidity();
  boolean reportValidity();
  undefined setCustomValidity(DOMString error);

  readonly attribute NodeList labels;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLParagraphElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLParagraphElement {
  [CEReactions, Reflect] attribute DOMString align;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLParamElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect] attribute DOMString value;

  // also has obsolete members
};

partial interface HTMLParamElement {
  [CEReactions, Reflect] attribute DOMString type;
  [CEReactions, Reflect] attribute DOMString valueType;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLPictureElement : HTMLElement {};


[Exposed=Window,
 HTMLConstructor]
interface HTMLPreElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLPreElement {
  [CEReactions, Reflect] attribute long width;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLProgressElement : HTMLElement {
  [CEReactions] attribute double value;
  [CEReactions] attribute double max;
  readonly attribute double position;
  readonly attribute NodeList labels;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLQuoteElement : HTMLElement {
  [CEReactions, ReflectURL] attribute USVString cite;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLScriptElement : HTMLElement {
  [CEReactions, ReflectURL] attribute USVString src;
  [CEReactions, Reflect] attribute DOMString type;
//  [CEReactions, Reflect] attribute boolean noModule;
//  [CEReactions] attribute boolean async;
  [CEReactions, Reflect] attribute boolean defer;
  [CEReactions, Reflect] attribute DOMString? crossOrigin;
  [CEReactions] attribute DOMString text;
//  [CEReactions, Reflect] attribute DOMString integrity;


  // also has obsolete members
};

partial interface HTMLScriptElement {
  [CEReactions, Reflect] attribute DOMString charset;
  [CEReactions, Reflect] attribute DOMString event;
  [CEReactions, Reflect="for"] attribute DOMString htmlFor;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLSelectElement : HTMLElement {
//  [CEReactions] attribute DOMString autocomplete;
  [CEReactions, Reflect] attribute boolean autofocus;
  [CEReactions, Reflect] attribute boolean disabled;
  readonly attribute HTMLFormElement? form;
  [CEReactions, Reflect] attribute boolean multiple;
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect] attribute boolean required;
  [CEReactions, Reflect] attribute unsigned long size;

  readonly attribute DOMString type;

  [SameObject] readonly attribute HTMLOptionsCollection options;
  [CEReactions] attribute unsigned long length;
  [WebIDL2JSValueAsUnsupported=_null] getter Element? item(unsigned long index);
  HTMLOptionElement? namedItem(DOMString name);
  [CEReactions] undefined add((HTMLOptionElement or HTMLOptGroupElement) element, optional (HTMLElement or long)? before = null);
//  [CEReactions] undefined remove(); // ChildNode overload
//  [CEReactions] undefined remove(long index);
  [CEReactions] setter undefined (unsigned long index, HTMLOptionElement? option);

  [SameObject] readonly attribute HTMLCollection selectedOptions;
  attribute long selectedIndex;
  attribute DOMString value;

  readonly attribute boolean willValidate;
  readonly attribute ValidityState validity;
  readonly attribute DOMString validationMessage;
  boolean checkValidity();
  boolean reportValidity();
  undefined setCustomValidity(DOMString error);

  readonly attribute NodeList labels;
};




[Exposed=Window,
 HTMLConstructor]
interface HTMLSourceElement : HTMLElement {
  [CEReactions, ReflectURL] attribute USVString src;
  [CEReactions, Reflect] attribute DOMString type;
  [CEReactions, Reflect] attribute USVString srcset;
  [CEReactions, Reflect] attribute DOMString sizes;
  [CEReactions, Reflect] attribute DOMString media;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLSpanElement : HTMLElement {};


// https://html.spec.whatwg.org/#htmlstyleelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLStyleElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString media;

  // also has obsolete members
};
// https://drafts.csswg.org/cssom/#the-linkstyle-interface
// HTMLStyleElement includes LinkStyle;

// https://html.spec.whatwg.org/#HTMLStyleElement-partial
partial interface HTMLStyleElement {
  [CEReactions, Reflect] attribute DOMString type;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLTableCaptionElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLTableCaptionElement {
  [CEReactions, Reflect] attribute DOMString align;
};


// https://html.spec.whatwg.org/multipage/tables.html#htmltablecellelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLTableCellElement : HTMLElement {
  [CEReactions] attribute unsigned long colSpan;
  [CEReactions] attribute unsigned long rowSpan;
  [CEReactions, Reflect] attribute DOMString headers;
  readonly attribute long cellIndex;

  [CEReactions] attribute DOMString scope; // only conforming for th elements
  [CEReactions, Reflect] attribute DOMString abbr;  // only conforming for th elements

  // also has obsolete members
};

// https://html.spec.whatwg.org/multipage/obsolete.html#HTMLTableCellElement-partial
partial interface HTMLTableCellElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect] attribute DOMString axis;
  [CEReactions, Reflect] attribute DOMString height;
  [CEReactions, Reflect] attribute DOMString width;

  [CEReactions, Reflect="char"] attribute DOMString ch;
  [CEReactions, Reflect="charoff"] attribute DOMString chOff;
  [CEReactions, Reflect] attribute boolean noWrap;
  [CEReactions, Reflect] attribute DOMString vAlign;

  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString bgColor;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLTableColElement : HTMLElement {
  [CEReactions, Reflect] attribute unsigned long span; // TODO: limited to only non-negative numbers greater than zero

  // also has obsolete members
};

partial interface HTMLTableColElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect="char"] attribute DOMString ch;
  [CEReactions, Reflect="charoff"] attribute DOMString chOff;
  [CEReactions, Reflect] attribute DOMString vAlign;
  [CEReactions, Reflect] attribute DOMString width;
};


// https://html.spec.whatwg.org/multipage/tables.html#htmltableelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLTableElement : HTMLElement {
  [CEReactions] attribute HTMLTableCaptionElement? caption;
  HTMLTableCaptionElement createCaption();
  [CEReactions] undefined deleteCaption();

  [CEReactions] attribute HTMLTableSectionElement? tHead;
  HTMLTableSectionElement createTHead();
  [CEReactions] undefined deleteTHead();

  [CEReactions] attribute HTMLTableSectionElement? tFoot;
  HTMLTableSectionElement createTFoot();
  [CEReactions] undefined deleteTFoot();

  [SameObject] readonly attribute HTMLCollection tBodies;
  HTMLTableSectionElement createTBody();

  [SameObject] readonly attribute HTMLCollection rows;
  HTMLTableRowElement insertRow(optional long index = -1);
  [CEReactions] undefined deleteRow(long index);

  // also has obsolete members
};

// https://html.spec.whatwg.org/multipage/obsolete.html#HTMLTableElement-partial
partial interface HTMLTableElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect] attribute DOMString border;
  [CEReactions, Reflect] attribute DOMString frame;
  [CEReactions, Reflect] attribute DOMString rules;
  [CEReactions, Reflect] attribute DOMString summary;
  [CEReactions, Reflect] attribute DOMString width;

  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString bgColor;
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString cellPadding;
  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString cellSpacing;
};


// https://html.spec.whatwg.org/multipage/tables.html#htmltablerowelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLTableRowElement : HTMLElement {
  readonly attribute long rowIndex;
  readonly attribute long sectionRowIndex;
  [SameObject] readonly attribute HTMLCollection cells;
  HTMLTableCellElement insertCell(optional long index = -1);
  [CEReactions] undefined deleteCell(long index);

  // also has obsolete members
};

// https://html.spec.whatwg.org/multipage/obsolete.html#HTMLTableRowElement-partial
partial interface HTMLTableRowElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect="char"] attribute DOMString ch;
  [CEReactions, Reflect="charoff"] attribute DOMString chOff;
  [CEReactions, Reflect] attribute DOMString vAlign;

  [CEReactions, Reflect] attribute [LegacyNullToEmptyString] DOMString bgColor;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLTableSectionElement : HTMLElement {
  [SameObject] readonly attribute HTMLCollection rows;
  HTMLElement insertRow(optional long index = -1);
  [CEReactions] undefined deleteRow(long index);

  // also has obsolete members
};

partial interface HTMLTableSectionElement {
  [CEReactions, Reflect] attribute DOMString align;
  [CEReactions, Reflect="char"] attribute DOMString ch;
  [CEReactions, Reflect="charoff"] attribute DOMString chOff;
  [CEReactions, Reflect] attribute DOMString vAlign;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLTemplateElement : HTMLElement {
  readonly attribute DocumentFragment content;
};


// https://html.spec.whatwg.org/multipage/form-elements.html#htmltextareaelement
[Exposed=Window,
 HTMLConstructor]
interface HTMLTextAreaElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString autocomplete;
  [CEReactions, Reflect] attribute boolean autofocus;
  [CEReactions] attribute unsigned long cols;
  [CEReactions, Reflect] attribute DOMString dirName;
  [CEReactions, Reflect] attribute boolean disabled;
  readonly attribute HTMLFormElement? form;
  [CEReactions, Reflect] attribute DOMString inputMode;
  [CEReactions, Reflect] attribute long maxLength; // TODO limited to only non-negative numbers
  [CEReactions, Reflect] attribute long minLength; // TODO limited to only non-negative numbers
  [CEReactions, Reflect] attribute DOMString name;
  [CEReactions, Reflect] attribute DOMString placeholder;
  [CEReactions, Reflect] attribute boolean readOnly;
  [CEReactions, Reflect] attribute boolean required;
  [CEReactions] attribute unsigned long rows;
  [CEReactions, Reflect] attribute DOMString wrap;

  readonly attribute DOMString type;
  [CEReactions] attribute DOMString defaultValue;
  [CEReactions] attribute [LegacyNullToEmptyString] DOMString value;
  readonly attribute unsigned long textLength;

  readonly attribute boolean willValidate;
  readonly attribute ValidityState validity;
  readonly attribute DOMString validationMessage;
  boolean checkValidity();
  boolean reportValidity();
  undefined setCustomValidity(DOMString error);

  readonly attribute NodeList labels;

  undefined select();
  attribute unsigned long selectionStart;
  attribute unsigned long selectionEnd;
  attribute DOMString selectionDirection;
  undefined setRangeText(DOMString replacement);
//  undefined setRangeText(DOMString replacement, unsigned long start, unsigned long end, optional SelectionMode selectionMode = "preserve");
  undefined setSelectionRange(unsigned long start, unsigned long end, optional DOMString direction);
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLTimeElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString dateTime;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLTitleElement : HTMLElement {
  [CEReactions] attribute DOMString text;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLTrackElement : HTMLElement {
  [CEReactions, Reflect] attribute DOMString kind; // TODO limited to only known values
  [CEReactions, ReflectURL] attribute USVString src;
  [CEReactions, Reflect] attribute DOMString srclang;
  [CEReactions, Reflect] attribute DOMString label;
  [CEReactions, Reflect] attribute boolean default;

  const unsigned short NONE = 0;
  const unsigned short LOADING = 1;
  const unsigned short LOADED = 2;
  const unsigned short ERROR = 3;
  readonly attribute unsigned short readyState;

//  readonly attribute TextTrack track;
};


[Exposed=Window,
 HTMLConstructor]
interface HTMLUListElement : HTMLElement {
  // also has obsolete members
};

partial interface HTMLUListElement {
  [CEReactions, Reflect] attribute boolean compact;
  [CEReactions, Reflect] attribute DOMString type;
};


// https://html.spec.whatwg.org/multipage/dom.html#htmlunknownelement
[Exposed=Window]
interface HTMLUnknownElement : HTMLElement { };


[Exposed=Window,
 HTMLConstructor]
interface HTMLVideoElement : HTMLMediaElement {
  [CEReactions, Reflect] attribute unsigned long width;
  [CEReactions, Reflect] attribute unsigned long height;
  readonly attribute unsigned long videoWidth;
  readonly attribute unsigned long videoHeight;
  [CEReactions, ReflectURL] attribute USVString poster;
  [CEReactions, Reflect] attribute boolean playsInline;
};
