<?php
	function setMsg($msg, $lvl) {
		$_SESSION['msg'] = $msg;
		$_SESSION['lvl'] = $lvl;
	}

	function getMsg() {
		if (isset($_SESSION['msg']) && isset($_SESSION['lvl'])) {
			switch ($_SESSION['lvl']) {
				case 1:
					return "<div class=\"msg msg-success left\">".$_SESSION['msg']."<span class=\"msg-close right\">x</span></div>";
					break;

				case 2:
					return "<div class=\"msg msg-warn left\">".$_SESSION['msg']."<span class=\"msg-close right\">x</span></div>";
					break;

				case 3:
					return "<div class=\"msg msg-error left\">".$_SESSION['msg']."<span class=\"msg-close right\">x</span></div>";
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