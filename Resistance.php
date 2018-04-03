<?php

class Resistance{

	public $energyType;
	public $resistance;

	public function __construct($energyType, $resistance){
		$this->energyType = $energyType;
		$this->resistance = $resistance;
	}
}