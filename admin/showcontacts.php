<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location:../login.php");
    }
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Courage Digital | Complete Digital Agency Mumbai| Custom Software Development Mumbai</title>
    <meta content="Courage Digital is a complete one stop shop for all your digital needs. From custom software development, e-commerce, mobile applications, SEO, social media marketing we do it all." name="description" />
    <meta content="Digital Agency, Top Digital Agency, Custom Software Development, Ecommerce website, e-commerce website, mobile application development mumbai, top software development comapnies in india, top digital agencies in india" name="keywords" /><!--[if lte IE 8]><script src="../css/ie/html5shiv.js"></script><![endif]--><script src="../js/jquery.min.js"></script><script src="../js/jquery.poptrox.min.js"></script><script src="../js/jquery.scrolly.min.js"></script><script src="../js/jquery.scrollgress.min.js"></script><script src="../js/skel.min.js"></script><script src="../js/init.js"></script>
    
    <noscript>
            <link rel="stylesheet" href="../../css/skel.css" />
            <link rel="stylesheet" href="../css/style.css" />
            <link rel="stylesheet" href="../../css/style-wide.css" />
            <link rel="stylesheet" href="../../css/style-normal.css" />
        </noscript><!--[if lte IE 8]><link rel="stylesheet" href="../css/ie/v8.css" /><![endif]-->
<script src="../js/showData.js"></script>
</head>
<body><!-- Header -->
<header id="header"><!-- Logo --><!-- <h1 id="logo">Big Picture</h1> --><img alt="Courage Digital" src="../images/courage_digital_logo.png" /> <!-- Nav -->
</header>
<!-- Contact -->

<section class="main style3 secondary" id="contact">
    <div class="content container">
        <header>
            <h2>All Contacts</h2>

            <div class="row">
                <div class="12u">
                    <ul class="actions">
                        <li><input type="submit" value="Get Contacts" id="getcontacts" /></li>
                    </ul>
                </div>
            </div>
            <div>
                <table class="mGrid" id="jsondata" >
                    <thead>
			         <th>Name</th>
			         <th>Email</th>
			         <th>Country</th>
			         <th>Phone</th>
			         <th>Message</th>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </header>
    </div>
</section>
<!-- Footer -->

<footer id="footer">
<!-- Menu -->

    <ul class="menu">
        <li>&copy; Courage Digital Solutions</li>
        <li style="font-size:xx-small">Design:HTML5UP</li>
    </ul>
</footer>
</body>
</html>