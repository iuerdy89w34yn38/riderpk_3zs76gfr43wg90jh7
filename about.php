<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<?php include"include/head.php";?>

	<!-- Document Title
	============================================= -->
	<title>About Us - Riders PK</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

			<?php include"include/connect.php";?>
			<?php include"include/topbar.php";?>
			<?php include"include/header.php";?>
			
	
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-mini">

			<div class="container clearfix">
				<h1>About Us</h1>
				<span>Everything you need to know about our Company</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">About Us</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		<?php 
			include"include/info.php";
		?>

		

		<?php include"include/footer.php";?>


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
	
	
</body>
</html><?php mysqli_close($con);?>