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
