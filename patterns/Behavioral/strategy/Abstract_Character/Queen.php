<?php

class Queen extends Abstract_Character
{
	public $baseHP = 150;
	public $baseDamage = 150;

	public function __construct()
	{
		$this->weapon = new Axe();
		$this->armor = new Breastplate();
	}

	public function Talk()
	{
		"Eep! I need my nails done, the Royal Queen!";
	}
}