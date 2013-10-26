<?php

/**
 * Encapsulate the weapons to the Interface
 */

class Staff implements Interface_Weapon
{
	/**
	 * This would be the algorithm part
	 */
	public function damage()
	{
		$total = rand(10, 20) + $this->magic();
		return $total;
	}

    /**
     * OWR
     *
     * @return int
     */
    public function magic() {
        $magic = 21;
        return $magic;
    }

}