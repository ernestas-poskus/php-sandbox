<?php

abstract class Abstract_Character
{

	abstract public function Talk();

	/**
	 * Insert algorithms from the client, They should be objects.
	 */
	public function setWeapon($weapon)
	{
		$this->weapon = $weapon;
	}

	/**
	 * Insert algorithms from the client, They should be objects.
	 */
	public function setArmor($armor)
	{
		$this->armor = $armor;
	}

	/**
	 * Use the Algorithms (Obviously they should be checked if they are set)
	 */
	public function attack()
	{
		if (isset($this->weapon))
		{
			return $this->baseDamage + $this->weapon->damage();
		}
		else
		{
			throw new Exception('You must use setWeapon() function');
		}
	}

	/**
	 * Use the Algorithms (Obviously they should be checked if they are set)
	 */
	public function defend()
	{
		if (isset($this->armor))
		{
			return $this->baseHP + $this->armor->defense();
		}
		else
		{
			throw new Exception('You must use setArmor() function');
		}
	}

	/**
	 * This is just the output to see what we have.
	 */
	public function __toString()
	{
		$output = get_class($this) . ' <i>['. spl_object_hash($this) . ']</i><br />';
		$output .= "Armor: " . get_class($this->armor) . '<br />';
		$output .= "Weapon: " . get_class($this->weapon) . '<br />';
		$output .= "<br /><br />";

		return $output;
	}

}