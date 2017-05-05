<?php
	header("Content-type:text/html;charset=utf-8");
	if (null !== ($_SESSION["id"])) {
		echo $_SESSION["id"];
	} else {
		echo "";
	}
?>