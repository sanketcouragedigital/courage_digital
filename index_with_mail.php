<?php
switch (@$_GET['do'])
 {

 case "send":

      $fname = $_POST['fname'];
      $femail = $_POST['femail'];
      $fsendmail = $_POST['fsendmail'];

    if (!preg_match("/\S+/",$fname))
    {
      unset($_GET['do']);
      $message = "First Name required. Please try again.";
      break;
    }
    if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/",$femail))
    {
      unset($_GET['do']);
      $message = "Primary Email Address is incorrect. Please try again.";
      break;
    }
    
 
       $myemail = "tanveersure@couragedigital.com";
       $emess = "First Name: ".$fname."\n";
       $emess.= "Email 1: ".$femail."\n";
       $emess.= "Comments: ".$fsendmail;
       $ehead = "From: ".$femail."\r\n";
       $subj = "An Email from ".$fname.".";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = "Email was sent.";
       unset($_GET['do']);
       header("Location: index.html");
       
     break;
 
 default: break;
 }
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Courage Digital</title>
	<meta content="" name="description" />
	<meta content="" name="keywords" /><!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]--><script src="js/jquery.min.js"></script><script src="js/jquery.poptrox.min.js"></script><script src="js/jquery.scrolly.min.js"></script><script src="js/jquery.scrollgress.min.js"></script><script src="js/skel.min.js"></script><script src="js/init.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59779940-1', 'auto');
  ga('send', 'pageview');
</script>	
	<noscript>
			<link rel="stylesheet" href="couragedigital.com/css/skel.css" />
			<link rel="stylesheet" href="couragedigital.com/css/style.css" />
			<link rel="stylesheet" href="couragedigital.com/css/style-wide.css" />
			<link rel="stylesheet" href="couragedigital.com/css/style-normal.css" />
		</noscript><!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body><!-- Header -->
<header id="header"><!-- Logo --><!-- <h1 id="logo">Big Picture</h1> --><img alt="Courage Digital" src="images/courage_digital_logo.png" /> <!-- Nav -->
<nav id="nav">
<ul>
	<li><a href="#intro">Home</a></li>
	<li><a href="#one">What We Do</a></li>
	<li><a href="#work">Our Work</a></li>
	<li><a href="#careers">Work With Us</a></li>
	<li><a href="#contact">Contact Us</a></li>
</ul>
</nav>
</header>
<!-- Intro -->

<section class="main style1 dark fullscreen" id="intro">
<div class="content container 75%">
<header>
<h2>Roarrr !!</h2>
</header>

<p>Welcome to <strong>Courage Digital</strong> a complete digital solutions agency. We are a bunch of crazy, creative tech geeks working together to build world class digital solutions.</p>

<footer><a class="button style2 down" href="#one">More</a></footer>
</div>
</section>
<!-- One -->

<section class="main style2 right dark fullscreen" id="one">
<div class="content box style2">
<header>
<h2>What We Do ?</h2>
</header>

<p><strong>Drink Coffee and create magic ! </strong>We help build any kind of digital solution. If you think techology can solve your problem, then Courage Digital is your shop. Some of our services include:</p>
<strong>
<ul>
							<li> Market Analysis</li>
							<li> Focus Group </li>
							<li> Usability Testing</li>
							<li> Strategy and Planning</li>
							<li> User experience workflows</li>
							<li> Information Architecture</li>
							<li> Usability</li>
							<li> Wireframes</li>
							<li> Interactive and Visual Design</li>
							<li> Creative concepting and Brand Development</li>
							<li> Responsive Web Design and Web/Desktop/Mobile Software Development</li>
							<li> E-commerce web development</li>
							<li> Software Quality Testing</li>	

</ul>
</strong>
</div>
<a class="button style2 down anchored" href="#work">Next</a></section>
<!-- Two --><!--  --><!-- Work -->

<section class="main style3 primary" id="work">
<div class="content container">
<header>
<h2>Our Work</h2>

<p>Our work will be uploaded shortly.</p>
</header>
<!-- Lightbox Gallery  --><!-- <div class="container 75% gallery">
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/01.jpg" class="image fit from-left"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div>
							</div>
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/03.jpg" class="image fit from-left"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a></div>
							</div>
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a></div>
							</div>
						</div>
 --></div>
 <!--Careers -->
 
 <section id="careers" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Come work with us</h2>
					</header>
					<p>We are currently looking to hire for the following positions: </p>
					<strong>
					<ul>
						<li>Web/Javascript developer</li>
						<li>Digital Marketing </li>
						<li>Content Writer</li>
					
					</ul>
					</strong>
					<p>If you think you would enjoy working in any of these roles please send your resume to: <strong>careers@couragedigital.com </strong></p>
				</div>
				<a href="#contact" class="button style2 down anchored">Next</a>
			</section>
 
 <!--End of Careers -->
</section>
<!-- Contact -->

<section class="main style3 secondary" id="contact">
<div class="content container">
<header>
<h2>Roarr to us.</h2>

<p>If you think we can help you get into the digital world, please write to us. We are always hungry for work.</p>

<p>Office Address: 16 Bussa Industrial Estate, Near Century Bazar, Worli, Mumbai 400025 India</p>
<p>Office Address (USA) : 2051 Thomas Ave, San Francisco, CA 94124

</header>

<div class="box container 75%"><!-- Contact Form -->
<form action=action="index_with_mail.php?do=send" method="POST">
<p>* Required fields</p>
<?php
	if ($message) echo '<p style="color:red;">'.$message.'</p>';
?>
<div class="row 50%">
<div class="6u"><input name="fname" placeholder="Name" type="text" value="<?php echo @$fname ?>" /></div>

<div class="6u"><input name="femail" placeholder="Email" type="email" value="<?php echo @$femail ?>"/></div>
</div>

<div class="row 50%">
<div class="12u"><textarea name="fsendmail" placeholder="Message" rows="6"><?php if($fsendmail) echo $fsendmail; ?></textarea></div>
</div>

<div class="row">
<div class="12u">
<ul class="actions">
	<li><input type="submit" value="Send Message" /></li>
</ul>
</div>
</div>
</form>
</div>
</div>
</section>
<!-- Footer -->

<footer id="footer"><!-- Icons -->
<ul class="actions">
	<li><a class="icon fa-twitter" href="https://twitter.com/CourageDigital"><span class="label">Twitter</span></a></li>
	<li><a class="icon fa-facebook" href="https://www.facebook.com/pages/Courage-Digital/334985203355948"><span class="label">Facebook</span></a></li>
	<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
	<!-- <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li> -->
</ul>
<!-- Menu -->

<ul class="menu">
	<li>&copy; Courage Digital Solutions</li>
	<li>Design:HTML5UP</li>
</ul>
</footer>
</body>
</html>