<?php 
set_include_path(realpath(dirname(__FILE__) . '/inc'));

require_once 'Zend/Form.php';
require_once 'Zend/View.php';

/**
 * A class to create a simple login form
 * 
 * @author jfaustin
 *
 */
class LoginForm extends Zend_Form
{
	/**
	 * creates the form elements and sets the decorators
	 */
	public function __construct()
	{
        $this->setDecorators(array(
             'FormElements',
             array(
             	'HtmlTag', 
             	array(
             		'tag' => 'dl', 
             		'class' => 'zend_form'
             	)
             ),
             'Form',
         ));
	         		
		$username = $this->createElement('text', 'username', array('label' => 'User Name:'));
		$username->addValidator('Alnum');
		$username->setRequired(true);

		$password = $this->createElement('password', 'password', array('label' => 'Password:'));
		$password->addValidator('Alnum');
		$password->addValidator('StringLength', true, array('min' => 6, 'max' => 10));
		$password->setRequired(true);

		$submit = $this->createElement('submit', 'submitButton', array('label' => 'Log In'));
		
		$this->addElements(array($username, $password, $submit));
		
		return $this;
	}
	
	/**
	 * Method to allow non-MVC usage of Zend_Form so the 
	 * elements actually render correctly
	 * 
	 * @param Zend_View_Interface $view
	 */
	public function setView(Zend_View_Interface $view = null)
    { 
        parent::setView($view); 
        
        foreach ($this->getElements() as $item) { 
            $item->setView($view); 
        }

        return $this;
    }
}

// create a view
$view = new Zend_View();
$view->doctype('XHTML1_TRANSITIONAL');

$form = new LoginForm();
$form->setView($view);

// if the form is submitted
if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
	if ($form->isValid($_POST)) {
		echo "Successful attempt!";
		die();
	}
	
	echo "There was an error with the form<br /><br />";
}

echo $form->render();













