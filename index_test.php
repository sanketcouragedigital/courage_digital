<?php
switch (@$_GET['do'])
 {

 case "send":

	  $fname = $_POST['name'];
      $femail = $_POST['email'];
      $fsendmail = $_POST['email'];

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
       $emess.= "Email ".$femail."\n";
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
<!--
	Big Picture by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Courage Digital</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-normal.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<!-- <h1 id="logo">Big Picture</h1> -->
					<img src="images/courage_digital_logo.png" alt="Courage Digital" />
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Intro</a></li>
							<li><a href="#one">What We Do</a></li>
							<li><a href="#work">Our Work</a></li>
							<li><a href="#contact">Contact Us</a></li>
						</ul>
					</nav>

			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container 75%">
					<header>
						<h2>Roarrr !!</h2>
					</header>
					<p>Welcome to <strong>Courage Digital</strong> a complete digital solutions agency. We like to keep it short and simple and so, enough said!
					We are a bunch of crazy, creative tech geeks working together to build world class digital solutions. 
					</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
		
		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>What We Do ?</h2>
					</header>
					<p><strong>Drink Coffee and create magic ! </strong>We build all kinds of digital solutions. If you think techology can solve your problem, then Courage Digital is your shop. Some of our services are : </p>
					<!-- <strong>
						
					Market Analysis, Focus Group, Usability Testing, Strategy and Planning, User Experience Workflows, Information Architecture, Usability, Wireframes, Interactive and Visual Design, Creative concepting and Brand Development,Creative concepting and Brand Development, Responsive Web Design and Web/Mobile/Desktop Software Development, E-commerce web development, Software Quality Testing

					</strong> -->
					<ul>
						<strong>
							
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

						</strong>
					</ul>

				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>
		
		<!-- Two -->
			<!-- <section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Who I Am</h2>
					</header>
					<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. 
					Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu, 
					id varius justo euismod in. Curabitur egestas consectetur magna.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section> -->
			
		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Our Work</h2>
						<p>Below are a few of our clients. We will be adding more soon.</p>
					</header>
					
					<!-- Lightbox Gallery  -->
						<div class="container 75% gallery">
							<div class="row 0% images">
								<div class="12u"><a href="google.com" class="image fit from-left"><img src="images/thumbs/kanan_logo.gif" title="The Anonymous Red" alt="KananKnitwear" /></a></div>
								<!-- <div class="6u"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div> -->
						<!-- 	</div>
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/03.jpg" class="image fit from-left"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a></div>
							</div>
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a></div>
							</div>
						</div>
 -->
				</div>
			</section>
			
		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Roarr to us.</h2>
						<p>If you think we can help you get into the digital world, please write to us. We are always hungry for work.</p>
						<p>Office Address: 16 Bussa Industrial Estate, Near Century Bazar, Worli, Mumbai 400025 India </p>
					</header>
					<div class="box container 75%">
					
					<!-- Contact Form -->
							<form action="index.php?do=send" method="POST">
								<p>* Required fields</p>
								<?php
								   if ($message) echo '<p style="color:red;">'.$message.'</p>';
								?>
								<div class="row 50%">
									<div class="6u"><input type="text" name="name" placeholder="Name" value="<?php echo @$name ?>" /></div>
									<div class="6u"><input type="email" name="email" placeholder="Email" value="<?php echo @$email ?>"/></div>
								</div>
								<div class="row 50%">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6"><?php if($fsendmail) echo $fsendmail; ?></textarea></div>
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
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<!-- <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li> -->
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Courage Digital Solutions</li><li>Design:HTML5UP</a></li>
					</ul>
			
			</footer>

	</body>
</html>