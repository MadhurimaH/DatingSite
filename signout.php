<?php
	session_start();
	session_unset();

	echo "You have been logged out";
	header('Refresh: 2; URL = index.php');
?>