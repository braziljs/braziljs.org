<?php

	require_once('phpmailer.php');
	require_once('util.php');

	// data form
	$contact_name = xss_clean($_POST['name']);
	$contact_email = xss_clean($_POST['email']);
	$contact_subject = xss_clean($_POST['subject']);
	$contact_msg = xss_clean($_POST['message']);

	$Email = new PHPMailer();

	$Email->SetLanguage("br");
	$Email->IsMail();
	$Email->IsHTML(true);

	$Email->From = $contact_email;
	$Email->FromName = $contact_name;
	$Email->AddAddress("contact@braziljs.org");
	$Email->Subject = $contact_subject;

	// text message
	$Email->Body .= "<strong>Sent by:</strong>".utf8_decode($contact_name)." - ".$contact_email."<br>";
	$Email->Body .= "<strong>Message:</strong>".utf8_decode($contact_msg)."<br>";

	if(!$Email->Send()) {
		echo '<div class="alert error">Sorry! Email not send</div>';
	}
	else {
		echo '<div class="alert success">Email sent successful</div>';
	}

?>