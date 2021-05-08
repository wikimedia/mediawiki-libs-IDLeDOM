<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;

trait HTMLOrSVGElement {
	/**
	 * @return string
	 */
	public function getNonce() : string {
		'@phan-var Element $this'; /** @var Element $this */
		return $this->getAttribute( 'nonce' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setNonce( string $val ) : void {
		'@phan-var Element $this'; /** @var Element $this */
		$this->setAttribute( 'nonce', $val );
	}

}
