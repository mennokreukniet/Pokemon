<?php
require_once 'Pokemon.php';
require_once 'Attack.php';
require_once 'Weakness.php';
require_once 'Resistance.php';
require_once 'EnergyType.php'; 

class Charmeleon extends Pokemon{
	public $hitpoints	 = 60;
	public $health		 = 60;

	public function __construct($name){

		$energyType = new EnergyType('Fire');

		$weakness = new Weakness('Water', 2);

		$resistance = new Resistance('Lightning', 10);

		$attacks = array( new Attack('Headbutt', 10), new Attack('Flare', 30) );

		parent::__construct($name, $this->hitpoints, $energyType, $weakness, $attacks, $this->health, $resistance);
	}
}