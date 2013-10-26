<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/16/13
 * Time: 11:30 AM
 */

require_once 'route.php';
require_once 'src/about.php';
require_once 'src/home.php';
require_once 'src/contact.php';

$route = new route();

$route->add('/', 'Home');
$route->add('/about', 'About');
$route->add('/contact', 'Contact');

var_dump($route);


$route->submit();