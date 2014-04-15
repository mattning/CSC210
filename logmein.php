<?php
	if(!isset($_SESSION)) {
    	session_start();
	}
	
	class logmein {
		var $hostname = 'localhost';
		var $database = 'users';
		var $username = 'mattning';
		var $password = 'password';
		
		//column names
		var $user_table = 'main';
		var $user_column = 'usernames';
		var $user_pass = 'password';
		
		var $log = false;
		var $encryption = false;
		
		function dbconnect() {
			try {
			$db = new PDO("mysql:dbname=users;host=localhost", "mattning", "password");
			$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			return $db;
			}
			catch(PDOException $ex) {
				die("Failed to connect to database".$ex->getMessage());
			}
		}
		
		
		//return boolean
		function login($table, $username, $password) {
			$db = $this->dbconnect();
			
			if($this->user_table == "") {
				$this->user_table = $table;
			}

			//to prevent MySQL injection, I use prepare statement instead of sanitize
			$result = $db->prepare("SELECT * FROM ".$this->user_table." WHERE ".$this->user_column."=:username AND ".$this->user_pass." =:password;");
			//potential syntax errors
			$result->bindParam(':username', $username);
			$result->bindParam(':password', $password);
			$stmt = $result->execute();
			if($stmt != false) {
				$row = $result->fetch();
				if($row[$this->user_column] != "" && $row[$this->user_pass] != "") {
					$_SESSION['username'] = $username;
					$_SESSION['loggedin'] = true;
					$_SESSION['password'] = $password;
					return true;
				}
				else {
					session_destroy();
					return false;
				}
			}
			else {
				return false;
			}
		}
		
		function logout() {
			session_destroy();
			return;
		}
		
		function loggedin() {
			if($_SESSION['loggedin'] == true) {
			}
			else {
				header("Location: signin.php");
			}
		}
		
		//return boolean
		//this is un-necessary, use loggedin() instead
		function logincheck($logincode, $user_table, $user_pass, $user_column) {
			$db = $this->dbconnect();
			if	($this->user_pass == ""){
            	$this->user_pass = $user_pass;
        	}
        	if($this->user_column == ""){
            	$this->user_column = $user_column;
        	}
        	if($this->user_table == ""){
            	$this->user_table = $user_table;
        	}
        	//again, prevent injection
        	$result = $db->prepare("SELECT * FROM ".$this->user_table." WHERE ".$this->user_column."=:username AND ".$this->user_pass." =:password;");
			//potential syntax errors
			$result->bindParam(':username', $username);
			$result->bindParam(':password', $password);
			$stmt = $result->execute();
			if($stmt != false) {
				$row = $result->fetch();
				if($row[$this->user_column] != "" && $row[$this->user_pass] != "") {
					$logincode = true;
					return true;
				}
				else {
					$logincode = false;
					return false;
				}
			}
			else {
				$logincode = false;
				return false;
			}
				
		}
	}