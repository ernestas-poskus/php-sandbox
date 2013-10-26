<?php

/**
 * Encapsulate the weapons to the Interface
 */

class Axe implements Interface_Weapon
{
	/**
	 * This would be the algorithm part
	 */
	public function damage()
	{
		$total = rand(60, 70);
		return $total;
	}

}