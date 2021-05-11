# IDLeDOM x.x.x (not yet released)
* Add interfaces for HTML IDL, in particular the HTML*Element classes.
* Support "unnamed" getter/setters/deleters/stringifiers.
* Return return types for cast() helper methods, in order to accommodate
  the weak covariant return type checks in PHP 7.2.
* Generate helper functions for attributes with the [Reflect] extended
  attribute (which reflect an HTML element attribute).

# IDLeDOM 0.3.0 (2021-04-12)
* Use interface (instead of class) for enumerations.  This allows
  DOM implementations to easily define a class implementing the interface
  to bring the constants into the implementation's namespace.
* The helper traits now define __isset() and __unset() for appropriate
  interfaces and dictionaries.
* Support the [LegacyNullToEmptyString] extended attribute, by broadening
  type to allow `null` where appropriate.

# IDLeDOM 0.2.0 (2021-02-12)
* Strip explicit PHP type hints for DOM interface types, in order to
  accomodate the weak covariant/contravariance checks in PHP 7.2.
* Make NodeList, HTMLCollection, NamedNodeMap, and DOMTokenList
  implement \Countable so they can be used with the PHP `count()` function.
* Add an `iterable` to HTMLCollection and NamedNodeMap so they can be
  used in a PHP `foreach` statement, like the built-in \DOMNamedNodeMap.
* Stubs are now standalone (don't stub out methods from parent interfaces),
  and don't declare abstract methods (these were shadowing inherited method
  from superclasses).

# IDLeDOM 0.1.1 (2021-02-11)
* Replace HTMLSlotElement/EventHandler/DOMHighRestTimeStamp stubs with
  proper definitions.
* Replace stub method to ::_unimplemented() to avoid DOM name conflicts.

# IDLeDOM 0.1.0 (2021-02-10)
Initial release.
