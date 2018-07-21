<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Welcome <?php echo $_SESSION['name'];?></title>

	
	
	
	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
	
	<?php include('inc/header.php'); ?>
	
	
	
	
	<?php 
	if($_SESSION['name']=="hamza"){
	include('inc/sidebaradmin.php'); 
	}
	else{
	include('inc/sidebar.php'); 

	}
	
	
	?>

</div>





















<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../../js/functions.js"></script>
	

</body>
</html><?php mysqli_close($con);?>