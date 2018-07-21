<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Add New POST</title>

	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
	<?php  
	$id = $_GET['hbikeid'];
	
	
	$rows=mysqli_query($con,"select * from heavybikeposts where post_id = '$id'")or die(mysql_error());
	
	
	
	while($row=mysqli_fetch_array($rows)){
		
	$model = $row['model'];
	$company = $row['company'];
		
	}
	if (!empty($company)) {
	
	
	}
	else{
		header("location:notdonehbike.php");
	}
	
	?>



		
		<section>
		

			<div class="content-wrap" data-animate="fadein" style="padding-top:10px;">

				<div class="container clearfix">
					<center>
					<br><br><br>
					
					<p> Your Car is <b>  <?php echo "$model"; ?>  </b> What would you like to do...
					
					<br><br><br><br>
					
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="edithbikemeta.php?hbikeid=<?php echo "$id"; ?>">Edit Bike Meta </a>
				</div>
				
				
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="edithbikedesp.php?hbikeid=<?php echo "$id"; ?>">Edit Bike Description </a>
				</div>
				
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="edithbikepic.php?hbikeid=<?php echo "$id"; ?>">Edit Bike Pictures </a>
				</div>
				

					

				
			</div>
			
		</section>
		


		





</div>







<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>
	

</body>
</html><?php mysqli_close($con);?>