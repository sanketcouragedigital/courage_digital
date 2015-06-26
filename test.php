<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'courage_digital');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL:".mysql_error());
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL:".mysql_error());
	
	$nameErr=$emailErr="";
	$name=$email=$message="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
  	 	if (empty($_POST["name"])) {
     		$nameErr = "Name is required";
   		}
   		else {
     		$name = $_POST["name"];
		}
		if (empty($_POST["email"])) {
     		$emailErr = "Email is required";
   		}
   		else {
     		$email = $_POST["email"];
		}
		if (empty($_POST["message"])) {
     		$message = "";
   		}
   		else {
     		$message = $_POST["message"];
		}
	}
	$message=$_POST['message'];
	
	$query="INSERT INTO contact_us(name,email,message)VALUES('$name','$email','$message')";
	$result=mysql_query($query);
	if($result)
		{
			echo "Successfully updated database";
		}
	else
		{
			die('Error: '.mysql_error($con));
		}
	mysql_close($con);
	header("Location: index.html#contact");

?>