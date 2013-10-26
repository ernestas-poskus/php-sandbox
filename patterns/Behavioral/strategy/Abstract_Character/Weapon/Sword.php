<?php

/**
 * Encapsulate the weapons to the Interface
 */

class Sword implements Interface_Weapon
{
	/**
	 * This would be the algorithm part
	 */
	public function damage()
	{
		$total = rand(40, 60);
		return $total;
	}

}