<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/15/13
 * Time: 6:54 PM
 */


$numbers = array(3,124,23423,23,4356,6,21,1,4565,6);

$it = new ArrayIterator($numbers);

echo $it->current();
$it->next();
echo $it->current();


