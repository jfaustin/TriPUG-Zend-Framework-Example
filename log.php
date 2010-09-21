<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));

require_once 'Zend/Log.php';
require_once 'Zend/Log/Writer/Stream.php';
require_once 'Zend/Log/Formatter/Simple.php';

/*
$writer = new Zend_Log_Writer_Stream('log.txt');

//$formatter = new Zend_Log_Formatter_Simple('hello %message%' . PHP_EOL);
//$writer->setFormatter($formatter);


$logger = new Zend_Log($writer);
 
$logger->info('Informational message');
$logger->err('SOMETHING BARFED!');

$exception = new Exception('some exception from somewhere');
$logger->err($exception);

$logger->addPriority('AUTHENTICATION', 8);
$logger->authentication('someone had an invalid authentication attempt');
*/




/*
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
 
$logger->log('This is a log message!', Zend_Log::INFO);
 
// Flush log data to browser
$channel->flush();
$response->sendHeaders();
*/














