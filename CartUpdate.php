<?php
	session_start();
	
	if(isset($_GET["emptycart"]) && $_GET["emptycart"] == 1) {
		$return_url = base64_decode($_GET["return_url"]);
		session_destroy();
		header('Location:'.$return_url);
	}
	if(isset($_POST["type"]) && ($_POST["type"]=='add')) {
		$product_code = filter_var($_POST["foodid"], FILTER_SANITIZE_STRING);
		$product_qty = filter_var($_POST["qty"], FILTER_SANITIZE_NUMBER_INT);
		$return_url = base64_decode($_POST["return_url"]);
		if(isset($_SESSION["products"])) {
			$qty = $qty + 1;
			$_SESSION['product'][$qty]++;
		}
		header('Location:'.$return_url);
	}
?>