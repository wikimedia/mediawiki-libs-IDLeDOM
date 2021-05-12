<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait CrossOrigin {
	/**
	 * @return ?string
	 */
	public function getCrossOrigin() : ?string {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		$val = $this->getAttribute( 'crossorigin' );
		if ( $val !== null ) {
			$val = strtr( $val, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz' );
			switch ( $val ) {
				case 'anonymous':
				case 'use-credentials':
					return $val;
				default:
					return 'anonymous';
			}
		}
		return null;
	}

	/**
	 * @param ?string $val
	 */
	public function setCrossOrigin( ?string $val ) : void {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		if ( $val !== null ) {
			$this->setAttribute( 'crossorigin', $val );
		} else {
			$this->removeAttribute( 'crossorigin' );
		}
	}

}
