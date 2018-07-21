 <html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Add New POST</title>

	
	</head>

 
<body class="stretched">

	


<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
		
		<section>
		
		
			<div class="content-wrap" data-animate="fadein" style="padding:none;padding-top:10px;">

				<div class="container clearfix" style="padding:none;">
					<br>
					<div class="row">
						<div class="">
						
							<form method="post" action="postset.php">
								<div class="col-md-4" >
								
									<label> Add Car Company </label>
									<br>
									
									<input type="text" class="center topmargin" name="cc" value="" placeholder="Company" >
									<br>
									<textarea class="topmargin" name="cdetails" placeholder="Company Details" rows="2" cols="40"></textarea>
									<br>
									<input type="submit" class="button topmargin" name="submitcc" value="Add">
									<br>
								</div>
							</form>
							
							<form method="post" action="postset.php">
								<div class="col-md-4" >
								
									<label> Add Bike Company </label>
									<br>
									
									<input type="text" class="center topmargin" name="cc" value="" placeholder="Company" >
									<br>
									<textarea class="topmargin" name="cdetails" placeholder="Company Details" rows="2" cols="40"></textarea>
									<br>
									<input type="submit" class="button topmargin" name="submitbc" value="Add">
									<br>
								</div>
							</form>
							
						
							<form method="post" action="postset.php">
								<div class="col-md-4" >
								
									<label> Add Heavybike Company </label>
									
									
									<input type="text" class="center topmargin" name="cc" value="" placeholder="Company" >
									
									<textarea class="topmargin" name="cdetails" placeholder="Company Details" rows="2" cols="40"></textarea>
									<br>
									<input type="submit" class="button topmargin" name="submithbc" value="Add">
									<br>
								</div>
							</form>
							
						
							
						</div>
					</div>
					

					<div class="row">
						<div class="">
						
							<form method="post" action="postset.php">
								<div class="col-md-6" >
								
									<label> Add Car Model </label>
									
									
									<input type="text" class="center topmargin" name="cm" value="" placeholder="Model" >
									
									<input type="submit" class="button topmargin" name="submitcm" value="Add">
									<br>
								</div>
							</form>
							
							<form method="post" action="postset.php">
								<div class="col-md-6" >
								
									<label> Add HeavyBike Model </label>
									
									
									<input type="text" class="center topmargin" name="hbm" value="" placeholder="Model" >
									
									<input type="submit" class="button topmargin" name="submithm" value="Add">
									<br>
								</div>
							</form>
							
						</div>
					</div>
					

					
					

				</div>

				
			</div>

		</section>
		
		<center>
		<h2>	
<?php
	if(isset($_POST['submitcc'])){
		$cmakers=$_POST['cc'];
		$cdetails=$_POST['cdetails'];
		
		$sql="INSERT INTO cmakers ( `cmakers`, `cdetails`) VALUES ('$cmakers','$cdetails')";
		$result=mysqli_query($con,$sql) or die(mysqli_error($con));
		echo "Car Company Inserted !";
		
	}
	
	if(isset($_POST['submitbc'])){
		$bmakers=$_POST['cc'];
		$cdetails=$_POST['cdetails'];
		
		$sql="INSERT INTO bmakers ( `bmakers`, `cdetails`) VALUES ('$bmakers','$cdetails')";
		$result=mysqli_query($con,$sql);
		echo "Bike Company Inserted !";
		
	}
	
	if(isset($_POST['submithbc'])){
		$hbmakers=$_POST['cc'];
		$cdetails=$_POST['cdetails'];
		
		$sql="INSERT INTO hbmakers ( `bmakers`, `cdetails`) VALUES ('$hbmakers','$cdetails')";
		$result=mysqli_query($con,$sql);
		echo "Heavybike Company Inserted !";
		
	}
	

	if(isset($_POST['submitcm'])){
		$cm=$_POST['cm'];
		
		$sql="INSERT INTO cars ( `car`) VALUES ('$cm')";
		$result=mysqli_query($con,$sql) or die(mysqli_error($con));
		echo "Heavybike Model Inserted !";
		
	}
	

	if(isset($_POST['submithm'])){
		$hbm=$_POST['hbm'];
		
		$sql="INSERT INTO heavybikes ( `heavybikes`) VALUES ('$hbm')";
		$result=mysqli_query($con,$sql) or die(mysqli_error($con));
		echo "Heavybike Model Inserted !";
		
	}
	

 
?> 

		</h2>
 </center>

	

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