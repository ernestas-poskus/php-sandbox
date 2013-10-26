<?php
/**
 * Author: Ernestas Poskus
 * Author URI: www.out13.com
 * LinkedIn: linkedin.com/in/ernestasposkus
 * GitHub: github.com/ernestas-poskus
 * Date: 5/16/13
 * Time: 3:06 PM
 */

/**
 * Singleton pattern - by some considered grand daddy of all patterns.
 * Considered as "Global" variable which undermines encapsulation.
 *
 * @Problem solves: it allows you to have one and only one instance of a class in your system.
 *
 * @Pros:
 *  - Makes Object/Method available throughout system
 *  - Object/Method should not be stored in global variable, which can be overwritten
 *  - Only 1 Object/Method and no more available in the system.
 *  - Improvement over Global variables
 *  - Cannot overwrite data
 *
 * @Cons:
 *  - Hard to debug/ test
 *  - Dependency problems
 *
 * @Usually used:
 *  - Getting database connection - ensuring only one database connection will be available.
 */

class singleton
{

    private static $_instance;

    /**
     * Ensures class cannot be instantiated outside of itself.
     */
    private function __construct()
    {
    }

    /**
     * Check whether instance already exists if not, create it
     *
     * @return singleton instance
     */
    public static function getInstance()
    {
        if ( empty(self::$_instance) ) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * Some public method
     *
     * @return string
     */
    public function getMessage()
    {
        echo 'Class: "' . __CLASS__ . '" instance object id is same';
    }

    /**
     * Makes class impossible to clone
     */
    private function __clone()
    {
    }

}


/**
 * Testing:
 *  - Dumping requested methods
 *  - Response is from the same instance
 */

$in = singleton::getInstance();
$in->getMessage();
var_dump($in);

echo '<hr />';

$out = singleton::getInstance();
$out->getMessage();
var_dump($out);

