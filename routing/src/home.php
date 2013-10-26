<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/16/13
 * Time: 11:51 AM
 */
class home {

    public function __construct() {
        echo 'This is home page';
        $this->_other();
    }

    protected function _other() {
        echo 'This is the other function, lolz';
    }

}