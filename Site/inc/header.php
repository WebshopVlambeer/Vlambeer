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
		<title>Vlambeer / <?= $title ?></title>
		<link rel="stylesheet" href="<?= ASSETS ?>/css/main.css">
		
		<!-- Meta tags: -->
		<meta charset="UTF-8">
		<meta name="application-name" content="Webshop Vlambeer">
		<meta name="author" 					content="Vlambeer">
		<meta name="description" 			content="The new webshop for Vlambeer, commissioned by Radius College">
		<meta name="keywords" 				content="vlambeer, vlambeer shop, shop, webshop">
	</head>

	<body>
		<div class="wrapper">