<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	$db = new PDO("mysql:dbname=menu;host=localhost", "mattning", "password");
	$rows = $db->query("SELECT * FROM main");

?>

<!DOCTYPE html>
<head>
	<title> Restaurants Name </title>
	<link rel="stylesheet" href="menuTemplateCart.css">
	<link rel="stylesheet" href="background.css">
	<link rel="stylesheet" href="shoppingcart.css">
	<link rel="stylesheet" href="menubar.css">
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
			<h2 id="menuTit"> BURITTOS </h2>
			<div class="clear">
			</div>
			<div id="leftCol">
			<!--	<h2> Menu </h2> -->
				<nav id = "sidenav">
					<ul>
						<li class = "menuchoice">
							<a href="menuHome.html">Menu</a>
						</li>
						
						<li class = "menuchoice">
							<a href="menuCart.php">Burritos</a>
						</li>
						
						<li class = "menuchoice">
							Tacos
						</li>
						
						<li class = "menuchoice">
							Nachos
						</li>
						
						<li class = "menuchoice">
							Beverages
						</li>
					</ul>
				</nav>
			</div>
			<div id = "right">
			<div id="rightCol">
			<?php
			$count = 0;
			foreach ($rows as $row) {
				if($count%2 === 0) {
				
				echo '<div class="row">';
			
					echo '<div class="column1">';
					echo '<p id="'.$row['id'].'" class="prodtit">'.$row['name'].'</p>';
						echo '<div class="prodinfo">';
							echo '<img class="prodpic" src="taco.jpg" alt="taco">';
						echo '</div>';
						echo '<div class="nonpic">';
							echo '<p> '.$row['description'].'</p>';
							echo '<p> Price: $'.$row['price'].' </p>';
						echo '</div>';
					echo '</div>';
				}

				else {
				
				echo '<div class="column2">';
					echo '<p id="'.$row['id'].'" class="prodtit">'.$row['name'].' </p>';
						echo '<div class="prodinfo">';
							echo '<img class="prodpic" src="taco.jpg" alt="taco">';
						echo '</div>';
						echo '<div class="nonpic">';
							echo '<p>'.$row['description'].' </p>';
							echo '<p> Price: $'.$row['price'].' </p>';
						echo '</div>';
					echo '</div>';
			
				echo '</div>';
				echo '<div class="clear">';
				echo '</div>';
				}
				$count++;
			}
			?>
			
			</div>
			</div>
			<div id = "cart">
				<div id = "carttitle">
					<h2 > SHOPPING CART </h2>
				</div>
				<p class="item"> Item 1 </p>
				<p class="item"> Item 2 </p>
				<p class="item"> Item 3 </p>
				<p class="item"> Item 4 </p>
				<p class="item"> Item 5 </p>
				<p class="item"> Item 6 </p>
				<button type="submit" name="Submit" value="Submit" class="submit"> EDIT CART </button> 
			</div>
		
		</span>
		</div>
	</div>
</div>
</body>
</html>