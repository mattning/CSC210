<?php
	require("logmein.php");
	
?>
<!DOCTYPE html>
<head>
<title> Restaurant</title>
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
		<div id="sign_in">
		<form action="login.php" method="post">
			<h2>SIGN IN</h2>
			<table>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" /></td>
				</tr>
			</table>
			</br>
			<a href = "accountHome.html"> Temporary Register Link </a>
			<span class="submit"><input type="submit" value="SIGN IN" /></span>
		</form>
		</div>
		<div id="register">
		<form action="register.php" method="post">
			<h2>REGISTER</h2>
			<ul>
				<li>Save information for faster checkout for future visits</li>
				<li>Take advantage of special offers</li>
				<li>View order status and history online</li>
			</ul>
			<table>
				<tr>
					<td>User name: </td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td>E-mail Address: </td>
					<td><input type="text" name="email" /></td>
				</tr>
			</table>
			</br>
			<span class="submit">
				<input type="submit" value="REGISTER" />
				<a href = "registration.html"> Temporary Submit Link </a>
			</span>
		</form>
		</div>
		</span>
		</div>
	</div>
</div>
</body>
</html>