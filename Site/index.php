<?php
	session_start();
	
	// if($_SESSION['role_id'] == 2) {
	// 	$title = "Home";
	// 	echo "Welkom user";
	// } else {
	// 	header("location:".ROOT."/controllers/loginController.php");
	// }

	require_once "inc/header.php";

	# Handling invalid pagevisits.


	# Logic for shop.php
	
	require_once "views/home.view.php";
	require_once "inc/footer.php";
?>