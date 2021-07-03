<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM;

/**
 * CSSStyleRule
 *
 * @see https://dom.spec.whatwg.org/#interface-cssstylerule
 *
 * @property string $cssText
 * @property CSSRule|null $parentRule
 * @property CSSStyleSheet|null $parentStyleSheet
 * @property int $type
 * @property string $selectorText
 * @property CSSStyleDeclaration $style
 * @phan-forbid-undeclared-magic-properties
 */
interface CSSStyleRule extends CSSRule {
	// Direct parent: CSSRule

	/**
	 * @return string
	 */
	public function getSelectorText() : string;

	/**
	 * @param string $val
	 */
	public function setSelectorText( string $val ) : void;

	/**
	 * @return CSSStyleDeclaration
	 */
	public function getStyle();

}
