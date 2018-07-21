 <html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Site Setting</title>

	
	</head>

 
<body class="stretched">

	<?php
	
	$rows=mysqli_query($con,"select * from featured ")or die(mysqli_error($con));
							
		while($row=mysqli_fetch_array($rows)){
			
			$fcid = $row['fc'];
			$fbid = $row['fb'];
			$fhbid = $row['fhb'];
			
		}

	
	
	
	?>


<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
		
		<section>
		
		
			<div class="content-wrap" data-animate="fadein" style="padding:none;padding-top:10px;">

				<div class="container clearfix" style="padding:none;">
					<br>
					
					<div class="row">
						<div class="">
						
							<form method="post" action="siteset.php">
								<div class="col-md-4" >
								
									<label> Edit Featured Car ID </label>
									<br>
									
									<input type="text" class="center topmargin" name="fc" value="<?php echo $fcid?>" placeholder="Model" >
									<br>
									<input type="submit" class="button topmargin" name="submitfc" value="UPDATE">
									<br>
								</div>
							</form>
							
							<form method="post" action="siteset.php">
								<div class="col-md-4" >
								
									<label> Edit Featured Bike ID </label>
									
									<br>
									<input type="text" class="center topmargin" name="fb" value="<?php echo $fbid?>" placeholder="Model" >
									<br>
									<input type="submit" class="button topmargin" name="submitfb" value="UPDATE">
									<br>
								</div>
							</form>
							
							<form method="post" action="siteset.php">
								<div class="col-md-4" >
								
									<label>  Edit Featured Heavy Bike ID </label>
									<br>
									
									<input type="text" class="center topmargin" name="fhb" value="<?php echo $fhbid?>" placeholder="Model" >
									<br>
									<input type="submit" class="button topmargin" name="submitfhb" value="UPDATE">
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
	
	if(isset($_POST['submitfc'])){
		$fc=$_POST['fc'];
		
	
		$sql="UPDATE `featured` SET `fc`=$fc WHERE 1";
		$result=mysqli_query($con,$sql) or die(mysqli_error($con));
		echo "Featured Car Updated !";
		
	}
	

	if(isset($_POST['submitfb'])){
		$fb=$_POST['fb'];
		
		$sql="UPDATE `featured` SET `fb`=$fb WHERE 1";
		$result=mysqli_query($con,$sql) or die(mysqli_error($con));
		echo "Featured Bike Updated !";
		
	}
	
	if(isset($_POST['submitfhb'])){
		$fhb=$_POST['fhb'];
		$sql="UPDATE `featured` SET `fhb`=$fhb WHERE 1";
		$result=mysqli_query($con,$sql) or die(mysqli_error($con));
		echo "Featured Heavybike Updated!";
		
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