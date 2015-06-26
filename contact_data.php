<?php	      
	$fname = $_POST['fname'];
    $femail = $_POST['femail'];
    $fsendmail = $_POST['fsendmail'];
	$fenquiry= $_POST['fenquiry'];
	 
    switch($fenquiry){
		case 'business':
			$db_host = 'localhost'; //hostname
			$db_user = 'root'; // username
			$db_password = ''; // password
			$db_name = 'courage_digital'; //database name
				
			$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to MySQL:".mysql_error());
			$db=mysql_select_db($db_name,$con) or die("Failed to connect to MySQL:".mysql_error());
			
			$fphone = ($_POST['fphone']);
			
			$query="INSERT INTO contact_us(name,email,phone,message)VALUES('$fname','$femail','$fphone','$fsendmail')";
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
			unset($_GET['do']);
			header("Location: thank_you.php");
			break;				
		case 'job':
			$myemail = "sanketdhotre@couragedigital.com";
			$emess = "First Name: ".$fname."\n";
			$emess.= "Email: ".$femail."\n";
			$emess.= "Comments: ".$fsendmail;
			$ehead = "From: ".$femail."\r\n";
			$subj = "An Email from ".$fname.".";
			$mailsend=mail("$myemail","$subj","$emess","$ehead");
			$message = "emailsent";
			unset($_GET['do']);
			header("Location: thank_you.php");
			break;
		default:
			break;
    }       
?>