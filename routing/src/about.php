<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/16/13
 * Time: 11:51 AM
 */
class about {

    public function __construct() {
        echo 'This is about me page !';
        $this->_other();
    }

    protected function _other() {
        echo ' Hi, My name is Jack' . '<br />';
    }

}