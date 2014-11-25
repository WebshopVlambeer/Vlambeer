<?php

if (!isset($_POST['loginUser']) )
{
	header ('location: login.php?1');

}

if ( empty($_POST['email']) || empty($_POST['password']))
{
	header ('location: login.php?2');
}

$stmt = $con->prepare("SELECT * FROM users WHERE username = :email  && password = :password");
$stmt->bindParam(":email", trim($_POST['email']));
$stmt->bindParam(":password",( $_POST['password']));
$stmt->execute();

if (!$user = $stmt->fetch(PDO::FETCH_OBJ) )
{
	header ('location: login.php');
	die();
}
session_start();
$_SESSION['name'] = $user->username;
$_SESSION['role_id'] = $user->role_id;
header ('location: index.php');
die();
?>