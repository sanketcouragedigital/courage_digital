<?php
<<<<<<< HEAD
class ContactData
=======
class UnitTesting
>>>>>>> origin/master
{
	
	private $fname;
	private $femail;
	private $fsendmail;
	private $fenquiry;
	private $fphone;
	private $fcountry;
<<<<<<< HEAD
	private $data;
	
	public function processContactForm($fname,$femail,$fenquiry,$fcountry,$fphone,$fsendmail)
    {
		if ($fenquiry == 'business') {

            $this->sendToDB($fname,$femail,$fcountry,$fphone,$fsendmail);
        }

        else if($fenquiry == 'job') {
            $this->sendEmail($fname,$femail,$fsendmail);

        }
	}

	public function extractIncomingParams($fname,$femail,$fenquiry,$fcountry,$fphone,$fsendmail) {
		$fname = $fname;
		$femail = $femail;
		$fsendmail = $fsendmail;
		$fenquiry= $fenquiry;
        $fcountry = $fcountry;
        $fphone = $fphone;
        $this->processContactForm($fname,$femail,$fenquiry,$fcountry,$fphone,$fsendmail);

	}
	
	public function sendToDB($fname,$femail,$fcountry,$fphone,$fsendmail) {
			
		include_once ('db_config.php');
		$query = "INSERT INTO contact_us(name,email,country,phone,message)VALUES('$fname','$femail','$fcountry','$fphone','$fsendmail')";
		$result = mysqli_query($con,$query);
		if ($result) {
			echo "Successfully send message";
		} else {
			die('Error: ' . mysqli_error($con));
		}
		mysqli_close($con);
		unset($_GET['do']);
		//header("Location: thank_you.php");
	}
	
	public function sendEmail($fname,$femail,$fsendmail) {
		$myemail = "sanketdhotre@couragedigital.com";
		$emess = "First Name: ".$fname."\n";
		$emess.= "Email: ".$femail."\n";
		$emess.= "Comments: ".$fsendmail;
		$ehead = "From: ".$femail."\r\n";
		$subj = "An Email from ".$fname.".";
		mail("$myemail","$subj","$emess","$ehead");
		unset($_GET['do']);
		//header("Location: thank_you.php");
	}
=======
	private $myemail;
	private $func;
	private $name = 'Sanket';
	
	
	public function processContactForm($fname)
	{
		//extractIncomingParams();
		
		/*if ($fenquiry == 'business') {

			send_to_DB();
		}
		
		else if($fenquiry == 'job') {
			send_email();
			
		}*/  	    
	}

	public function extractIncomingParams() {
			
		if(isset($_POST['submit'])){   
			$fname = $_POST['fname'];
		    $femail = $_POST['femail'];
		    $fsendmail = $_POST['fsendmail'];
			$fenquiry= $_POST['fenquiry'];
				
		}
	}
	
	public function sendToDB() {
			
		include_once ('db_config.php');
			$fphone = $_POST['fphone'];
			$fcountry = $_POST['fcountry'];
			$query = "INSERT INTO contact_us(name,email,country,phone,message)VALUES('$fname','$femail','$fcountry','$fphone','$fsendmail')";
			$result = mysql_query($query);
			if ($result) {
				echo "Successfully updated database";
			} else {
				die('Error: ' . mysql_error($con));
			}
			mysql_close($con);
			unset($_GET['do']);
			header("Location: thank_you.php");
	}
	
	public function sendEmail() {
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
	}
	
	function getName()
   {
     return $this->name;
   }   

>>>>>>> origin/master
}
?>