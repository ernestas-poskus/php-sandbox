<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/16/13
 * Time: 3:34 PM
 */

/**
 * Pattern Factory method
 *
 * Problem solves: it helps to decouple client code and construct objects for you.
 * i.e. if you need to extend your system with new functionality || add new you only have to change factory class !
 */

interface Shape
{
    public function draw();
}

class rectangle implements Shape
{
    public $x;
    public $y;
    public $width;
    public $height;

    public function draw()
    {
        echo 'Drawing a rectangle' . '<br />';
    }
}

class circle implements Shape
{
    public $x;
    public $y;
    public $width;
    public $height;

    public function draw()
    {
        echo 'Drawing Circle' . '<br />';
    }
}

class triangle implements Shape
{
    public $x;
    public $y;
    public $width;
    public $height;

    public function draw()
    {
        echo 'Triangle Circle' . '<br />';
    }
}

/**
 * Class shapeFactory
 */
class shapeFactory
{
    public function create($type)
    {
        switch ($type) {

            case 'rectangle':
                return new rectangle();
                break;

            case 'circle':
                return new circle();
                break;
            case 'triangle':
                return new circle();
                break;

            default:
                echo 'Shape not found !';
        }
    }
}

$factory = new shapeFactory();
var_dump($factory);

$rect = $factory->create('rectangle');
var_dump($rect);

$rect->draw();

echo '<hr />';

var_dump($factory);

$circle = $factory->create('circle');
var_dump($circle);

$circle->draw();

echo '<hr />';

var_dump($factory);

$triangle = $factory->create('triangle');
var_dump($triangle);

$triangle->draw();











