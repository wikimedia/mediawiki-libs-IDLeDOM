<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait ReferrerPolicy {
	/**
	 * @return string
	 */
	public function getReferrerPolicy() : string {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		$val = $this->getAttribute( 'referrerpolicy' );
		if ( $val !== null ) {
			$val = strtr( $val, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz' );
			switch ( $val ) {
				case '':
				case 'no-referrer':
				case 'no-referrer-when-downgrade':
				case 'same-origin':
				case 'origin':
				case 'strict-origin':
				case 'origin-when-cross-origin':
				case 'strict-origin-when-cross-origin':
				case 'unsafe-url':
					return $val;
				default:
					return '';
			}
		}
		return '';
	}

	/**
	 * @param string $val
	 */
	public function setReferrerPolicy( string $val ) : void {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		$this->setAttribute( 'referrerpolicy', $val );
	}

}
