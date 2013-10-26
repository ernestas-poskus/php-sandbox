<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/15/13
 * Time: 2:46 PM
 */

/***
 * Facade - def: 1. The front of building, esp. an imposing or decorative one.
 *              2. a superficial appearance or illusion of something
 * - Class that simplifies block of coding
 *
 *
 * Problem solves - simplifies an interface (not necessarily changes it)
 */

class Stringify
{

    public function __construct($str)
    {
        $this->str = $str;
        $this->_addText();
        $this->_addDigits();
        $this->_addObject(new Stuff);

        echo $this->str;
    }

    private function _addText()
    {
        $this->str .= ' | Adding Text';
    }

    private function _addDigits()
    {
        $this->str .= ' | Adding Digits: 3032';
    }

    private function _addObject(Stuff $stuff)
    {
        $this->str .= $stuff->WriteCap();
    }
}

class Stuff
{
    public function WriteCap()
    {
        return ' [Class]={' . __CLASS__ . '}= Writing stuff';
    }
}


new Stringify('Intro Text ?');












