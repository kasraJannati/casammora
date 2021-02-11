<?php

//Mailchimp setting
use \DrewM\MailChimp\MailChimp;
// API Key: af98fa48bbd29fe4c5f2cfabb2dba7bd-us16
// Audience ID: 20266b21a0

class RegisterController extends Controller {

    private $_mailChimp;

	function __construct($controller, $action) {
		parent::__construct($controller, $action);
        // $this->_view->set('page_title','Contact');
		$this->_mailChimp = new MailChimp('af98fa48bbd29fe4c5f2cfabb2dba7bd-us16');
    }

	function index($arg=false) {

		$this->render = 0;

		$email_address = $_POST['EMAIL'];
        $merge_vars = array(
			'FNAME'		=> $_POST['FNAME'],
			'LNAME'		=> $_POST['LNAME'],
			'MMERGE3'		=> $_POST['MMERGE3'],
			'MMERGE5'		=> $_POST['MMERGE5'],
			'MMERGE4'		=> $_POST['MMERGE4'],
			'CONSENT'	=> isset($_POST['group[1173][1]']) == 'on' ? 'I Consent':'Not Consent'
		);
		
        // send to mailchimp
        $list_id = '20266b21a0';
		$result = $this->_mailChimp->post(
			"lists/$list_id/members",
			[
				'email_address' => $email_address,
				'merge_fields'  => $merge_vars,
				'status'        => 'subscribed'
			]);
		// UPDATE Mailchimp DATA
		$subscriber_hash = $this->_mailChimp->subscriberHash($email_address);
		$result = $this->_mailChimp->patch(
			"lists/$list_id/members/$subscriber_hash",
			array(
				'merge_fields'  => $merge_vars,
				'status'        => 'subscribed'
			));
		// End Update.

        $registerform = true;
      
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?register=" . urlencode(serialize($registerform)) );

	}
}






