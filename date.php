<?php 
set_include_path(realpath(dirname(__FILE__) . '/inc'));

/**
 * Basic Zend_Date usage
 * 
 * 
 */
/*
require_once 'Zend/Date.php';

$date = new Zend_Date();

$date->subMonth(3);

echo $date . '<br />';

$date->addDay(33);

echo $date . '<br />';

$date->addHour(3);

echo $date . '<br />';

$date->subMinute(43);

echo $date . '<br /><br />';

$newDate = clone $date;

$newDate->addDay(32);

echo $date . '<br />';
echo $newDate . '<br /><br />';

$setDate = new Zend_Date('May 30, 1981 13:14');
echo $setDate . '<br /><br />';
*/







/**
 * Date comparison
 */
/*
require_once 'Zend/Date.php';

$date = new Zend_Date();
//$date->addMinute(10);

if ($date->compare(10, Zend_Date::MINUTE) == -1) {
	echo 'This has less than 10 minutes in the hour';
} else {
	echo 'This has more than 10 minutes in the hour';
}
*/











/**
 * print parts of dates
 * 
 * 
 */
/*
require_once 'Zend/Date.php';

$date = new Zend_Date();

echo $date->get(Zend_Date::YEAR) . '-' . $date->get(Zend_Date::MONTH) . '-' . $date->get(Zend_Date::DAY);
*/
 
















