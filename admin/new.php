<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Add New POST</title>

	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
	<?php  ?>
	



</div>

		<section id="" >

			<div class="content-wrap" style="padding:50px">


					<div class="heading-block center" >
						<h1>Select the Post Catagory</h1>
				
					</div>

					
				</div>

			</div>
		</section>


		<section>

			<div class="content-wrap" data-animate="fadein" style="padding-top:10px;">

				<div class="container clearfix">
					<br>
					<div class="col_one_third">
						<div class="feature-box fbox-center fbox-plain topmargin">
							<div >
								<a href="carpost.php"><img src="images/icons/icon-car.png" height="80px" width="180px"></a>
							</div>
							<br>
							<br>
							<h3>Car Post</h3>
						</div>
					</div>
					<div class="col_one_third">
						<div class="feature-box fbox-center fbox-plain">
							<div >
								<a href="bikepost.php"><img src="images/icons/icon-bike.png" height="150px" width="150px"></a>
							</div>
							<br>
							<h3>Bike Post</h3>
							
						</div>
					</div>

				
					<div class="col_one_third col_last">
						<div class="feature-box fbox-center fbox-plain">
							<div >
								<a href="heavybikepost.php"><img src="images/icons/icon-heavy.png" height="150px" width="150px"></a>
							</div>
							<br>
							<h3>Heavy Bike Post</h3>
						</div>
					</div>

					

				</div>

				
			</div>
		</section>
		



















<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>
	

</body>
</html><?php mysqli_close($con);?>