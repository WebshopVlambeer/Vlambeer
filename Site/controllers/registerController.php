<?php
  if (isset($_POST['companyname'])
      && isset($_POST['residence'])
      && isset($_POST['firstname'])
      && isset($_POST['lastname'])
      && isset($_POST['zipcode'])
      && isset($_POST['telephone'])
      && isset($_POST['email'])
      && isset($_POST['password'])
      && isset($_POST['house_number'])
      && isset($_POST['street'])) {
  $companyname = $_POST['companyname'];
  $residence = $_POST['residence'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $zipcode = $_POST['zipcode'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $house_number = $_POST['house_number'];
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
    "house_number" => $house_number,
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
    house_number,
    street,
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
    :house_number,
    :street,
    :insertion)", $bind);
}

?>
