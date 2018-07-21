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
		if(isset($_POST['submit'])){ 	

			$carid = $_POST['carid'];
		}
		?>

		
		<section>
		<form method="get" action="editcar.php">

			<div class="content-wrap" data-animate="fadein" style="padding-top:10px;">

				<div class="container clearfix">
					<br>
					<div class="center">
						<div class="topmargin">
							<div >
							<a href="carpost.php"><img src="images/icons/icon-car.png" height="80px" width="180px"></a>
							</div>
							<br>
							<br>
							<div class="center">
							<label for="template-contactform-message">Enter the Car Post ID to Edit <small>*</small></label>
							<br>
							<br>
							<input type="text" name="carid" rows="1" cols="30" class="input" style="font-size:20px; text-align:center;" >
					</div>
							<br>
							<br>
							<input type="submit" name="submit" class="button">
						</div>
					</div>
					

					
					

				</div>

				
			</div>
			</form>
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