<?php
	session_start();
	$title = "Admin Panel";

	require_once "inc/header.php";

	# Handling invalid pagevisits.

    $custQuery = $db->query("SELECT * FROM tbl_customers");

/*
	//gebruiker toevoegen//

/*     //gebruiker deleten//

     	if (! isset($_GET['customer_id'])){
    		header ('location: admim.view.php');
		}else{
   			$id = intval($_GET['customer_id']);
    		$sql = "DELETE FROM  WHERE customer_id = '$customer_id'";

    		if(! $query = DB::query($sql)){
        	echo 'Fout bij verwijderen van item';
    		}else{
       		header('location: index.php');
    }
}*/

	# Logic for shop.php
	
	require_once "views/admin.view.php";
	require_once "inc/footer.php";
?>