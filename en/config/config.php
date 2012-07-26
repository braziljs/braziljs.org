<?php

	define('IN_PRODUCTION', ($_SERVER['HTTP_HOST'] === 'braziljs.org/en' || $_SERVER['HTTP_HOST'] === 'www.braziljs.org/en'));

	if(IN_PRODUCTION){
		require_once("production.php");
	} else {
		require_once("local.php");
	}

?>