<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait HTMLOrSVGElement {
	/**
	 * @return string
	 */
	public function getNonce() : string {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		return $this->getAttribute( 'nonce' ) ?? '';
	}

	/**
	 * @param string $val
	 */
	public function setNonce( string $val ) : void {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		$this->setAttribute( 'nonce', $val );
	}

}
