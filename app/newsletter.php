<?php

	require_once('../config/config.php');

	$MSG_ERROR = "<strong>Oops</strong>, um erro foi encontrado. Por favor, tente novamente.";

	$MSG_SUCCESS = "<strong>Legal</strong>, agora você está dentro! Quer inscrever <a href='#' class='more-one'>outro email?</a>";

	if( isset( $_POST['email'] ) && strlen($_POST['email']) > 1 ){

		$con = mysql_connect(DATABASE_SERVER, DATABASE_USER, DATABASE_PASSWORD);

		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		if($email) {

			mysql_select_db(DATABASE_NAME, $con);

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