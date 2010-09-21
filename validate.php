<?php
set_include_path(realpath(dirname(__FILE__) . '/inc'));

/**
 * General validator usage of the alphanumeric validator
 * 
 * 
 */
/*
require_once 'Zend/Validate/Alnum.php';

$validator = new Zend_Validate_Alnum();

$validator->setMessage('BUSTED! "%value%" is invalid', Zend_Validate_Alnum::NOT_ALNUM);

$input = 'valid123';

if ($validator->isValid($input)) {
	echo 'Valid Input';
} else {
	echo 'ERROR:<br />';
	
	foreach ($validator->getMessages() as $m) {
		echo $m . '<br />';
	}
}

*/



















/**
 * Validator example with setting options
 * 
 * 
 */

/*
require_once 'Zend/Validate/Between.php';

$options = 	array(
	'min' => 0, 
	'max' => 10,
	//'inclusive' => false,
);

$validator = new Zend_Validate_Between($options);

$input = 10;

if ($validator->isValid($input)) {
	echo 'Valid Input';
} else {
	echo 'ERROR:<br />';
	
	foreach ($validator->getMessages() as $m) {
		echo $m . '<br />';
	}
}
*/
















/**
 * Chaining multiple validators together
 * 
 * 
 */
/*
require_once 'Zend/Validate.php';
require_once 'Zend/Validate/Alnum.php';
require_once 'Zend/Validate/StringLength.php';

$validatorChain = new Zend_Validate();

$validatorChain->addValidator(new Zend_Validate_Alnum());
$validatorChain->addValidator(new Zend_Validate_StringLength(array('min' => 6, 'max' => 12)));

$input = 'teststr';

if ($validatorChain->isValid($input)) {
	echo 'Valid Input';
} else {
	echo 'ERROR:<br />';
	
	foreach ($validatorChain->getMessages() as $m) {
		echo $m . '<br />';
	}
}
*/
















/**
 * Writing your own validator for validating a MAC address
 * 
 * 
 */

/*
require_once 'Zend/Validate/Abstract.php';

class MacValidate extends Zend_Validate_Abstract
{
	const INVALID = 'invalid';
	
    protected $_messageTemplates = array(
        self::INVALID => "MAC address is invalid",
    );
    	
    public function isValid($value)
    {
        $requirement = preg_match('/^([0-9A-F]{2})([^0-9A-F]*[0-9A-F]{2}){5}$/i', $value);

        if (!$requirement) {
            $this->_error(self::INVALID);
            return false;
        }

        return true;
    }	
}

$validator = new MacValidate();

$input = 'AABBCCDDEE11';

if ($validator->isValid($input)) {
	echo 'Valid Input';
} else {
	echo 'ERROR:<br />';
	
	foreach ($validator->getMessages() as $m) {
		echo $m . '<br />';
	}
}
*/


















