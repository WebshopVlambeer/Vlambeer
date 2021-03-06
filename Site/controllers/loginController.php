<?php
	session_start();
	require_once "../app/config.php";
	require_once "../app/functions.php";
	require_once "../libs/Database.php";
	require_once "../libs/User.php";
	$db = new Database(HOST, DB_NAME, USER, PASS);
 if (isset($_POST['loginSubmit']) && filter_var($_POST['loginName'], FILTER_VALIDATE_EMAIL) && !empty($_POST['loginPass']))  { 
		
	    $bind = ['user' => $_POST['loginName']];
		$query = $db->query("SELECT * FROM tbl_customers WHERE email = :user AND active = 1", $bind);
		
		if ($db->getRows() == 1) {		
			$pass = $_POST['loginPass'];
			if (password_verify($pass, $query[0]->password)) {
				// and if active
				session_destroy();
				session_start();
				$_SESSION['name'] = $user;
				$_SESSION['role'] = $query[0]->userrole;
				header("location:".ROOT . "/shop/");
			} else {
				setMsg('Je bent verkeerd ingelogd', 2);
				header("location:".ROOT . "/login/");
				die();
			}
			} else {
				setMsg('Je bent verkeerd ingelogd', 2);
				header("location:".ROOT . "/login/");
				die();
			}
	 	}
	
	
	

//
	unset($_SESSION['msg']);
	unset($_SESSION['msglvl']);