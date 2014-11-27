<?php
	session_start();
	require_once "../app/config.php";
	require_once "../app/functions.php";
	require_once "../libs/Database.php";
	require_once "../libs/User.php";
	
	if (isset($_POST['loginSubmit']) && filter_var($_POST['loginName'], FILTER_VALIDATE_EMAIL)&& empty($_POST['loginPass']))  {
echo'je hebt succesvol ingelogd';}
else{
	echo 'je hebt verkeerd ingelogd'
}
		$bind = ['user' => $_POST['loginName']];
		$query = $db->query("SELECT * FROM tbl_customers WHERE email = :user", $bind);
		
		if ($db->getRows() == 1) {		
			if (password_verify($pass, $query[0]->password)) {
				// and if active
				session_destroy();
				session_start();
				$_SESSION['name'] = $user;
				$_SESSION['role'] = $query[0]->userrole;
				header("location:".ROOT);
			}
		}
	
	}
	require "../views/login.view.php";
//
	unset($_SESSION['msg']);
	unset($_SESSION['msglvl']);