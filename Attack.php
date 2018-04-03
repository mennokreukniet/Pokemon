<?php

class Attack{
	public $attack;
	public $damage;

	public function __construct($attack, $damage){
		$this->damage = $damage;
		$this->attack = $attack;
	}
}