<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) exit('No direct access allowed.');

/**
 * Controller Class
 * 
 * @author stephen
 */
class Controller {
	
	protected $_controller;
	protected $_action;
	protected $_view;
	protected $_model;

	protected $variables;
	
	public $renderHeader;
	public $render;

	public function __construct($controller, $action) {

        $this->_controller = ucfirst($controller);
		$this->_action = $action;
		
		$model = ucfirst($controller);
		
		if (file_exists(BASEPATH . 'application/models/' . $model . '.php')){
			require_once(BASEPATH . 'application/models/' . $model . '.php');
			$this->_model = new $model;
		}
		
		$this->_view = new View($this->_controller,$this->_action);
		
		$this->renderHeader = 1;
		$this->render = 1;
	}
	
	public function __destruct() {
		if ($this->render) {
			$this->_view->render($this->renderHeader, $this->variables);
		}
	}

	function setVariable($name,$value) {
		$this->variables[$name] = $value;
	}

	function getVariable($name){
		return $this->variables[$name];
	}

	public function setView($aAction){

		$this->_view = new View($this->_controller,$aAction);
		if ((int)method_exists($this, $aAction)) $this->$aAction();
		else {
			echo "$aAction can not be found in $this->_controller";
			exit;
		}
	}
}