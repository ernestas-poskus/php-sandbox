<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : 
	define('SITE_ROOT', DS.'PHP'.DS.'sandbox');

defined('LIB_PATH') ? null : define('LIB_PATH', 'includes');
// defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

function __autoload($class_name) {
	/* 
	 * Converts class_name to lowercase
	 * @TODO yes
	 */
	$class_name = strtolower($class_name);
	
	/**
	* Defines Library path where class'es resides.
	* LIB_PATH - must be DEFINED !
	*/
	$class_load = LIB_PATH.DS."class.{$class_name}.inc";
	
	echo $class_load;
	
	if( file_exists($class_load) ) {
		/*
		* Autoload's class'es from defined library path
		* LIB_PATH \ class.name.inc
		*/	
		require_once($class_load);
	} else {
		die("<h1>The file {$class_name}.php could not be found.</h1>");
	}
}












?>


