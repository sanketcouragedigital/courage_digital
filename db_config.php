<?php
	$db_host = 'localhost'; //hostname
	$db_user = 'root'; // username
	$db_password = ''; // password
	$db_name = 'courage_digital'; //database name
	
<<<<<<< HEAD
	$con=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Failed to connect to MySQL:".mysql_error());
	//mysql_select_db($db_name,$con) or die("Failed to connect to MySQL:".mysql_error());
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
=======
	$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to MySQL:".mysql_error());
	mysql_select_db($db_name,$con) or die("Failed to connect to MySQL:".mysql_error());
>>>>>>> origin/master
?>