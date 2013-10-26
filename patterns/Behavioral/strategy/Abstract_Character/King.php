<?php

class King extends Abstract_Character
{
	public $baseHP = 100;
	public $baseDamage = 100;

	public function __construct()
	{
		$this->weapon = new Axe();
		$this->armor = new Breastplate();
	}

	public function Talk()
	{
		"Har, Har, I am the King!";
	}

}