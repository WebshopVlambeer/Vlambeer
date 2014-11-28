<?php
	session_start();
	$title = "Whoopsie!";

	require "inc/header.php";

	# Handling invalid pagevisits.

	echo "oops!";
	# Logic for error.php
	
	require "views/error.view.php";
	require "inc/footer.php";
?>