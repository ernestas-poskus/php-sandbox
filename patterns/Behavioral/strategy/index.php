<?php
/**
* Visit http://jream.com for Video Tutorials :)
*/

include 'Abstract_Character.php';
include 'Abstract_Character/King.php';
include 'Abstract_Character/Knight.php';
include 'Abstract_Character/Queen.php';

include 'Abstract_Character/Weapon/Interface_Weapon.php';
include 'Abstract_Character/Weapon/Axe.php';
include 'Abstract_Character/Weapon/Staff.php';
include 'Abstract_Character/Weapon/Sword.php';

include 'Abstract_Character/Armor/Interface_Armor.php';
include 'Abstract_Character/Armor/Breastplate.php';
include 'Abstract_Character/Armor/Helmet.php';


$king	= new King();
$knight	= new Knight();
$queen	= new Queen();

$king->setWeapon(new Staff());
$king->setArmor(new Breastplate());

$queen->setWeapon(new Sword());
$queen->setWeapon(new Axe());

//$knight->setWeapon();
$knight->setArmor(new Helmet());



echo '<hr />';
echo $king;
echo $king->attack();

echo '<hr />';
echo $queen;
echo $queen->attack();

echo '<hr />';
echo $knight;
echo $knight->attack();










