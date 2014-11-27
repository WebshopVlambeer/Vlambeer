<?php
	session_start();
	$title = "Login";
	require_once "app/config.php";
	require_once "app/functions.php";
	require_once "libs/Database.php";
	require_once "libs/User.php";
	require_once "inc/header.php";
	# Handling invalid pagevisits.         



	# Logic for shop.php
	
	require_once "views/login.view.php";
	require_once "inc/footer.php";
?>