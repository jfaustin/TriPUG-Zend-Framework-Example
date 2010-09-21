<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));

/**
 * Service class for example REST server
 * 
 * @author jfaustin
 *
 */
class MyService
{
	/**
	 * returns an uppercase string
	 * @param string $string
	 * @return string;
	 */
	public function toUpper($string)
	{
		return strtoupper($string);
	}
	
	/**
	 * returns a lowercase string
	 * @param string $string
	 * @return string
	 */
	public function toLower($string)
	{
		return strtolower($string);
	}
	
	/**
	 * Makes a string awesome
	 * 
	 * @param string $string
	 */
	public function encode($string)
	{
		return md5($string);
	}
}

require_once 'Zend/Rest/Server.php';

$server = new Zend_Rest_Server();
$server->setClass('MyService');
$server->handle();


















