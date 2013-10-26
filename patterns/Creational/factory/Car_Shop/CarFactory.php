<?php
/**
 * Author: Ernestas Poskus
 * Author URI: www.out13.com
 * LinkedIn: linkedin.com/in/ernestasposkus
 * GitHub: github.com/ernestas-poskus
 * Date: 7/1/13
 * Time: 10:47 PM
 */

/**
 * Adding new Cars is easy
 */
include 'Cars/BMW.php';
include 'Cars/Jeep.php';
include 'Cars/Dodge.php';
include 'Cars/Ford.php';
include 'Cars/Ferrari.php';


class CarFactory
{
    public function create($brand)
    {

        switch ($brand) {
            case 'jeep':
                $this->car = new Jeep();
                break;

            case 'dodge':
                $this->car = new Dodge();
                break;

            case 'ford':
                $this->car = new Ford();
                break;

            case 'ferrari':
                $this->car = new Ferrari();
                break;

            case 'bmw':
                $this->car = new BMW();
                break;

            default:
                echo "No car of this type exists !<br />";
        }

    }

}