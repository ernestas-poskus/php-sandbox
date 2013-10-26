<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/16/13
 * Time: 11:30 AM
 */

class route {

    private $_uri = array();
    private $_method = array();

    /**
     * Build a collection of internal URL's to look for
     */
    public function add($uri, $method = NULL) {
        $this->_uri[] = '/' . trim($uri, '/');

        if ($method != NULL) {
            $this->_method[] = $method;
        }
    }

    /**
     * Actual routing system
     */
    public function submit() {

        $uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';

        foreach($this->_uri as $key => $value) {

            if(preg_match("#^$value$#", $uriGetParam)) {

                if(is_string($this->_method[$key])) {
                    $useMethod = $this->_method[$key];
                    new $useMethod();
                }
                call_user_func($this->_method[$key]);

            }

        }

    }



}