<?php
/**
 * Author: Ernestas Poskus
 * Author URI: www.out13.com
 * LinkedIn: linkedin.com/in/ernestasposkus
 * GitHub: github.com/ernestas-poskus
 * Date: 7/1/13
 * Time: 10:27 PM
 */

/**
 * Factory pattern
 *
 * @Problem solves: it allows you to instantiate/create new class/method on request.
 * Lets extend your system further without much change of existing functionality.
 *
 * @Pros:
 *  - Makes extending (adding new functionality) easy
 *  - Enables to use inheritance and polymorphism
 *  - Encapsulates creation of new "products"
 *
 * @Cons:
 *  - Mirrors code hierarchy
 *  - Encourages unnecessary sub-classing
 *  - "Special kind" of code duplication
 *
 * @Usually used:
 *  - Everywhere.
 */

@include 'Car_Shop/CarFactory.php';


class CarStore
{

    public function __construct()
    {
        $this->CarFactory = new CarFactory();
    }

    public function buyCar($brand)
    {

        $this->CarFactory->create($brand);

        $this->fillGas();
        $this->washCar();

    }

    public function fillGas()
    {
        echo "You filled up the gas.<br />";
    }

    public function washCar()
    {
        echo "You washed the car<br />";
    }
}


$customer1 = new CarStore();
$customer1->buyCar('jeep');

echo '<hr />';

$customer2 = new CarStore();
$customer2->buyCar('bmw');

echo '<hr />';

$customer3 = new CarStore();
$customer3->buyCar('ferrari');







