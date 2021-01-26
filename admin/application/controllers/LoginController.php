<?php

class LoginController extends Controller {


	function __construct($controller, $action) {
	
		parent::__construct($controller, $action);

		$this->_authentication = new Authentication();
		if ($this->_authentication->logged_in()) header("Location: " . BASEURL);
		
	}

	function index($arg=false) {

		$this->_view->set('error', isset($_GET['msg'])?'fail':'' );
	}

	function login($arg=false){

		if($this->_authentication->login($_POST["username"],$_POST["password"]))
		{
			header("Location:".BASEURL."dashboard");
		}
		else
		{

			header("Location:".BASEURL."login?msg=fail");
		}

	}

	function logout($arg=false){

		$this->_authentication->logout();
        header("Location: " . BASEURL . "login");
	}
}