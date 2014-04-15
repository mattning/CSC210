<?php
//instantiate if needed
include("logmein.php");
$log = new logmein();
$log->encrypt = true; //set encryption
if(isset($_POST['username']) && isset($_POST['password'])) {
	//if($_POST['action'] == "login.php"){
		if($log->login("main", $_POST['username'], $_POST['password']) == true){
   	 		header("Location: accountHome.php");
   	 		die();
   		}
   		else{
        	header("Location: error.html");
        	die();
		}
	//}
}
else {
	header("Location: menuHome.html");
	die();
}
?>