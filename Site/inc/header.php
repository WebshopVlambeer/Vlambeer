<?php
	require_once "app/config.php";
	require_once "app/functions.php";
	require_once "libs/Database.php";
	require_once "libs/Shoppingcart.php";
	require_once "libs/User.php";

	$db   = new Database(HOST, DB_NAME, USER, PASS);
	$cart = new Shoppingcart();
	$user = new User();
?>
<!DOCTYPE html>
<html lang="EN">
	<head>
		<title>Vlambeer | <?= $title ?></title>
	</head>

	<body>
		
	</body>
</html>