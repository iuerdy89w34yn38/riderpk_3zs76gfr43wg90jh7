

<!-- Stylesheets
	============================================= -->
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../style.css" type="text/css" />
	<link rel="stylesheet" href="../css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="../css/components/bs-select.css" type="text/css" />

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="../css/components/bs-filestyle.css" type="text/css" />

	<link rel="stylesheet" href="../css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<?php include('connect.php'); ?>
	<?php 
	session_start();
	if(!isset($_SESSION['name'])){
		header("location:../include/login.php");
	}
	// Store Session Data
	 $username= $_SESSION['name'];  // Initializing Session with value of PHP Variable
	 
	 
	 ?>
	