<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));

/**
 * Simple Registry example
 * 
 * 
 */
/*
require_once 'Zend/Registry.php';

$myVar = 'this is a value';

Zend_Registry::set('myVar', $myVar);

class RegistryExample
{
	public function __construct()
	{
		error_reporting (E_ALL ^ E_NOTICE);
		
		echo '$myVar is set to "' . $myVar . '"<br />';
		
		echo 'myVar in the registry is set to "' . Zend_Registry::get('myVar') . '"<br />';
	}
}

$example = new RegistryExample();
*/












/**
 * Registry example using objects and checking if the key is
 * already registered
 * 
 * 
 */

/*
require_once 'Zend/Registry.php';

$myObj = new StdClass();
$myObj->name = 'Jason';

Zend_Registry::set('myObj', $myObj);

$newObj = new StdClass();
$newObj->name = 'Tester';

if (!Zend_Registry::isRegistered('myObj')) {
	Zend_Registry::set('myObj', $newObj);
}

echo "<pre>";
var_dump(Zend_Registry::get('myObj'));
*/
 
















