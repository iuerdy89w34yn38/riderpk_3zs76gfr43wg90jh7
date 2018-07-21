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
	$id = $_GET['bikeid'];
	
	
	$rows=mysqli_query($con,"select * from bikeposts where post_id = '$id'")or die(mysql_error());
	
	
	
	while($row=mysqli_fetch_array($rows)){
		
	$model = $row['model'];
	$companyname = $row['company'];
		
	}
	if (!empty($companyname)) {
	
	}
	else{
		header("location:notdonebike.php");
	}
	
	?>


		
		<section>
		

			<div class="content-wrap" data-animate="fadein" style="padding-top:10px;">

				<div class="container clearfix">
					<center>
					<br><br><br>
					
					<p> Your Car is <b> <?php echo "$companyname"; ?> <?php echo "$model"; ?>  </b> What would you like to do...
					
					<br><br><br><br>
					
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="editbikemeta.php?bikeid=<?php echo "$id"; ?>">Edit Bike Meta </a>
				</div>
				
				
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="editbikedesp.php?bikeid=<?php echo "$id"; ?>">Edit Bike Description </a>
				</div>
				
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="editbikepic.php?bikeid=<?php echo "$id"; ?>">Edit Bike Pictures </a>
				</div>
				

				
				</div>
			</div>
			
			
			
			
		</section>
		


		<?php 
		if(isset($_POST['submit'])){ 	

			$carid = $_POST['carid'];
		}
		?>




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