<?php

/**
 * Authentication class
 * 
 * @author Stephen J.
 *
 */
class Authentication {
	
	/**
	 * Config
	 *
	 * @access private
	 */
	private $config;
	
	/**
	 * Database
	 *
	 * @access private
	 */
	private $db;
	
	/**
	 * Session
	 *
	 * @access private
	 */
	private $session;
	
	
	/**
	 * Constructor
	 *
	 * @access public
	 */
	public function __construct() {
	
		$this->config 	= load_config('authentication');
		$db_config 		= load_config('database');
		
		$this->db = new Database($db_config['hostname'], $db_config['database'], $db_config['username'], $db_config['password']);
		
		$this->session = new Session();
	}
	
	/**
	 * Token
	 *
	 * @access private
	 */
	private function token() {
	
		return md5($this->session->get('user_email') . $this->config['secret_word'] . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
	
	}
	
	/**
	 * Login
	 *
	 * @access public
	 */
	public function login($username, $password) {
	
		$username = filter_var($username, FILTER_SANITIZE_STRING); //FILTER_SANITIZE_EMAIL
		$password = filter_var($password, FILTER_SANITIZE_STRING);
	
		$sql = "SELECT * FROM " . $this->config['user_table'] . " WHERE username = '" . $username . "' AND password = '" . sha1($password) . "' AND active = 1";
		
		//$sql = "SELECT * FROM " . $this->config['user_table'] . " WHERE username = '" . $username . "' AND password = '" . md5($password) . "' AND active = 1";
		
		if ($this->db->row_count($sql)) {
	
			$result = $this->db->query($sql);
			$result = $result[0];

			session_regenerate_id(true);
			
			$this->session->set('user_id', $result['user_id']);
			$this->session->set('first_name', $result['first_name']);
			$this->session->set('last_name', $result['last_name']);
			$this->session->set('email', $result['email']);
			$this->session->set('username', $result['username']);

			$this->session->set('token', $this->token());
			$this->session->set('logged_in', true);
			
			return true;
			
		} else {
	
			return false;
			
		}
	
	}



	/**
	 * Add User
	 *
	 * @access public
	 */
	public function add_user($username, $password, $user_info){

		$username = filter_var($username, FILTER_VALIDATE_EMAIL);
		$password = filter_var($password, FILTER_SANITIZE_STRING);

		if(strlen($username)<3) return false;
		if(strlen($password)<3) return false;

		$sql = "SELECT * FROM " . $this->config['user_table'] . " WHERE username = '" . $username . "'";
		
		if ($this->db->row_count($sql) == 0) {

			$values = array(
				'username'		=> $username, 
				'password'		=> sha1($password),
				'active_flag'	=> 1,
				'user_group_id'	=> $user_info['user_group_id'],
				'user_group_name' => $user_info['user_group_name'],
				'firstname' => $user_info['firstname'],
				'lastname' => $user_info['lastname']
			);
			
			$this->db->insert($this->config['user_table'], $values);
			
			return true;
			
		} else {
	
			return false;
			
		}

	}

	public function remove_user($user_id){

		$where_clause = array(
			'user_id' => $user_id
		);
		
		$table_name = $this->config['user_table'];

		$this->db->delete($table_name,$where_clause);

	}
	
	
	
	/**
	 * User Id
	 *
	 * @access public
	 */
	public function user_id() {
	
		if ($this->session->get('user_id')) {
	
			return $this->session->get('user_id');
	
		}
	
		return false;
	
	}
	
	
	/**
	 * Username
	 *
	 * @access public
	 */
	public function username() {
	
		if ($this->session->get('username')) {
	
			return $this->session->get('username');
	
		}
	
		return false;
	
	}
	
	
	/**
	 * User Group
	 *
	 * @access public
	 */
	public function user_group() {
	
		if ($this->session->get('user_group')) {
	
			return $this->session->get('user_group');
	
		}
	
		return false;
	
	}


	/**
	 * Get active users
	 * 
	 * @access public 
	 */	
	public function get_active_users(){

		foreach ($this->db->query("SELECT * FROM " . $this->config['user_table'] . " WHERE user_group = 0 AND active = 1") as $row) {
						
			$users[] = array(
				'user_id'	=> $row['user_id'], 
				'username'	=> $row['username']
			);
							
        }
		
		if (isset($users))
			return $users;
		
	}

	
	/**
	 * Update password
	 *
	 * @access public
	 */
	public function update_password($user_id, $password) {
	
		$password = filter_var($password, FILTER_SANITIZE_STRING);
	
		if ($this->db->row_count("SELECT user_id FROM " . $this->config['user_table'] ." WHERE user_id = '" . $user_id . "'")) {
	
			$password = md5(sha1($password));
	
			$where = array(
					'user_id' => $user_id
			);
	
			$this->db->update($this->config['user_table'], array('password' => $password), $where);
	
			return true;
	
		} else {
	
			return false;
	
		}
	
	}
	
	/**
	 * Logout
	 *
	 * @access public
	 */
	public function logout() {
	
		$this->session->destroy();
	
	}
	
	/**
	 * Logged in
	 *
	 * @access public
	 */
	public function logged_in() {
	
		if ($this->session->get('logged_in') && $this->session->get('token') == $this->token()) {
	
			return true;
	
		}
	
		return false;
	
	}
	
	
	
	
}











/*

$authentication = new Authentication();
		
//CHECK IF THE USER IS LOGGED IN
if ($authentication->logged_in()) header("Location: http://localhost/RedPHPFrameWork/welcome");

//LOGIN
if (isset($_POST['submit'])) {

	if ($authentication->login($_POST['username'], $_POST['password']))
		header("Location: http://localhost/RedPHPFrameWork/welcome");
	else
		$failed = true;

}
		
		
*/


















