[![Latest Stable Version]](https://packagist.org/packages/wikimedia/idle-dom) [![License]](https://packagist.org/packages/wikimedia/idle-dom)

IDLeDOM
=====================

IDLeDOM is a set of PHP interfaces for the WHATWG DOM spec
automatically generated from the WebIDL sources in the spec.

Additional documentation about the library can be found on
[MediaWiki.org](https://www.mediawiki.org/wiki/IDLeDOM).


Usage
-----

To regenerate the interfaces in `src/` from the WebIDL sources in `spec/`:

    composer build


Running tests
-------------

    composer install --prefer-dist
    composer test


---
[Latest Stable Version]: https://poser.pugx.org/wikimedia/idle-dom/v/stable.svg
[License]: https://poser.pugx.org/wikimedia/idle-dom/license.svg

