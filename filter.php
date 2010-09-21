<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));

/**
 * General filtering for alphanumeric characters only
 * 
 */
/*
require_once 'Zend/Filter/Alnum.php';

$filter = new Zend_Filter_Alnum();

$input = 'My number is 123!';

echo $filter->filter($input);
*/



















/**
 * Chaining multiple filters together
 * 
 * 
 */
/*
require_once 'Zend/Filter.php';
require_once 'Zend/Filter/Alpha.php';
require_once 'Zend/Filter/StringToLower.php';

$filterChain = new Zend_Filter();
$filterChain->addFilter(new Zend_Filter_Alpha());
$filterChain->addFilter(new Zend_Filter_StringToLower());
 

$input = 'This is my MAIN STRING!!!!';

echo $filterChain->filter($input);
*/













/**
 * Writing your own filter
 * 
 * 
 */
/*
require_once 'Zend/Filter/Interface.php';

class RemoveColonFilter implements Zend_Filter_Interface
{
	public function filter($value)
	{
		return str_replace(':', '', $value);
	}
}

$filter = new RemoveColonFilter();

$input = 'lot:s:of: colons: :::!;';

echo $filter->filter($input);
*/
 












/**
 * Zend_Filter_Input example
 */
/*
require_once 'Zend/Filter/Input.php';

$validators = array(
	'*'    => 'NotEmpty',
);

$filters = array(
	'test' => 'StringTrim',
	'*'    => 'StripTags',
);

$data = array(
	'test' => 'This is a test   ',
	'var'  => '<b>Another Var</b>',
);

$input = new Zend_Filter_Input($filters, $validators, $data);

if ($input->hasInvalid() || $input->hasMissing()) {
	echo 'ERROR:<br />';
	
	foreach ($input->getMessages() as $m) {
		echo $m . '<br />';
	}
} else {
	echo 'Valid input!<Br />';
	echo "<pre>";
	echo '"' . $input->getEscaped('test') . '"<br />';
	echo '"' . $input->getEscaped('var') . '"';
}
*/
 







