<?php

namespace JeremyDunn;

class Test {

	protected $prop1;

	protected $prop2;

	/**
	 * Constructor
	 *
	 * @param string $prop1
	 * @param string $prop2
	 */
	public function __construct($prop1, $prop2) {
		$this->prop1 = $prop1;
		$this->prop2 = $prop2;
	}
}