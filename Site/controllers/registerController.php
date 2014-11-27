<?php
  require "../app/config.php";
  require "../app/functions.php";
  require "../libs/Database.php";
  require "../libs/User.php";
  $db = new Database(HOST, DB_NAME, USER, PASS);

    if (isset($_POST['regCompanyname'])
      && isset($_POST['regResidence'])
      && isset($_POST['regFirstname'])
      && isset($_POST['regLastname'])
      && isset($_POST['regZipcode'])
      && isset($_POST['regTelephone'])
      && isset($_POST['regEmail'])
      && isset($_POST['regPassword'])
      && isset($_POST['regHouse_number'])
      && isset($_POST['regStreet'])) 
    {
    $companyname =    $_POST['regCompanyname'];
    $residence =      $_POST['regResidence'];
    $firstname =      $_POST['regFirstname'];
    $lastname =       $_POST['regLastname'];
    $zipcode =        $_POST['regZipcode'];
    $telephone =      $_POST['regTelephone'];
    $email =          $_POST['regEmail'];
    $password =       $_POST['regPassword'];
    $house_number =   $_POST['regHouse_number'];
    $street =         $_POST['regStreet'];
    $insertion =      $_POST['regInsertion'];

  $bind = [
    "regCompanyname"  => $companyname,
    "regResidence"    => $residence,
    "regFirstname"    => $firstname,
    "regLastname"     => $lastname,
    "regZipcode"      => $zipcode,
    "regTelephone"    => $telephone,
    "regEmail"        => $email,
    "regPassword"     => password_hash($password, PASSWORD_DEFAULT),
    "regHouse_number" => $house_number,
    "regStreet"       => $street,
    "regInsertion"    => $insertion
  ];
    $insertQuery = $db->query("INSERT INTO tbl_customers (
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
    :regCompanyname,
    :regResidence,
    :regFirstname,
    :regLastname,
    :regZipcode,
    :regTelephone,
    :regEmail,
    :regPassword,
    :regHouse_number,
    :regStreet,
    :regInsertion)", $bind);

    if ($insertQuery) {
      setMsg("Successfully registered as "$bind['regFirstname'].$bind['regLastname']."!", 1);
      header("location:".ROOT."/login/");
      die();
    } else {
      setMsg("Oops! Something went wrong while trying to register!", 3);
      header("location:".ROOT."/register/");
      die();
    }
}

?>
