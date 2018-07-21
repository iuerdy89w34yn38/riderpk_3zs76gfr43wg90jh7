<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Hamza Pervaiz, RidersPk" />
	<meta name="description" content="Cars, Bikes and Heavy Bikes in Pakistan, New Cars Details, New Bikes Details,New Heavy Bikes Details,Honda cars in Pakistan,Toyota cars in Pakistan  " />
	<meta name="keywords" content="cars,bikes,heavy bikes,price,car details,heavy bikes specs,new bike price,toyota cars in pakistan" />
	<meta name="classification" content="vehicle,motorized vehicle,heavybikes,sports" />
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="10 days" />
	<meta name="creator" content="Hamza Pervaiz" />
	<meta name="publisher" content="RidersPk" />
	
<link href="https://www.riderspk.com/" hreflang="x-default" rel="alternate" />
<link href="https://www.riderspk.com//" rel="canonical" />
<meta property="og:type"  content="website"/>
<meta property="og:title" content="Cars,Bikes, Heav Bikes , New Cars, Latest Car Prices and Details" />
<meta property="og:description" content="Cars, Bikes and Heavy Bikes in Pakistan, New Cars Details, New Bikes Details,New Heavy Bikes Details,Honda cars in Pakistan,Toyota cars in Pakistan  "/>
<meta property="og:site_name" content="RidersPk" />
<meta property="og:url"  content="https://www.riderspk.com/"/>

	
	
	<?php include"include/head.php";?>
	
	<!-- Select-Boxes CSS -->
	<link rel="stylesheet" href="css/components/select-boxes.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	
	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

	
	<!-- Document Title
	============================================= -->
	<title>RidersPk - Cars , Bikes , Heavy Bikes in Pakistan</title>
	

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

			<?php include"include/connect.php";?>
			<?php include"include/topbar.php";?>
			<?php include"include/header.php";?>
			
		

		
		<?php 
			include"include/info.php";
		?>
		
		<?php 
			include"include/carspro.php";
		?>
		
		<?php 
			include"include/search.php";
		?>
	
		<?php 
			include"include/bikespro.php";
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
	
	<!-- Select-Boxes Plugin -->
	<script type="text/javascript" src="js/components/select-boxes.js"></script>
	<!-- Select-Splitter Plugin -->
	<script type="text/javascript" src="js/components/selectsplitter.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="js/components/bs-select.js"></script>

	<!-- Select Splitter Plugin -->
	<script type="text/javascript" src="js/components/selectsplitter.js"></script>



</body>
</html><?php mysqli_close($con);?>