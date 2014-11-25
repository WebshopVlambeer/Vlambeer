<?php
	session_start();
	$title = "Register";

	require_once "inc/header.php";

	if (isset($_POST['companyname'])
		&& isset($_POST['residence'])
		&& isset($_POST['firstname'])
		&& isset($_POST['lastname'])
		&& isset($_POST['zipcode'])
		&& isset($_POST['telephone'])
		&& isset($_POST['email'])
		&& isset($_POST['password'])
		&& isset($_POST['housenumber'])
		&& isset($_POST['street'])) {
		$companyname = $_POST['companyname'];
		$residence = $_POST['residence'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$zipcode = $_POST['zipcode'];
		$telephone = $_POST['telephone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$housenumber = $_POST['housenumber'];
		$street = $_POST['street'];
		$insertion = $_POST['insertion'];

		$bind = [
			"companyname" => $companyname,
			"residence" => $residence,
			"firstname" => $firstname,
			"lastname" => $lastname,
			"zipcode" => $zipcode,
			"telephone" => $telephone,
			"email" => $email,
			"password" => password_hash($password, PASSWORD_DEFAULT),
			"housenumber" => $housenumber,
			"street" => $street,
			"insertion" => $insertion
		];
		$db->insert("INSERT INTO users (
			companyname,
			residence,
			firstname,
			lastname,
			zip_code,
			telephone,
			email,
			password,
			house_number
			street
			insertion)
			VALUES (
			:companyname,
			:residence,
			:firstname,
			:lastname,
			:zipcode,
			:telephone,
			:email,
			:password,
			:housenumber,
			:street,
			:insertion)", $bind);
	}
	?>

	# Handling invalid pagevisits.


	# Logic for shop.php

	require_once "views/register.view.php";
	require_once "inc/footer.php";
?>
