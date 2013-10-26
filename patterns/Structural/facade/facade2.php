<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/16/13
 * Time: 4:48 PM
 */

/***
 * Facade - def: 1. The front of building, esp. an imposing or decorative one.
 *              2. a superficial appearance or illusion of something
 * - Class that simplifies block of coding
 *
 *
 * Problem solves - simplifies an interface (not necessarily changes it)
 */

//
//Connects to some Database
class database
{
    public function getQuery()
    {
        $af = __CLASS__ . ' ' . 'Here is your query' . '<br />';
        echo $af;
        return $af;
    }
}

//
//Generates an HTML/Template View
class template
{
    public function __construct($id, $data)
    {

        echo __CLASS__ . ' ' . $id . ' = ' . $data;
    }
}

//
//Logs some message to logger file || db
class logger
{
    public function log($str)
    {
        echo __CLASS__ . ' ' . $str . '<br />';
    }
}

$id = 23;

/**
 * Class pageFacade - like an object constructor (encapsulates code login)
 *
 */
class pageFacade
{
    public function create($id, $msg = '')
    {
        $db = new database();
        $data = $db->getQuery();
        $template = new template($id, $data);
        $logger = new logger();
        $logger->log('My log message');
    }
}

$page = new pageFacade();
$page->create(22, '{My String}');
