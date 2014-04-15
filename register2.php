<?php

//instantiate if needed
include("logmein.php");
$log = new logmein();
$log->encrypt = true; //set encryption
$db = $log->dbconnect();

echo $_POST['username'];
if(!empty($_POST)) {
	echo $_POST['username'];
	if(empty($_POST['username'])) {
		header("Location: registration.php");
		die("Please enter an username.");
	}
	if(empty($_POST['firstname'])) {
		header("Location: registration.php");
		die("Please enter first name.");
	}
	if(empty($_POST['lastname'])) {
		header("Location: registration.php");
		die("Please enter last name.");
	}
	if(empty($_POST['email'])) {
		header("Location: registration.php");
		die("Please enter an email.");
	}
	if(empty($_POST['password'])) {
		header("Location: registration.php");
		die("Please enter a password.");
	}
	if(empty($_POST['confirm_password'])) {
		header("Location: registration.php");
		die("Please enter confirmed password");
	}
	if($_POST['password'] != $_POST['confirm_password']) {
		header("Location: registration.php");
		die("passwords do not match. Please try again.");
	}
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
		header("Location: registration.php");
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
    
    $query = "INSERT INTO main (email, password, usernames, firstname, lastname) VALUES (:email, :password, :username, :firstname, :lastname)";
    
    try {
    	$result = $db->prepare($query);
    	$result->bindParam('email', $_POST['email']);
    	$result->bindParam('password', $_POST['password']);
    	$result->bindParam('username', $_POST['username']);
    	$result->bindParam('firstname', $_POST['firstname']);
    	$result->bindParam('lastname', $_POST['lastname']);
    	$stmt = $result->execute();
    }
    catch(PDOException $ex) {
    	die("Failed to run query: ".$ex->getMessage());
    }
    
    $_SESSION['loggedin'] = true;

    header("Location: accountHome.php");
    die();
}

?>