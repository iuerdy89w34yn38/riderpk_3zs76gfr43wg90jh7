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
	$id = $_GET['carid'];
	
	
	$rows=mysqli_query($con,"select * from carposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
	$model = $row['model'];
		
	}
	if (!empty($model)) {
	
	}
	else{
		header("location:notdonecar.php");
	}
	
	
	?>


		
		<section>
		

			<div class="content-wrap" data-animate="fadein" style="padding-top:10px;">

				<div class="container clearfix">
					<center>
					<br><br><br>
					
					<p> Your Car is <b> <?php echo "$model"; ?>  </b> What would you like to do...
					
					<br><br><br><br>
					
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="editcarmeta.php?carid=<?php echo "$id"; ?>">Edit Car Meta </a>
				</div>
				
				
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="editcardesp.php?carid=<?php echo "$id"; ?>">Edit Car Description </a>
				</div>
				
					<div class="col-md-4">
						<a class="link" style="text-tranform:capital; font-size:25px;" href="editcarpic.php?carid=<?php echo "$id"; ?>">Edit Car Pictures </a>
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