<?php

namespace Wikimedia\IDLeDOM\Tools;

use Wikimedia\Assert\Assert;

class Emitter {
	/** @var string */
	private $out = '';
	/** @var int */
	private $indentLevel = 0;
	/** @var bool */
	private $wasNL = false;
	/** @var ?string */
	private $partial = null;

	/** Create a new emitter */
	public function __construct() {
	}

	/**
	 * Add some text to the output, not terminated by a newline.
	 * @param string $partial
	 */
	public function p( string $partial ): void {
		if ( $this->partial === null ) {
			$this->partial = '';
		}
		$this->partial .= $partial;
	}

	/**
	 * Add a line of text to the output, terminated by a newline.
	 * @param string $line
	 */
	public function nl( string $line = '' ): void {
		if ( $this->partial !== null ) {
			$line = $this->partial . $line;
			$this->partial = null;
		}
		if ( strpos( $line, "\n" ) !== false ) {
			// Not recommended to include literal newlines in $line!
			foreach ( explode( "\n", $line ) as $s ) {
				$this->nl( $s );
			}
			return;
		}
		if ( $line === '}' ) {
			$this->indentLevel -= 1;
		}
		if ( preg_match( '/^\s*$/', $line ) ) {
			if ( !$this->wasNL ) {
				$this->out .= "\n";
				$this->wasNL = true;
			}
		} else {
			$this->out .= str_repeat( "\t", $this->indentLevel ) . $line . "\n";
			$this->wasNL = false;
		}
		if ( substr( $line, -1 ) === '{' ) {
			$this->indentLevel += 1;
		}
	}

	/**
	 * Helper method, generate a standard PHP prologue.
	 * @param string $namespace
	 */
	public function phpPrologue( string $namespace ) {
		$this->nl( '<?php' );
		$this->nl();
		$this->nl( '// AUTOMATICALLY GENERATED.  DO NOT EDIT.' );
		$this->nl( '// Use `composer build` to regenerate.' );
		$this->nl();
		$this->nl( "namespace $namespace;" );
		$this->nl();
	}

	/**
	 * Return the value of the emitter.
	 * @return string
	 */
	public function __toString(): string {
		Assert::invariant( $this->partial === null, "Unflushed partial" );
		return $this->out;
	}
}
