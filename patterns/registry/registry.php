<?php
/**
 * Created by JetBrains PhpStorm.
 * Author: Ernestas Poškus / oWRs
 * Date: 5/13/13
 * Time: 12:42 AM
 */
class registry
{

    private static $_object = array();

    /**
     * Set object to register
     *
     * @param $name - name for object for later access
     * @param $object - object to be registered
     */
    public static function set($name, $object)
    {
        self::$_object[$name] = $object;
    }

    /**
     * Returns object if it exists in objects array
     *
     * @param null $name - name of object to return
     * @return mixed - usually object
     */
    public static function &get($name = NULL)
    {
        if ($name != NULL) {

            if (array_key_exists($name, self::$_object)) {

                return self::$_object[$name];

            }
        }

    }

    public static function dumpRegistry() {
        return self::$_object;
    }
}


$obj = array('localhost', 'root', 'segseg219IJQNKN', 'prime_db');

registry::set('database_data', $obj);

/**
 * Removing value from memory
 */
unset($obj);
echo $obj;

var_dump( registry::dumpRegistry() );





