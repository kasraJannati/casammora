<?php

//PHPMailer setting
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

class ContactFormController extends Controller {

	function __construct($controller, $action) {
		// parent::__construct($controller, $action);
        // $this->_view->set('page_title','Contact');
    }

	function index($arg=false) {

        $merge_vars = array(
			'FNAME'		=> $_POST['first_name'],
			'LNAME'		=> $_POST['last_name'],
			'EMAIL'		=> $_POST['email_address'],
			'PHONE'		=> $_POST['phone_number'],
			'MESSAGE'		=> $_POST['message'],
			'BROKER'		=> $_POST['inlineRadioOptions'],
			'CONSENT'	=> isset($_POST['consent']) == 'on' ? 'I Consent':'Not Consent'
		);
		// print_r($merge_vars);

		$mail = new PHPMailer(true);
		$mail->setFrom($merge_vars['EMAIL']); 
		$mail->addAddress('info@casamorra.com');  // Add a recipient
		$mail->isHTML(true); // Set email format to HTML
		$mail->Subject = $merge_vars['FNAME'].' '.$merge_vars['LNAME'];
		$mail->Body    = $merge_vars['MESSAGE']."<br> Are you a broker? ".$merge_vars['BROKER']."<br> Consent: ".$merge_vars['CONSENT']."<br> Phone number: ".$merge_vars['PHONE']."<br> Email address: ".$merge_vars['EMAIL'];
		$mail->send();
		
		$messageSent = "Message has been sent!";
		if (isset($merge_vars)) {
			header("Location: " . BASEURL . "contact?sent=" . urlencode(serialize($messageSent)) );
		}

	}
}



