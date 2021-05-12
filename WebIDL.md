# PHP WebIDL Binding

This document describes the PHP WebIDL binding used by IDLeDOM.

Since there does not seem to be an official WebIDL binding for PHP,
this documents the implementation choices that IDLeDOM has made to
map WebIDL names and types to PHP.  Where possible correspondence has
been maintained with the PHP `DOMDocument`/etc classes, although the PHP
`dom` extension classes appear to be an adhoc binding of the `libxml` C
library not a rigorous WebIDL mapping.

## Namespace

All WebIDL interfaces are defined in the namespace
`Wikimedia\IDLeDOM\`.  For example, the WebIDL interface 'Document'
corresponds to the PHP interface `Wikimedia\IDLeDOM\Document`.
A particular implementation of the DOM will implement these interfaces
in a different namespace; for example the implementation of `Document`
might be in a class `Wikimedia\Dodo\Document` which implements
`Wikimedia\IDLeDOM\Document`.

It is expected that users will obtain a `DOMImplementation` object
by some mechanism, and use that to create all concrete DOM objects.
Code which attempts to maintain implementation-independence will
avoid direct references to the particular implementation class,
and instead refer to the IDLeDOM interface.

It is expected that users can use type aliasing (ie, PHP
[`class_alias`](https://www.php.net/manual/en/function.class-alias.php)
to use a compatible DOM implementation—that is, implementations
which adhere to this binding specification but don't inherit from
the IDLeDOM interfaces.

TODO: It is hoped that `class_alias` can also be used to be used to
provide a migration path for code currently using `DOMDocument`, or
to allow code to support either the built-in `DOMDocument` classes
or an `IDLeDOM`-compatible implementation.

## Names

Since PHP has a number of reserved words in the language, identifiers
of PHP constructs corresponding to WebIDL definitions need to be escaped
to avoid conflicts.  There are also reserved method names used
for PHP interfaces like `ArrayAccess` and `Countable` which could
conflict with WebIDL definitions.  Finally, WebIDL properties are turned
into getter and setter methods which share a namespace with WebIDL
operations; this could also produce a conflict.

Conflicts are resolved as follows:

> If the WebIDL name conflicts with a PHP reserved word or other
> previously-assigned name, then the PHP escaped name is the prefix
> `idl_`, followed by the smallest number of underscore (`_`) characters
> needed to avoid a conflict (perhaps zero), followed by the WebIDL name.
> Otherwise there is no conflict, and the PHP escaped name is simply
> the name.

The PHP reserved words include any identifier starting with two
underscores (`__`), which are [reserved in PHP as
magical](https://www.php.net/manual/en/language.oop5.magic.php).  The
keyword `class`, all [predefined
constants](https://www.php.net/manual/en/reserved.constants.php), and
[other reserved
words](https://www.php.net/manual/en/reserved.other-reserved-words.php)
(including soft reserved words) are also reserved.  (Other than
`class` we don't need to reserve the [PHP keywords and compile-time
constants](https://www.php.net/manual/en/reserved.keywords.php)
because starting in PHP 7.0.0 they are allowed as property, constant,
and method names.)

In WebIDL [`dictionary`] types, the following names are also reserved:
`offsetExists`, `offsetGet`, `offsetSet`, and `offsetUnset`. (These
are used to implement [`ArrayAccess`].)

In WebIDL [`callback`] types, the name `invoke` is reserved.  (This name
is not reserved in [`callback interface`] types.)

In WebIDL [`callback`], [`callback interface`], and [`dictionary`] types,
the name `cast` is reserved.

In WebIDL [`interface`] types, the names `getIterator` and `count` are
reserved. (These are used to implement [`IteratorAggregate`] and
[`Countable`].)

If the WebIDL defines an "unnamed" indexed getter, named getter,
indexed setter, named setter, indexed deleter, named deleter, or
stringifier operation, then the names `item`, `namedItem`, `setItem`,
`setNamedItem`, `removeItem`, `removeNamedItem`, or `toString`
(respectively) are reserved.

### Resolution order

When determining the PHP escaped name corresponding to an WebIDL name,
conflicts are resolved in the following order:

1. All reserved names, as described above based on WebIDL type, are
marked unavailable.
2. Names in a [directly
inherited](https://heycam.github.io/webidl/#dfn-inherit) interface or
dictionary are resolved, recursively, and marked unavailable.
3. Names in mixins are resolved recursively, in alphabetic order by mixin
name, and marked unavailable.
4. Enumeration values are resolved and marked unavailable.
5. Constant members are resolved and marked unavailable.
6. Attribute getter and setter names, and dictionary field getter and
setter names, are resolved and marked unavailable.
7. Operation names are resolved and marked unavailable.

Concretely, given the following WebIDL fragment:
```
interface Foo {
  undefined setBat();
}
interface Bar extends Foo {
  const setBat = 0;
  attribute boolean bat;
  // conflicts with inherited members shouldn't occur,
  // but suppose this managed to squeak through and
  // wasn't intended as an override:
  undefined setBat();
}
```
The following names would be assigned and reserved:
* `setBat`: the operation on `Foo`
* `idl_setBat`: the constant on `Bar`
* `getBat`: the getter of attribute `bat` of `Bar`
* `idl__setBat`: the setter of attribute `bat` of `Bar`
* `idl___setBat`: the operation on `Bar`

Note in particular the assymmetry in the names of the getter and setter
on attribute `bat`.  This is unfortunate, but fortunately conflicts such
as these are extremely rare.

## Types

This sub-section describes how types in the WebIDL map to types in PHP.

### any

The [`any`] WebIDL type corresponds to a PHP `?mixed` value.  No boxing of
types is required in PHP.

### undefined

Methods on PHP objects that implement an operation whose WebIDL specifies
a [`undefined`] return type must be declared to have a return type of
`void`.  Other uses of [`undefined`] will be mapped to `null` in PHP.

### boolean

The WebIDL [`boolean`](https://heycam.github.io/webidl/#idl-boolean) type
maps exactly to the PHP
[`bool`](https://www.php.net/manual/en/language.types.boolean.php)
type.

### integer types

The WebIDL `byte`, `octet`, `short`, `unsigned short`, `long` and `unsigned long`
types correspond to the PHP
[`int`](https://www.php.net/manual/en/language.types.integer.php)
type.

Note that while the WebIDL `unsigned long` type is unsigned, with a range
of [0, 4294967295], the PHP `int` type is signed, and on 32-bit
platforms may have a range of [−2147483648, 2147483647].  To encode an
WebIDL `unsigned long` type in a PHP int, the following steps are
followed *on all platforms regardless of the value of `PHP_INT_MAX` on
that platform*:

1. Let `x` be the WebIDL `unsigned long` value to encode.
2. If `x` < 2147483648, return a PHP `int` whose value is `x`.
3. Otherwise `x` ≥ 2147483648. Return a PHP int whose value is `x − 4294967296`.

Note that this is the same as casting to a 32-bit int in most languages.

To decode an WebIDL `unsigned long` value from a PHP `int`, the following
steps must be followed:

1. Let `x` be the PHP int value to decode.
2. If `x` ≥ 0, return an WebIDL `unsigned long` whose value is `x`.
3. Otherwise `x` < 0. Return an WebIDL `unsigned long` whose value is `x + 4294967296`.

Note that in PHP this is the same as performing a bit-wise AND of the
`int` value with the long constant `0xffffffff`.

### `long long`, `unsigned long long`, and `bigint`

The WebIDL `long long`, `unsigned long long`, and `bigint` types map to a PHP
arbitrary-length integer using either the
[GMP](https://www.php.net/manual/en/book.gmp.php) or
[BCMath](https://www.php.net/manual/en/book.bc.php).  Precise details
will be determined when there is need.

### floating point types

The WebIDL `float`, `unrestricted float`, `double`, and `unrestricted
double` types map to the PHP `float` type.

### `sequence<T>`

The WebIDL `sequence<T>` type corresponds to a PHP array, with elements
having the appropriate mapped type for `T`.  In PHP type hints, the
type will be
[`array`](https://www.php.net/manual/en/language.types.array.php), and
in [phan](https://github.com/phan/phan/wiki) type annotations, the
type will be
[`list<T>`](https://github.com/phan/phan/wiki/About-Union-Types),
which denotes a list of objects with consecutive integer keys starting
from 0.

A PHP object implementing an interface with an operation declared to
return a `sequence<T>` value must not return `null` from the
corresponding method. Similarly, a getter method for an WebIDL attribute
must not return `null` if the attribute is declared to be of type
`sequence<T>`.

### `sequence<octet>` and `sequence<unsigned short>`

As a special case, WebIDL `sequence<octet>` and `sequence<unsigned
short>` are represented by PHP
[string](https://www.php.net/manual/en/language.types.string.php) in
ASCII and UTF-16 encodings, respectively.  As with other `sequence`
types, `null` is not a valid value of these WebIDL types.

TODO: No DOM interface yet uses these types.

### DOMString, ByteString, USVString

PHP uses `string` for all string types.

TODO: describe encoding conversions, if any.  DOMString is used for almost
all DOM interfaces, except for URL which uses USVString.

### object

The WebIDL [`object`] type maps to the PHP [`object`
type](https://www.php.net/manual/en/language.types.object.php).

### symbol

The WebIDL [`symbol`] type is not supported.

### Enumeration types

WebIDL [enumeration](https://heycam.github.io/webidl/#idl-enums) types
correspond to the PHP `int` type.  (There is a PHP interface created
to hold the enumeration values as class constants, but enumeration
values are `int`s, not objects implementing this interface.)

See the [section on Enumeration interfaces below](#enumeration-interfaces).

## Objects implementing interfaces

A PHP object that implements an WebIDL [interface] must be of a PHP class
that implements the PHP interface that corresponds to the WebIDL
interface.

## Interfaces

Every WebIDL interface corresponds to a PHP interface, with the
following members:

### Constants

For each [constant](https://www.w3.org/TR/WebIDL-1/#idl-constants) defined
on the WebIDL [interface], there is a corresponding
PHP class constant:

* The constant has `public` visibility.
* The type is the PHP type that corresponds to the type of the constant,
  as defined in the [type section above].
* The name is the [PHP escaped] [identifier] of the constant.
* The value is the PHP value that is equivalent to the constant's WebIDL
  value, as defined in the [type section above].

### Operations

For each [operation] defined on the WebIDL [interface], there must be a
corresponding method declared on the PHP interface with the following
properties:

* The method has `public` visibility.
* The return type of the method is the PHP type that corresponds to
  the operation [return
  type](https://heycam.github.io/webidl/#dfn-return-type), according
  to the [type section above].
* The name of the method is the [PHP escaped] [identifier] of the
  operation.
* The method has an argument for each argument on the operation, with
  PHP types corresponding to the type of each WebIDL argument type as
  defined in the [type section above].  PHP [variable-length argument
  lists](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list)
  will be used where the WebIDL method argument uses the Variadic
  extended attribute.
* Type hints shall be used for arguments and return values, except for
  types corresponding to DOM interfaces.  This provides
  flexibility in the face of PHP 7's weak covariance/contravariance
  support and avoids expensive runtime type checks against interface types.

Interfaces with an [`iterable`] member defined shall extend
[`IteratorAggregate`] and define a `getIterator` method which implements
the `iterable` member (if unnamed) or dispatches to the `iterable`
member (if named).

XXX: WebIDL interfaces with a [pair
iterator](https://heycam.github.io/webidl/#dfn-pair-iterator) are not
yet supported.

Interfaces with a [`stringifier`] member defined will implement the
PHP magic method [`__toString()`], which implements the [stringification
behavior](https://heycam.github.io/webidl/#dfn-stringification-behavior)
of the interface (if unnamed) or dispatches to the [`stringifier`]
member (if named).

Interfaces with either a [*named property
getter*](https://heycam.github.io/webidl/#dfn-named-property-getter),
[*indexed property
getter*](https://heycam.github.io/webidl/#dfn-indexed-property-getter),
[*named property
setter*](https://heycam.github.io/webidl/#dfn-named-property-setter),
[*indexed property
getter*](https://heycam.github.io/webidl/#dfn-indexed-property-getter),
or [*named property
deleter*](https://heycam.github.io/webidl/#dfn-named-property-deleter)
shall extend [`ArrayAccess`].  The `ArrayAccess` methods will dispatch
to the *named property getter*/*named property setter*/*named property
deleter* if the given offset
[`is_string`](https://www.php.net/manual/en/function.is-string.php),
and will dispatch to the *indexed property getter*/*indexed property
setter* if the offset
[`is_numeric`](https://www.php.net/manual/en/function.is-numeric.php).
Otherwise behavior is undefined, but implementations should throw an
exception.

WebIDL interfaces often contain a `readonly attribute unsigned long
length` member.  In combination with an *indexed property getter*, the
presence of a `length` property is sufficient to make the interface an
["array-like"](https://tc39.es/ecma262/#sec-lengthofarraylike) in
JavaScript, usable in a number of array contexts including
[for...of](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/for...of)
loops.  These members have been tagged in our WebIDL with the
(nonstandard) `[PHPCountable]` extended attribute.  Interfaces
containing a `[PHPCountable]` member shall extend the PHP
[`Countable`] interface, and `Countable::count()` shall invoke the
getter for the `[PHPCountable]` member and return the result.

Interfaces which have a *indexed property getter* and a
`[PHPCountable]` member should be iterable, as an "array-like" would
be in JavaScript.  Therefore these interfaces shall have a unnamed
[`iterable`] member; these additional members added in the PHP binding
have been tagged in our WebIDL with the (nonstandard) `[PHPExtension]`
extended attribute.

### Attributes

For each [attribute] defined on the WebIDL [interface], there shall be a
corresponding *getter method* declared on the PHP interface with the
following properties:

* The method has `public` visibility.
* The return type of the method is the PHP type that corresponds to
  the attribute type, according to the rules in the [type section
  above].
* Type hints on the return value will be used, except for types
  corresponding to DOM interfaces (as described in the "operations"
  section above).
* The "WebIDL name" of the method is `get`, followed by the first
  character of the [identifier] of the attribute uppercased (as if
  the identifier were passed to the
  [`ucfirst`](https://www.php.net/manual/en/function.ucfirst)
  function).  This name is then [PHP escaped] to resolve conflicts.
* The method has no arguments.

For each [attribute] defined on the WebIDL [interface] that is not [read
only], there shall be a corresponding *setter method* declared on the
PHP interface with the following properties:

* The method has `public` visibility.
* The return type of the method is `void`.
* The "WebIDL name" of the method is `set`, followed by the first
  character of the [identifier] of the attribute uppercased (as if
  the identifier were passed to the
  [`ucfirst`](https://www.php.net/manual/en/function.ucfirst)
  function).  This name is then [PHP escaped] to resolve conflicts.
* The method has a single argument whose type is the PHP type that
  corresponds to the attribute type, according to the rules in the
  [type section above].
* Type hints on the argument will be used, except for types
  corresponding to DOM interfaces (as described in the "operations"
  section above).

For each [attribute] defined on the WebIDL [interface] that is [read
only] and is declared with the [`PutForwards`] [extended attribute],
there shall be a corresponding setter method declared on the PHP
interface with the following properties:

* The method has `public` visibility.
* The return type of the method is `void`.
* The "WebIDL name" of the method is `set`, followed by the first
  character of the [identifier] of the attribute uppercased (as if
  the identifier were passed to the
  [`ucfirst`](https://www.php.net/manual/en/function.ucfirst)
  function).  This name is then [PHP escaped] to resolve conflicts.
* The method has a single argument whose type is the PHP type that
  corresponds to the type of the attribute identified by the
  [`PutForwards`] extended attribute on the interface type that this
  attribute is declared to be of, according to the rules in the [type
  section above].
* Type hints on the argument will be used, except for types
  corresponding to DOM interfaces (as described in the "operations"
  section above).

#### Reflected attributes

Certain IDL attributes are defined in the relevant specifications to
reflect the value of Element attributes. These do not affect the
interface declaration of the IDL attribute. Since implementation
details are out-of-scope for this document, we will briefly note that
IDLeDOM uses extended attributes named `[Reflect]`, `[ReflectURL]`,
`[ReflectEnum]`, `[ReflectDefault]`, `[ReflectMissing]`, and
`[ReflectInvalid]` in the IDL specification to guide the automatic
creation of getter and setter methods for reflected attributes.

#### Attribute compatibility

In every interface with attributes, the PHP [magic
methods](https://www.php.net/manual/en/language.oop5.magic.php)
[`__get()`], [`__set()`], [`__isset()`], and [`__unset()`] should be defined
with the following behavior:
* The `__get($name)` method should invoke the
PHP getter method for `$name` and return the result.
* The `__set($name, $value)` method should invoke the PHP setter method
for `$name`, unless the attribute is declared [read only]
in which case an appropriate exception should be thrown.
* The `__isset($name)` method should invoke `__get($name)` and return `false`
if the value returned is `null`, or `true` otherwise.
* The `__unset($name)` method should invoke `__set($name, null)`.

The behavior of [`__get()`] and [`__set()`] if `$name` is not a valid
attribute of the interface is undefined.  Implementations may elect to
throw an exception, or else to permit creation of dynamic properties
by storing and fetching values indexed by these names in an auxiliary
array.

XXX: should we be specific here and choose one behavior?

XXX: perhaps a 'standard' extension point should be provided as well?

*The use of these compatibility methods is not recommended in
performance-critical code*.  They are provided to provide
compatibliity with existing code written to use the built-in
`DOMDocument` interface and for the convenience of using property
syntax, but the invocation of magic methods has a steep performance
cost in PHP.

XXX: ensure that there is no cost associated with simply *defining* the
magic methods, even if they are not used.

## Dictionaries

WebIDL [`dictionary`] objects are PHP interfaces which extend one other
PHP interface: dictionaries which directly inherit from another dictionary
will extend the PHP interface corresponding to that inherited
dictionary, and dictionaries with no inherited dictionaries shall
extend the PHP [`ArrayAccess`] interface.

Dictionary interfaces shall have getter methods for every field of the
dictionary:
* The method has `public` visibility.
* The return type of the method is the PHP type that corresponds to
  the field type, according to the rules in the [type section
  above].
* Type hints on the return value will be used, except for types
  corresponding to DOM interfaces (as described in the "operations"
  section above).
* The "WebIDL name" of the method is `get`, followed by the first
  character of the [identifier] of the field name uppercased (as if
  the identifier were passed to the
  [`ucfirst`](https://www.php.net/manual/en/function.ucfirst)
  function).  This name is then [PHP escaped] to resolve conflicts.
* The method has no arguments.

In every interface corresponding to a dictionary, the PHP [magic
methods](https://www.php.net/manual/en/language.oop5.magic.php)
[`__get()`] and [`__isset()`] (and optionally [`__set()`] and [`__unset()`])
should be defined with the following behavior:
* The `__get($name)` method should invoke the
  PHP getter method for the field `$name` and return the result.
* The `__set($name, $value)` method should throw an appropriate exception
  (if `__set()` is defined).
* The `__isset($name)` method should invoke `__get($name)` and return `false`
  if the value returned is `null`, or `true` otherwise.
* The `__unset($name)` method should throw an appropriate exception
  (if `__unset()` is defined).

The [`ArrayAccess`] methods of a dictionary should have the following behavior:
* The `offsetExists` method should return `true` iff the dictionary has a
  field with the given WebIDL name (no PHP escaping is done on the name).
* The `offsetGet` method should invoke the PHP getter method for the
  named field and return the result.
* The `offsetSet` method should throw an appropriate exception.
* The `offsetUnset` method should throw an appropriate exception.

In addition, classes implementing the interface should define a static
method named `cast` with a single argument:
* The `cast` method should return an object implementing the interface
  corresponding to the dictionary.
* The argument of the `cast` method should be either an associative array
  or an object implementing the interface corresponding to the dictionary.
* If invoked with an argument implementing the interface corresponding to
  the dictionary, the argument should be directly returned.
* If invoked with an associative array, an object implementing the interface
  corresponding to the dictionary should be returned, where the getter for
  each field returns the array value associated with the key equal to the
  field's WebIDL name (not PHP escaped) if there is one, otherwise the getter
  should return the field's default value.

## Callbacks and Callback Interfaces

WebIDL [`callback`] objects shall be treated as if they were
[`callback interface`]s with a single regular operation member named
`invoke`.

A [`callback interface`] shall correspond to a PHP interface with
constant and operation members as defined above for [`interface`]
types.

In addition, the PHP interface corresponding to a [`callback
interface`] shall define the PHP magic method [`__invoke()`].  This
magic method shall invoke the single regular operation of the
[`callback interface`] with the same arguments it is given, and return
the result.  (This ensure that the `callback interface` is a PHP
[callable].)

In addition, classes implementing the interface shall define a static
method named `cast` with a single argument:
* The `cast` method shall return an object implementing the interface
  corresponding to the `callback interface`.
* The argument of the `cast` method should be either a PHP [callable]
  or an object implementing the PHP interface corresponding to the
  `callback interface`.
* If invoked with an argument implementing the interface corresponding to
  the `callback interface`, the argument shall be directly returned.
* If invoked with a PHP [callable], an object implementing the interface
  corresponding to the `callback interface` shall be returned, where
  invoking the single regular operation of the `callback interface` will
  invoke the [callable] with the same arguments, and return the result.

## Enumeration interfaces

WebIDL [enumerations](https://heycam.github.io/webidl/#idl-enums)
shall correspond to a PHP interface with an integer constant for every
enumeration value.

For each enumeration value:
* The constant shall have `public` visibility.
* The type shall be the PHP `int` type.
* The name shall be the [PHP escaped] [identifier] of the enumeration value.
* The value should be zero-based and sequential, in the same order as the
  enumeration values appear in the WebIDL declaration.

For example, the following WebIDL:
```
enum ShadowRootMode { "open", "closed" };
```
corresponds to the PHP interface:
```
interface ShadowRootMode {
	public const open = 0;
	public const closed = 1;
}
```

XXX: Consider using 'string' to represent enumerations, instead of
'int', which might be more compatible with JavaScript usage, and/or
using a "real" Java-style enumeration object, with helpers to coerce
strings to enumeration objects.

## Exceptions

A conforming PHP implementation must have a PHP class corresponding to
every [WebIDL exception] that is supported, whose name is the [PHP escaped]
[identifier] of the WebIDL exception.

The PHP class must have only the `public` modifier, and be declared to extend
the PHP base class `Exception`.

### Exception constants

For each [constant] defined on the [enclosing module] of the [WebIDL
exception], where that module has been declared with the
`[ExceptionConsts]` [extended attribute], there must be a
corresponding constant declared on the PHP class with the following
properties:

* The constant has `public` visibility.
* The type of the constant is the PHP type that corresponds to the
  type of the WebIDL constant, according to the rules in the [type
  section above].
* The name of the constant is the [PHP escaped] [identifier] of the
  constant.
* The value of the constant is the PHP value that is equivalent to the
  constant’s WebIDL value, according to the rules in the [type section
  above].

### Exception members

For each [exception member] defined on the [WebIDL exception], there must
be a corresponding instance variable declared on the PHP class with
the following properties:

* The instance variable has `public` visibility.
* The type of the instance variable is the PHP type that corresponds
  to the type of the WebIDL exception member, according to the rules in
  the [type section above].
* The name of the instance variable is the [PHP escaped] [identifier]
  of the exception member.
* The instance variable is not declared with an initializer.

# Compatibility

IDL interfaces, mixins, attributes, or operations which occur in IDLeDOM
for PHP interoperability or compatibility with PHP's built-in `DOMDocument`
classes have been marked with the extended attribute `[PHPExtension]`.

PHP contains a writeable `encoding` attribute on the `Document` interface
in the definition of the built-in `DOMDocument`.  We have copied that
non-standard attribute to our IDL for Document.

XXX: In this section we should describe some specific differences between
the binding as described above, and the names resulting from the
`DOMDocument` classes, on one hand, and the JavaScript binding, on the
other.

[PHP escaped]: #names
[`dictionary`]: https://heycam.github.io/webidl/#idl-dictionaries
[`callback`]: https://heycam.github.io/webidl/#idl-callback-functions
[`callback interface`]: https://heycam.github.io/webidl/#idl-callback-interfaces
[`interface`]: https://heycam.github.io/webidl/#idl-interfaces
[`iterable`]: https://heycam.github.io/webidl/#idl-iterable
[`stringifier`]: https://heycam.github.io/webidl/#idl-stringifiers
[`ArrayAccess`]: https://www.php.net/manual/en/class.arrayaccess.php
[`Countable`]: https://www.php.net/manual/en/class.countable.php
[`IteratorAggregate`]: https://www.php.net/manual/en/class.iteratoraggregate.php
[`any`]: https://heycam.github.io/webidl/#idl-any
[`undefined`]: https://heycam.github.io/webidl/#idl-undefined
[`object`]: https://heycam.github.io/webidl/#idl-object
[`symbol`]: https://heycam.github.io/webidl/#idl-symbol
[type section above]: #types
[operation]: https://www.w3.org/TR/WebIDL-1/#idl-operations
[identifier]: https://www.w3.org/TR/WebIDL-1/#idl-names
[interface]: https://www.w3.org/TR/WebIDL-1#idl-interfaces
[attribute]: https://www.w3.org/TR/WebIDL-1/#idl-attributes
[WebIDL exception]: https://www.w3.org/TR/WebIDL-1/#idl-exceptions
[read only]: https://www.w3.org/TR/WebIDL-1/#dfn-read-only
[extended attribute]: https://www.w3.org/TR/WebIDL-1/#dfn-extended-attribute
[`PutForwards`]: https://www.w3.org/TR/WebIDL-1/#PutForwards
[constant]: https://www.w3.org/TR/WebIDL-1/#dfn-constant
[exception member]: https://www.w3.org/TR/WebIDL-1/#exception-member
[callable]: https://www.php.net/manual/en/language.types.callable.php
[`__get()`]: https://www.php.net/manual/en/language.oop5.magic.php#object.get
[`__set()`]: https://www.php.net/manual/en/language.oop5.magic.php#object.set
[`__isset()`]: https://www.php.net/manual/en/language.oop5.magic.php#object.isset
[`__unset()`]: https://www.php.net/manual/en/language.oop5.magic.php#object.unset
[`__invoke()`]: https://www.php.net/manual/en/language.oop5.magic.php#object.invoke
[`__toString()`]: https://www.php.net/manual/en/language.oop5.magic.php#object.tostring
