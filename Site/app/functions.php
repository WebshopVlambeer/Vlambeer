<?php
	function setMsg($msg, $lvl) {
		$_SESSION['msg'] = $msg;
		$_SESSION['lvl'] = $lvl;
	}

	function getMsg() {
		if (isset($_SESSION['msg']) && isset($_SESSION['lvl'])) {
			switch ($_SESSION['lvl']) {
				case 1:
					return "<div class=\"msg-container\"><div class=\"container\"><p class=\"left msg msg-warn\">EEN MESSAGE</p><a class=\"msg-close right\">x</a></div></div>";
					break;

				case 2:
					return "<div class=\"msg-container\"><div class=\"container\"><p class=\"left msg msg-warn\">EEN MESSAGE</p><a class=\"msg-close right\">x</a></div></div>";
					break;

				case 3:
					return "<div class=\"msg-container\"><div class=\"container\"><p class=\"left msg msg-warn\">EEN MESSAGE</p><a class=\"msg-close right\">x</a></div></div>";
					break;
				
				default:
					return false;
					break;
			}
		} else {
			return false;
		}
	}
?>