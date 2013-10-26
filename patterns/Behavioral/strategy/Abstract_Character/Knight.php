<?php

class Knight extends Abstract_Character
{
	public $baseHP = 70;
	public $baseDamage = 70;

	public function __construct()
	{
		$this->weapon = new Staff();
		$this->armor = new Helmet();
	}

	public function Talk()
	{
		"Nayyy, The talking horse!";
	}
}