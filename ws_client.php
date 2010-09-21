<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));

$service = 'http://localhost/tripugzf/ws_server.php';

$value = 'THIS IS a NEw vaLue';

$method = 'encode';

/**
 * Using Zend_Rest_Client
 * 
 */
/*
require_once 'Zend/Rest/Client.php';

$client = new Zend_Rest_Client($service);

echo "Result is: " . $client->$method($value)->get();
*/













/**
 * Using CURL to call the same command
 * 
 * 
 */
/*
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $service . '?method=' . $method . '&arg1=' . urlencode($value));
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// grab URL and pass it to the browser
$result = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

$parsed = simplexml_load_string($result);

//echo $result;
echo "Result is: " . $parsed->$method->response;
*/
 
















