<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Welcome <?php echo $_SESSION['name'];?></title>

	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
	<?php  
	
	 $id = $_GET['hbikeid'];
	echo $id;
	
	 ?>
	
	
	<form method="post" action="edithbikemetadone.php?hbikeid=<?php echo "$id"; ?>" enctype="multipart/form-data">
	
	<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap">

				<div class="container" style="margin-right:none;">
				
				<?php 
	$rows=mysqli_query($con,"select * from heavybikeposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
		$company = $row['company'];
		$model = $row['model'];
		$year = $row['year'];
		
		
	}	
	
	
	
	
		?>

					<!-- Post Content
					============================================= -->
					<div class=" nobottommargin clearfix">

						<div class="row">
						
							<div class="col-md-4 bottommargin-sm">
									<div class="white-section">
										<label>Company:</label>
										<select class="selectpicker"  name="company" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from hbmakers")or die(mysql_error());
										?>
										
										<option selected="selected" value="<?php echo "$company" ; ?>"><?php echo "$company" ; ?></option>

										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['bmakers']; ?>"><?php echo $car = $row['bmakers'];?></option>
										<?php } ?>
										
										
										</select>
									</div>
							</div>
							
							<div class="col-md-4 bottommargin-sm">
									<div class="white-section">
										<label>Company:</label>
										<select class="selectpicker"  name="model" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from heavybikes")or die(mysql_error());
										?>
										
										<option selected="selected" value="<?php echo "$model" ; ?>"><?php echo "$model" ; ?></option>

										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['heavybikes']; ?>"><?php echo $car = $row['heavybikes'];?></option>
										<?php } ?>
										
										
										</select>
									</div>
							</div>
							
							
							
							<div class="col-md-4 bottommargin-sm">
									<div class="white-section">
										<label>Year:</label>
										<select class="selectpicker" name="year" data-live-search="true">
											<option selected="selected" value="<?php echo "$year" ; ?>"><?php echo "$year" ; ?></option>

											<?php 
										$rows=mysqli_query($con,"select * from years")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $year = $row['year']; ?>"> <?php echo $year = $row['year'];?> </option>
										<?php } ?>
										</select>
									</div>
							</div>
							
						</div>
						
						<div class="bottommargin hidden-lg hidden-md"></div>
							
					</div><!-- .postcontent end -->


				</div>

			</div>

		</section><!-- #content end -->
	
	
	
	
	
	
	
	
	
	
		
		
		
		
		<div class="twoToneCenter">
    <button name="submit" class="twoToneButton">Update</button>
</div>
		<br><br><br><br><br>
	
	















	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	
	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="../js/components/bs-select.js"></script>

	<!-- Select Splitter Plugin -->
	<script type="text/javascript" src="../js/components/selectsplitter.js"></script>

	

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>


	<!-- Button  Script
	============================================= -->
	<script  type="text/javascript">
				
		$(function(){
    
    var twoToneButton = document.querySelector('.twoToneButton');
    
    twoToneButton.addEventListener("click", function() {
        twoToneButton.innerHTML = "Updating (Please Wait...)";
        
      setTimeout( 
            function  (){  
                twoToneButton.innerHTML = "Posted";
                
            }, 600000);
    }, false);
    
	});

	</script>

</body>
</html><?php mysqli_close($con);?>






