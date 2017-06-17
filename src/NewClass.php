<?php

namespace JeremyDunn;

class NewClass
{
	protected $date;

	public function __construct() {
		$this->date = new \DateTime();
	}

	/**
	 * Get Date
	 *
	 * @return \DateTime
	 */
	public function getDate()
	{
		return $this->date;
	}

}