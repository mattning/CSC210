<?php

//instantiate if needed
include("logmein.php");
$log = new logmein();
$log->encrypt = true; //set encryption
$db = $log->dbconnect();

if(!empty($_POST)) {
	if(empty($_POST['username'])) {
		die("Please enter an username.");
	}
	if(empty($_POST['email'])) {
		die("Please enter an email.");
	}
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
        die("Invalid E-Mail Address"); 
    }
    
    //ensure username is unique
    $query = "SELECT * FROM main where usernames = :username";
    $username = $_POST["username"];
    try {
        $result = $db->prepare($query);
        $result->bindParam(':username', $username);
        $stmt = $result->execute();
    } 
    catch(PDOException $ex) { 
        die("Failed to run query at line 32: " . $ex->getMessage()); 
    }
    $row = $result->fetch(); 
    if($row) { 
        die("This username is already in use"); 
    }
    $_SESSION['username'] = $username;
    
    //ensure email is unique
    $query = "SELECT * FROM main WHERE email = :email ";
    $email = $_POST["email"];
    try { 
        $result = $db->prepare($query); 
        $result->bindParam(':email', $email);
        $stmt = $result->execute(); 
    } 
    catch(PDOException $ex) { 
        die("Failed to run query at line 48: " . $ex->getMessage()); 
    } 
         
    $row = $result->fetch(); 
         
    if($row) { 
        die("This email address is already registered"); 
    }
    $_SESSION['email'] = $email;
    header("Location: registration.php");
    die();
}

?>