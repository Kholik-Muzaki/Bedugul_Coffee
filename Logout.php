<?php

	SESSION_START();
	SESSION_UNSET();
	SESSION_DESTROY();
	header("Location:Login.php");
	
	exit;

?>