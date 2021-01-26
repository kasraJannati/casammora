<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) exit('No direct access allowed.');

/**
 * Session Class
 *
 *
 * @author stephen
 *
 */
class Session {

	/**
	 * Config
	 *
	 * @access private
	 */
	private $config;


	/**
	 * Constructor
	 *
	 * @access public
	 */
	public function __construct() {

		$this->config = load_config('session');

		if(!session_id())
			session_start();

	}

	/**
	 * Set session
	 *
	 * @access public
	 *
	 * @param $key string 
	 *
	 * @param $value string 
	 */
	public function set($key, $value) {

		$_SESSION[$this->config['session_key'].$key] = $value;

	}

	/**
	 * Get session
	 *
	 * @access public
	 *
	 * @param $key string 
	 */
	public function get($key) {

		if (isset($_SESSION[$this->config['session_key'].$key])) return $_SESSION[$this->config['session_key'].$key];

		return false;

	}

	/**
	 * Delete session
	 *
	 * @access public
	 *
	 * @param $key string 
	 */
	public function delete($key) {

		unset($_SESSION[$this->config['session_key'].$key]);

	}

	/**
	 * Get Session ID
	 *
	 * @access public
	 */
	public function getId() {

		return session_id();

	}

	/**
	 * Destroy session
	 *
	 * @access public
	 */
	public function destroy() {

		$_SESSION = array();
		session_unset();
		session_destroy();

	}

	/**
	 * Display/Print session
	 *
	 * @access public
	 */
	public function display() {

		echo '<pre>';
		echo print_r($_SESSION);
		echo '</pre>';
		
	}
	

}




