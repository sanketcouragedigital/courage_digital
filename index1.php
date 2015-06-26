<?php
switch (@$_GET['do'])
 {

 case "send":
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'courage_digital');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL:".mysql_error());
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL:".mysql_error());
	
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
    
 
    $query="INSERT INTO contact_us(name,email,message)VALUES('$fname','$femail','$fsendmail')";
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
       header("Location: index.php#contact");
	   
	   //echo "<meta http-equiv='refresh' content=\"0; url=index.php\">";

     break;
 	
 
 default: break;
 }
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Courage Digital | Complete Digital Agency Mumbai| Custom Software Development Mumbai</title>
	<meta content="Courage Digital is a complete one stop shop for all your digital needs. From custom software development, e-commerce, mobile applications, SEO, social media marketing we do it all." name="description" />
	<meta content="Digital Agency, Top Digital Agency, Custom Software Development, Ecommerce website, e-commerce website, mobile application development mumbai, top software development comapnies in india, top digital agencies in india" name="keywords" /><!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]--><script src="js/jquery.min.js"></script><script src="js/jquery.poptrox.min.js"></script><script src="js/jquery.scrolly.min.js"></script><script src="js/jquery.scrollgress.min.js"></script><script src="js/skel.min.js"></script><script src="js/init.js"></script>
	
	<noscript>
			<link rel="stylesheet" href="couragedigital.com/css/skel.css" />
			<link rel="stylesheet" href="couragedigital.com/css/style.css" />
			<link rel="stylesheet" href="couragedigital.com/css/style-wide.css" />
			<link rel="stylesheet" href="couragedigital.com/css/style-normal.css" />
		</noscript><!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59779940-1', 'auto');
  ga('send', 'pageview');
</script>
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

<p>Welcome to <strong>Courage Digital,</strong> a complete digital solutions agency. We are a bunch of crazy, creative tech geeks working together to build world class digital solutions with one common goal - to leverage technology to help grow your business.</p>

<footer><a class="button style2 down" href="#one">More</a></footer>
</div>
</section>
<!-- One -->

<section class="main style2 right dark fullscreen" id="one">
<div class="content box style2">
<header>
<h2>What We Do ?</h2>
</header>

<p><strong>Have lots of fun, drink coffee and create magic ! </strong>Our focus is to enable technology to do all the heavy lifting for you while you as the business owner can focus on profitability and growth. Some your load that we can take up:</p>
</strong>
<ul>
							
							<li><strong>Technical Consulting</strong>
							<p>You have come up with a great idea which requires <strong>technical expertise</strong>, or you have an existing technical product for which you need <strong>consultation</strong> or help with <strong>maintenance</strong>, look no more.
							   With Courage Digital's team and expertise we are qualified to guide you to make the correct decision.
							</p>

							</li>
							<li> <strong> Product Design </strong>
								<p>Our team of designers can help with designing almost anything around your product - <strong>User Interface</strong>, <strong>User Experience</strong>, <strong> Wire framing </strong>, <strong>Logo</strong>, <strong>Marketing Material</strong> etc.</p>
							</li>
							<li> <strong> Product Development </strong>
								<p>You need <strong>custom software development </strong> on the <strong>web</strong>, <strong>mobile</strong> or on <strong>desktop</strong>, our team of skilled <strong>software developers </strong> can deliver exactly what you are looking for. </p>	
							</li>
							<li> <strong>Roarr ! out to the Markets </strong>
								<p> Now that you have your product up and running it is time to let the world know about it. With a deadly combination of our designers and market guru's
									we give you an <strong>online social presence</strong> via various channels -  <strong>Facebook</strong>, <strong>Twitter</strong>, <strong>Instagram</strong>, <strong>Google+</strong>, <strong>SEO</strong> etc.  Leave all your <strong>online reputation</strong> and <strong>brand building</strong> to us. 
								</p>

							</li>
							<li>
								<strong>Constant Support</strong>
								<p> We don't believe at short term relationships. We always work with keeping a good, healthy long-lasting relationship with all our customers. Post our delivery, we would not leave your hand.
								We are always there to answer any of your queries any time of the day.
								</p>

							</li>
						

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
<!-- Lightbox Gallery  --><!--<div class="container 75% gallery">
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
						</div> -->
 </div>
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
						<li>Marketing Intern</li>
						<li>Content Creators</li>
					
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
<form action="index.php?do=send" method="POST">
<p>* Required fields</p>

<div class="row 50%">
<div class="6u"><input name="fname" placeholder="Name*" type="text" value="" /></div>

<div class="6u"><input name="femail" placeholder="Email*" type="email" value=""/></div>
</div>

<div class="row 50%">
<div class="12u"><textarea name="fsendmail" placeholder="Message" rows="6"></textarea></div>
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
	<li style="font-size:xx-small">Design:HTML5UP</li>
</ul>
</footer>
</body>
</html>