<?php

class Pokemon {
	public $name;
	public $energyType;
	public $hitpoints;
	public $weakness;
	public $resistance;
	public $attacks;
	public $health;

	public function __construct($name, $hitpoints, $energyType, $weakness, $attacks, $health, $resistance){
		$this->name       = $name;
		$this->hitpoints  = $hitpoints;
		$this->energyType = $energyType;
		$this->weakness   = $weakness;
		$this->resistance = $resistance;
		$this->attacks	  = $attacks;
		$this->health	  = $health;
	}

    /**
      * Do an attack on pokemon object with Attack object.
	  * @param pokemon $target target of the attack.
	  * @param Attack $attack the actual attack done.
	  */
    public function attack($target, $attack){
    	return $target->defend($this->energyType, $this->attacks[$attack], $this->name);
    }

    /**
      * Defend against attack on pokemon object with Attack object.
	  * @param EnergyType $energyType of attacker.
	  * @param Attack $attack the actual attack done.
	  * @param Name $name the name of the attacker.
	  */    
    public function defend($energyType, $attack, $name){
    	if ($energyType == $this->weakness){
    		$damage = $attack->damage * $this->weakness->multiplier;
    	}elseif($energyType == $this->resistance){
    		$damage = $attack->damage - $this->resistance->resistance;
    	}else{
    		$damage = $attack->damage;
    	}

    	$this->health = $this->health - $damage;

    	return $name . ' used ' . $attack->attack . ' on ' . $this->name . ' dealing ' . $damage . ' damage <br>';
    }
}