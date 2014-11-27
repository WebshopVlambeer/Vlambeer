<?php
	function setMsg($msg, $lvl) {
		$_SESSION['msg'] = $msg;
		$_SESSION['lvl'] = $lvl;
	}

	function getMsg() {
		if (isset($_SESSION['msg']) && isset($_SESSION['lvl'])) {
			switch ($_SESSION['lvl']) {
				case 1:
					return "<div class=\"msg msg-success\"><div class=\"container\"".$_SESSION['msg']."</div></div>";
					break;

				case 2:
					return "<div class=\"msg msg-warn\"><div class=\"container\"".$_SESSION['msg']."</div></div>";
					break;

				case 3:
					return "<div class=\"msg msg-error\"><div class=\"container\"".$_SESSION['msg']."</div></div>";
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