<?php

	$MSG_ERROR = "error";
	$MSG_SUCCESS = "<strong>Great</strong>, now you're in! <a href='#'' class='more-one'>Do you want subscribe another email?</a>";


	if( isset( $_POST['email'] ) && strlen($_POST['email']) > 1 ){

		$con = mysql_connect("localhost","root","root");

		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		if($email) {

			mysql_select_db("braziljs", $con);

			$query = "INSERT INTO newsletter (email, date) VALUES ('" . $email ."', NOW())";

			mysql_query($query);

			mysql_close($con);

			echo $MSG_SUCCESS;
		} else {
			echo $MSG_ERROR;
		}


	} else {

		echo $MSG_ERROR;

	}
?>