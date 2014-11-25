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
		<link rel="icon" type="image/x-icon" href="<?= ASSETS ?>/img/favicon.ico">
		
		<!-- Meta tags: -->
		<meta charset="UTF-8">
		<meta name="application-name" content="Webshop Vlambeer">
		<meta name="author" 					content="Vlambeer">
		<meta name="description" 			content="The new webshop for Vlambeer, commissioned by Radius College">
		<meta name="keywords" 				content="vlambeer, vlambeer shop, shop, webshop">
	</head>

	<body>
		<div class="wrapper">
			<header>
				<div class="header-top">
					<div class="container">
						<div class="header-top-company">
							<img src="<?= ASSETS ?>/img/logo.png" alt="Vlambeer Logo" class="header-top-logo">
							<h1 class="header-top-name">VLAMBEER</h1>
							<h2 class="header-top-desc">Bringing back arcade games since 1955.</h2>
						</div>

						<div class="header-top-cart">
							<img src="<?= ASSETS ?>/img/cart.png" alt="Shopping Cart" class="header-top-cart">
						</div>
					</div>
				</div>

				<div class="header-bottom">
					<div class="container">
						<ul class="left">
							<li><a href="<?= ROOT ?>">Home</a></li>
							<li><a href="<?= ROOT ?>/shop">Shop</a></li>
							<li><a href="<?= ROOT ?>/contact/">Contact</a></li>
							<li>
								<form action="<?= ROOT ?>/controllers/searchController.php">
									<input type="text" placeholder="Search..." name="query">
									<input type="submit" hidden>
								</form>
							</li>
						</ul>

						<ul class="right">
							<?php if (!isset($_SESSION['name'])) { ?>
								<li><a href="<?= ROOT ?>/login/">Login</a></li>
							<?php } else { ?>
								<li><a href="<?= ROOT ?>/account/">Account</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</header>

			<div class="content">