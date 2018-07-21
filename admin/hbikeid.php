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

			$bikeid = $_POST['bikeid'];
		}
		?>

		
		<section>
		<form method="get" action="edithbike.php">

			<div class="content-wrap" data-animate="fadein" style="padding-top:10px;">

				<div class="container clearfix">
					<br>
					<div class="center">
						<div class="topmargin">
							<div >
							<img src="images/icons/icon-heavy.png" height="160px" width="160px">
							</div>
							<br>
							<br>
							<div class="center">
							<label for="template-contactform-message">Enter the Heavybike Post ID to Edit <small>*</small></label>
							<br>
							<br>
							<input type="text" name="hbikeid" rows="1" cols="30" class="input" style="font-size:20px; text-align:center;" >
							
							<br>
							<br>
							<input type="submit" name="submit" class="button">
							
							</div>
							
						</div>
					</div>
					

					
					

				</div>

				
			</div>
			</form>
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