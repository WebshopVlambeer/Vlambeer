<?php
	session_start();
	$title = "Whoopsie!";

	require "inc/header.php";

	# Handling invalid pagevisits.
	$url = $_SERVER['REQUEST_URI'];

	echo "<h1>Oops! Looks like the page ".$url." doesn't exist!</h1>";

	require "inc/footer.php";
?>