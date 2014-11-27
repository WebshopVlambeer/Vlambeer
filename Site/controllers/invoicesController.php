<?php
	session_start();
	require_once "../app/config.php";
	require_once "../app/functions.php";
	require_once "../libs/Database.php";
	require_once "../libs/User.php";


	$result = $db->query("SELECT * FROM tbl_invoices");

	echo '<td><a href="../invoices.php?customer_id='.$row['customer_id']. '">View</a></td>';


?>