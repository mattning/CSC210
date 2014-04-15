<?php
	include("logmein.php");
	$log = new logmein();
	$log->encrypt = true;
	$log->loggedin();
	$db = $log->dbconnect();
	$result = $db->query("SELECT * FROM main WHERE usernames ='".$_SESSION['username']."'");
	$row = $result->fetch();
	$resultbill = $db->query("SELECT * FROM info WHERE usernames ='".$_SESSION['username']."'");
	$rowbill = $resultbill->fetch();
	

?>
<!DOCTYPE html>
<head>
	<title>Restaurants</title>
	<link rel="stylesheet" href="account.css">
	<link rel="stylesheet" href="background.css">
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
				<a href="accountHome.php">My Account:</a>
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
		<p id="accounttit">Account:</p>
		<div id="accountmainbox">
		<form action="accountinfo.php">
			<fieldset>
				<p class="head">Name/Email/Password</p>
				<hr>
				<label class="info" for="username">Username: </label><input type="text" name="username" id="username" value=<?php echo "\"".$_SESSION['username']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /><br />
				<label class="info" for="fname">First Name: </label><input type="text" name="fname" id="fname" value=<?php echo "\"".$row['firstname']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /><br /> 
				<label class="info" for="lname">Last Name: </label><input type="text" name="lname" id="lname" value=<?php echo "\"".$row['lastname']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /><br /> 
				<label class="info" for="email">Email: </label><input type="text" name="email" id="email" value=<?php echo "\"".$row['email']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="password">Password: </label> <input type="password" name="password" id="password" value=<?php echo "\"".$row['password']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<p class="head">Billing Address</p>
				<hr>
				<label class="info" for="baddress">Address: </label><input type="text" name="baddress" value=<?php echo "\"".$rowbill['billadd']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="binfo">City: </label> <input type="text" name="bcity" id="bcity" value=<?php echo "\"".$rowbill['billcity']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="bstate">State: </label><input type="text" name="bstate" id="bstate" value=<?php echo "\"".$rowbill['billST']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="bzip">Zip: </label> <input type="text" name="bzip" id="bzip" value=<?php echo "\"".$rowbill['zip']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="bcountry">Country: </label> <input type="text" name="bcountry" id="bcountry" value=<?php echo "\"".$rowbill['country']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="bphone">Phone Number: </label><input type="tel" name="bphone" id="bphone" value=<?php echo "\"".$rowbill['phone']."\"" ?> readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<p class="head">Shipping Address<p>
				<hr>
				<label class="info" for="saddress">Address: </label> <input type="text" name="saddress" id="saddress" readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="scity">City: </label> <input type="text" name="scity" id="scity" readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="sstate">State: </label><input type="text" name="sstate" id="sstate" readonly="readonly" onfocus="this.blur();" size="30" /><br />
				<label class="info" for="szip">Zip: </label> <input type="text" name="szip" id="szip" readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="scountry">Country: </label><input type="text" name="scountry" id="scountry" readonly="readonly" onfocus="this.blur();" size="30" /> <br />
				<label class="info" for="sphone">Phone Number: </label> <input type="text" name="sphone" id="sphone" readonly="readonly" onfocus="this.blur();" size="30" /> <br />
			</fieldset>

		</div>
		
		
		
		</span>
		</div>
	</div>
</div>
</body>
</html>