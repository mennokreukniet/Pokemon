<?php
require_once 'Pokemon.php';
require_once 'Attack.php';
require_once 'Weakness.php';
require_once 'Resistance.php';
require_once 'EnergyType.php'; 

class Pikachu extends Pokemon{
	public $hitpoints	 = 60;
	public $health		 = 60;

	public function __construct($name){

		$energyType = new EnergyType('Lightning');

		$weakness = new Weakness('Fire', 1.5);

		$resistance = new Resistance('Fighting', 20);

		$attacks = array( new Attack('Electric Ring', 50), new Attack('Pika Punch', 20) );

		parent::__construct($name, $this->hitpoints, $energyType, $weakness, $attacks, $this->health, $resistance);
	}
}