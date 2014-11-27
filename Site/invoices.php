<?php
	session_start();
	$title = "Home";
	require_once "app/config.php";
	require_once "app/functions.php";
	require_once "libs/Database.php";
	require_once "libs/User.php";
	require_once "inc/header.php";


	$result = $db->query("SELECT * FROM tbl_invoices");
	
	require_once "views/invoices.view.php";
	require_once "inc/footer.php";
?>