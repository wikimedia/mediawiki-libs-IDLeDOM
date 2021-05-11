<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

use Wikimedia\IDLeDOM\Element;

trait CrossOrigin {
	/**
	 * @return ?string
	 */
	public function getCrossOrigin() : ?string {
		'@phan-var Element $this'; /** @var Element $this */
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
		'@phan-var Element $this'; /** @var Element $this */
		if ( $val !== null ) {
			$this->setAttribute( 'crossorigin', $val );
		} else {
			$this->removeAttribute( 'crossorigin' );
		}
	}

}
