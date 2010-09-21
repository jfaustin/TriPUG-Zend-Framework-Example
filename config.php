<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));


/**
 * General usage of config ini
 * 
 * 
 */
/*
$configFile = 'config.ini';

require_once 'Zend/Config/Ini.php';

$env = 'production';
$env = 'development';

$config = new Zend_Config_Ini($configFile, $env);

echo $config->db->username . ' : ' . $config->db->password;
*/










/**
 * Writing of INI files
 * 
 * 
 */
/*
$configFile = 'config.ini';

require_once 'Zend/Config/Ini.php';
require_once 'Zend/Config/Writer/Ini.php';

$config = new Zend_Config_Ini($configFile, null, array('skipExtends' => true, 'allowModifications' => true));

echo $config->production->db->username . ' : ' . $config->production->db->password . '<br /><br />';

$config->production->db->username = 'new_username';
$config->production->db->password = 'new_password';

$writer = new Zend_Config_Writer_Ini(array('config' => $config, 'filename' => $configFile));

$writer->write();

$newConfig = new Zend_Config_Ini($configFile, 'production');

echo $newConfig->db->username . ' : ' . $newConfig->db->password;
*/
 
















