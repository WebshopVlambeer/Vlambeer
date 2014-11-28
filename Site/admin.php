<?php
	session_start();
	$title = "Admin Panel";
// UNDO KNOP BIJ MESSAGE EN GEEN DELETE
	require_once "inc/header.php";
  require_once "controllers/userEditController.php";
	# Handling invalid pagevisits.ss
if(!isset($_GET['action'])){
    $custQuery = $db->query("SELECT * FROM tbl_customers WHERE status = 1");
} elseif(isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['cid'])){
    $bind = ["cid" => $_GET['cid']];
    $custQuery = $db->query("SELECT * FROM tbl_customers WHERE customer_id = :cid ", $bind);

    if(isset($_POST['editCustSubmit']) && 
      !empty($_POST['companyname']) && 
      !empty($_POST['residence']) && 
      !empty($_POST['firstname']) && 
      !empty($_POST['insertion']) && 
      !empty($_POST['lastname']) && 
      !empty($_POST['zip_code']) && 
      !empty($_POST['telephone']) && 
      !empty($_POST['password']) && 
      !empty($_POST['house_number']) && 
      !empty($_POST['street']) && 
      filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
      $bind = ["cid" => $_GET['cid'],
               "compn" => $_POST['companyname'],
               "resid" => $_POST['residence'],
               "frst" => $_POST['firstname'],
               "insrt" => $_POST['insertion'],
               "lst" => $_POST['lastname'],
               "zip" => $_POST['zip_code'],
               "tel" => $_POST['telephone'],
               "pass" => $_POST['password'],
               "house" => $_POST['house_number'],
               "street" => $_POST['street'],
               "email" => $_POST['email']];
       if($db->query("UPDATE tbl_customers SET companyname = :compn, residence = :resid, firstname = :frst,
        insertion = :insrt, lastname = :lst, zip_code = :zip, telephone = :tel, password = :pass, house_number = :house,
        street = :street, email = :email WHERE customer_id = :cid",$bind)){
           setMsg("You have succesfully updated customer " . $_POST['companyname'], 1);
            header('location:' . ROOT .  '/admin/');
           die();
    }
    }//gebruiker toevoegen//
} elseif(isset($_GET['action']) && $_GET['action'] == 'add'){

    if(isset($_POST['addCustSubmit']) && !empty($_POST['companyname']) && !empty($_POST['residence']) && !empty($_POST['firstname'])
        && !empty($_POST['insertion']) && !empty($_POST['lastname']) && !empty($_POST['zip_code']) && !empty($_POST['telephone'])
        && !empty($_POST['password']) && !empty($_POST['house_number']) && !empty($_POST['street']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $hpass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $bind = ["compn" => $_POST['companyname'],
            "resid" => $_POST['residence'],
            "frst" => $_POST['firstname'],
            "insrt" => $_POST['insertion'],
            "lst" => $_POST['lastname'],
            "zip" => $_POST['zip_code'],
            "tel" => $_POST['telephone'],
            "pass" => $hpass,
            "house" => $_POST['house_number'],
            "street" => $_POST['street'],
            "email" => $_POST['email']];
        if($db->query("INSERT INTO tbl_customers SET companyname = :compn, residence = :resid, firstname = :frst,
        insertion = :insrt, lastname = :lst, zip_code = :zip, telephone = :tel, password = :pass, house_number = :house,
        street = :street, email = :email",$bind)){
            setMsg("You have succesfully added customer " . $_POST['companyname'], 1);
            header('location:' . ROOT .  '/admin/');
            die();
        }
    }//gebruiker deleten//
} elseif(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['cid'])){
    $bind = ["cid" => $_GET['cid']];
    $select = $db->query("SELECT * FROM tbl_customers WHERE customer_id = :cid ", $bind);
        setMsg("You have succesfully deleted customer " . $select[0]->companyname, 1);
    if($db->query("UPDATE tbl_customers SET status = 0 WHERE customer_id = :cid ", $bind)){
        header('location:' . ROOT .  '/admin/');
        die();
    }
} else {
    setMsg("Something went wrong!", 2);
    header("location:".ROOT."/admin/");
    die();
}
	# Logic for shop.php
	
	require_once "views/admin.view.php";
	require_once "inc/footer.php";
