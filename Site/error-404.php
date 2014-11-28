<?php
	session_start();
	$title = "Whoopsie!";

	require_once "inc/header.php";

	# Handling invalid pagevisits.

	echo "oops!";
	# Logic for error.php
	
	require_once "views/error.view.php";
	require_once "inc/footer.php";
?>