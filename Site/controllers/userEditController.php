<?php
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

    $editQuery = $db->query("UPDATE tbl_customers SET companyname = :compn, residence = :resid, firstname = :frst,
      insertion = :insrt, lastname = :lst, zip_code = :zip, telephone = :tel, password = :pass, house_number = :house,
      street = :street, email = :email WHERE customer_id = :cid", $bind);

    if($editQuery){
      setMsg("You have succesfully updated customer " . $_POST['companyname'], 1);
      header('location:' . ROOT .  '/admin/');
      die();
    }
  }

  $user->edit("uid", $values);
?>