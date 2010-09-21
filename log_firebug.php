<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));

require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Firebug.php';
require_once 'Zend/Controller/Request/Http.php';
require_once 'Zend/Controller/Response/Http.php';
require_once 'Zend/Wildfire/Channel/HttpHeaders.php';

$writer = new Zend_Log_Writer_Firebug();
$logger = new Zend_Log($writer);
 
$request = new Zend_Controller_Request_Http();
$response = new Zend_Controller_Response_Http();
$channel = Zend_Wildfire_Channel_HttpHeaders::getInstance();
$channel->setRequest($request);
$channel->setResponse($response);
 
// Start output buffering
ob_start();
 
// Now you can make calls to the logger
 
$logger->log('this is logging from an ajax request', Zend_Log::INFO);
 
// Flush log data to browser
$channel->flush();
$response->sendHeaders();

echo "Successful AJAX query!";