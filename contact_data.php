<?php	      
	$fname = $_POST['fname'];
    $femail = $_POST['femail'];
    $fsendmail = $_POST['fsendmail'];
	$fenquiry= $_POST['fenquiry'];
	 
    switch($fenquiry){
		case 'business':
			include_once('db_config.php');
						
			$fphone = $_POST['fphone'];
			$fcountry = $_POST['fcountry'];
			$query="INSERT INTO contact_us(name,email,country,phone,message)VALUES('$fname','$femail','$fcountry','$fphone','$fsendmail')";
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