<?php

// AUTOMATICALLY GENERATED.  DO NOT EDIT.
// Use `composer build` to regenerate.

namespace Wikimedia\IDLeDOM\Helper;

trait ElementContentEditable {
	/**
	 * @return string
	 */
	public function getEnterKeyHint() : string {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		$val = $this->getAttribute( 'enterkeyhint' );
		if ( $val !== null ) {
			$val = strtr( $val, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz' );
			switch ( $val ) {
				case 'enter':
				case 'done':
				case 'go':
				case 'next':
				case 'previous':
				case 'search':
				case 'send':
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
	public function setEnterKeyHint( string $val ) : void {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		$this->setAttribute( 'enterkeyhint', $val );
	}

	/**
	 * @return string
	 */
	public function getInputMode() : string {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		$val = $this->getAttribute( 'inputmode' );
		if ( $val !== null ) {
			$val = strtr( $val, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz' );
			switch ( $val ) {
				case 'none':
				case 'text':
				case 'tel':
				case 'url':
				case 'email':
				case 'numeric':
				case 'decimal':
				case 'search':
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
	public function setInputMode( string $val ) : void {
		'@phan-var \Wikimedia\IDLeDOM\Element $this';
		// @var \Wikimedia\IDLeDOM\Element $this
		$this->setAttribute( 'inputmode', $val );
	}

}
