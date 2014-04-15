<?php
	include("logmein.php");
	$log = new logmein();
	$log->encrypt = true;
	if($log->logincheck($_SESSION['loggedin'], "main", "password", "usernames") == false) {
		header("Location: logmein.php");
		die("Redirecting to logmein");
	}
	