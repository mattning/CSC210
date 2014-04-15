<?php

//instantiate if needed
include("logmein.php");
$log = new logmein();
$log->encrypt = true; //set encryption
$db = $log->dbconnect();

?>


<!DOCTYPE html>
<head>
<title>Restaurant</title>
	<link rel="stylesheet" href="sign-in.css">
	<link rel="stylesheet" href="background.css">
	<script src="registration.js" type="text/javascript"></script>
</head>
<body>
<div id="background">
	<div id="banner">
		<div id="logo">
		<img src="logo.png" alt="logo" >
		</div>
	</div>
		<div id="semiback">
		<div id="bannerinfo">
			<div id="info">
			
			<p>Address: </p>
					<p>Store Hour:</p>
					<p>Phone Number: </p>
			</div>

			<div id="accountlink">
				<a href = "signin.php"> My Account: </a>
			</div>
			
		</div>
		<br>
		<br>
		<br>
		
		<div id="navibar">
		<nav id="nav">
			<ul>
				<li class="navbut">
					<a href = "select.html"> Home </a>
				</li>
				<li class="navbut">
					<a href = "homepage.html"> About Us </a>
				</li>
				<li class="navbut">
					<a href="menuHome.html">Menu</a>
				</li>
				<li class="navbut">
					<a href="deliveryoptions.html">Order Online</a>
				</li>
				<li class="navbut">
					<a href="catering.html"> Catering </a>
				</li>
				<li class="navbut" id="last">
					<a href="sitemap.html"> Site Map </a>
				</li>
			</ul>
		</nav>
		</div>
		
		<div id="mainpage">
		<span id="mainpagespan">
			<div id="registration">
			<form action="register2.php" method="post">
				<h2>REGISTER</h2>
				<table>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value=<?php echo "\"".$_SESSION['username']."\"" ?> /></td>
					</tr>
					<tr>
						<td>E-mail Address: </td>
						<td><input type="text" name="email" value=<?php echo "\"".$_SESSION['email']."\"" ?> /></td>
					</tr>
					<tr>
						<td>First Name: </td>
						<td><input type="text" name="firstname" /></td>
					</tr>
					<tr>
						<td>Last Name: </td>
						<td><input type="text" name="lastname" /></td>
					</tr>
				</table>
				<p></em>Passwords are CASE sensitive and must be at least 6 characters</em></p>
				<table>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td>Confirm Password: </td>
						<td><input type="password" name="confirm_password" /></td>
					</tr>
				</table>
				<span class="submit"><input type="submit" value="REGISTER" /></span>
					<a href = "accountHome.html"> Temporary Register Link </a>
				<span id="cancel"><input onclick="confirmation()" type="submit" value="CANCEL"></span>
			</form>
			</div>
		</span>
		</div>
	</div>
</div>
</body>
</html>