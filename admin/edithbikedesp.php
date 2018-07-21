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
	
	
	<form method="post" action="edithbikedespdone.php?hbikeid=<?php echo "$id"; ?>" enctype="multipart/form-data">
	
	<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap">

				<div class="container" style="margin-right:none;">
				
				<?php 
	$rows=mysqli_query($con,"select * from heavybikeposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
		$pmaxl = $row['pmaxl'];
		$pmaxt = $row['pmaxt'];
		$pminl = $row['pminl'];
		$pmint = $row['pmint'];
		$sdesp = $row['sdesp'];
		$desp = $row['desp'];
		$millage = $row['millage'];
		$engine = $row['engine'];
		$typeid = $row['type'];
		$startid = $row['start'];
		$pcid = $row['pc'];
		$speedometer = $row['speedometer'];
		$topspeed = $row['topspeed'];
		$gearbox = $row['gearbox'];
		$edisp = $row['edisp'];
		
		
		
		
	}	
	$cn=mysqli_query($con,"select * from biketype where typeid = '$typeid'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cn)){
		$type = $row['type'];
	}
	$cs=mysqli_query($con,"select * from bs where id = '$startid'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cs)){
		$start = $row['start'];
	}
	
	$cp=mysqli_query($con,"select * from bpc where id = '$pcid'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cp)){
		$capacity = $row['capacity'];
	}
	
		?>

					<!-- Post Content
					============================================= -->
					<div class=" nobottommargin clearfix">
					
					<div class="row">
							
							
						<div class="row">
						
						<div class="col-md-6" >
						<h4> Price Max </h4>
						
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmaxl" rows="1"  value="<?php echo "$pmaxl" ; ?>">
							
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Lac</label>
								
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmaxt" rows="1" cols="10"  value="<?php echo "$pmaxt" ; ?>">
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Thousands</label>
								
							</div>
							
							</div>
							
							
							<div class="col-md-6" >
							
							<h4> Price Min </h4>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pminl" rows="1"   value="<?php echo "$pminl" ; ?>">
							
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Lac</label>
								
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmint" rows="1" cols="10"  value="<?php echo "$pmint" ; ?>">
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Thousands</label>
								
							</div>
							
							</div>
							
						</div>
					
					
					
						<div class="row">
							
							
							
							
							<div class="col-md-6 bottommargin-sm">
									<label for="template-contactform-message">Short Description <small>*</small></label>
									<input type="text" class="required sm-form-control" id="" name="sdesp" rows="4" cols="30"  value="<?php echo "$sdesp" ; ?>">
								</div>
								
								<div class="col-md-3 bottommargin-sm">
								<label for="">speedometer <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="speedometer" rows="1" cols="30"  value="<?php echo "$speedometer" ; ?>">
							</div>
							
							
							<div class="col-md-3 bottommargin-sm">
								<label for="">topspeed <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="topspeed" rows="1" cols="30"  value="<?php echo "$topspeed" ; ?>">
							</div>
							
							
							<div class="bottommargin hidden-lg hidden-md"></div>
							
							
						</div>
						<div class="row">	
							
						
							<div class="col-md-8 bottommargin-sm">
									<label for="template-contactform-message">Long Description <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="desp" rows="6" cols="30"><?php echo "$desp" ; ?></textarea>
								</div>
								
								
						
						
							<div class="col-md-4 bottommargin-sm">
									<div class="white-section">
										<label>Type:</label>
										<select class="selectpicker"  name="type" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from biketype")or die(mysql_error());
										?>
										
										<option selected="selected" value="<?php echo "$typeid" ; ?>"><?php echo "$type" ; ?></option>

										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['typeid']; ?>"><?php echo $car = $row['type'];?></option>
										<?php } ?>
										
										
										</select>
									</div>
									
							</div>
							<div class="col-md-4 bottommargin-sm">
									<div class="white-section">
										<label>Start:</label>
										<select class="selectpicker"  name="start" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from bs")or die(mysql_error());
										?>
										
										<option selected="selected" value="<?php echo "$startid" ; ?>"><?php echo "$start" ; ?></option>

										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['id']; ?>"><?php echo $car = $row['start'];?></option>
										<?php } ?>
										
										
										</select>
									</div>
							</div>
							
							<div class="col-md-4 bottommargin-sm">
								<label>Engine Displacement:</label>
								<select class="selectpicker"  name="ced" data-live-search="true">
								<option selected="selected" value="<?php echo "$edisp" ; ?>"><?php echo "$edisp" ; ?></option>

									<?php 
								$rows=mysqli_query($con,"select ced from carspecs")or die(mysql_error());
								
								while($row=mysqli_fetch_array($rows)){
									?>
									<option value="<?php echo $crval = $row['ced']; ?>"><?php echo $car = $row['ced'];?></option>
								<?php } ?>
								
								
								</select>
							</div>
						
						</div>
						<div class="row center">	
						
							<div class="col-md-3 bottommargin-sm">
								<label for="">Engine <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="engine" rows="1" cols="30"  value="<?php echo "$engine" ; ?>">
							</div>
							
							
							<div class="col-md-3 bottommargin-sm">
								<label for="">Millage <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="millage" rows="1" cols="30"  value="<?php echo "$millage" ; ?>">
							</div>
							
							
							
								<div class="col-md-3 bottommargin-sm">
									<div class="white-section">
										<label>Petrol Capacity:</label>
										<select class="selectpicker"  name="pc" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from bpc")or die(mysql_error());
										?>
										
										<option selected="selected" value="<?php echo "$id" ; ?>"><?php echo "$capacity" ; ?></option>

										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['id']; ?>"><?php echo $car = $row['capacity'];?></option>
										<?php } ?>
										
										
										</select>
									</div>
								</div>
								
								
								<div class="col-md-3 bottommargin-sm">
									<div class="white-section">
										<label>Gearbox:</label>
										<select class="selectpicker"  name="gearbox" data-live-search="true">
										
										<option selected="selected" value="<?php echo $gearbox ?>"><?php echo $gearbox ?></option>
										
										<option value="4 Speed">4 Speed</option>
										<option value="5 Speed">5 Speed</option>
										</select>
									</div>
							</div>
							
							
						</div>
						<div class="bottommargin hidden-lg hidden-md"></div>
							
					</div><!-- .postcontent end -->

		



				</div>

			</div>

		</section><!-- #content end -->
	
	
		<center>			
<div class="twoToneCenter">
    
    <button name="submit" class="button twoToneButton">Update</button>
    
</div>

<br><br><br>
	
	</form>
	
	
	</div>
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="../js/components/bs-select.js"></script>


	
	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>
	
	
	
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





