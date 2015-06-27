<?php
	$db_host = 'localhost'; //hostname
	$db_user = 'root'; // username
	$db_password = ''; // password
	$db_name = 'courage_digital'; //database name
	
	$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to MySQL:".mysql_error());
	mysql_select_db($db_name,$con) or die("Failed to connect to MySQL:".mysql_error());
?>