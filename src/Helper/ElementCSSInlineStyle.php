<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait ElementCSSInlineStyle {
	/**
	 * @param string $val
	 */
	public function setStyle( string $val ) : void {
		'@phan-var \Wikimedia\IDLeDOM\ElementCSSInlineStyle $this';
		// @var \Wikimedia\IDLeDOM\ElementCSSInlineStyle $this
		$this->getStyle()->setCssText( $val );
	}

}
