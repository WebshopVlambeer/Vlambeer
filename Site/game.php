<?php
	switch ($_GET['game']) {
		case 'game1':
			require "views/games/game1.php";
			break;
		
		default:
			setMsg("No game set in URL.", 2);
			header("location:".ROOT."/index/");
			break;
	}
?>