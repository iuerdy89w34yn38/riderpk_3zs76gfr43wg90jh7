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
	
	 $id = $_GET['carid'];
	echo $id;
	
	 ?>
	
	
	<form method="post" action="editcardespdone.php?carid=<?php echo "$id"; ?>" enctype="multipart/form-data">
	
	<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap">

				<div class="container" style="margin-right:none;">
				
				<?php 
	$rows=mysqli_query($con,"select * from carposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
		$pmaxl = $row['pmaxl'];
		$pmaxt = $row['pmaxt'];
		$pminl = $row['pminl'];
		$pmint = $row['pmint'];
		$sdesp = $row['sdesp'];
		$desp = $row['desp'];
		$inter = $row['inter'];
		$exter = $row['exter'];
		$millage = $row['millage'];
		$engine = $row['engine'];
		$gearbox = $row['gearbox'];
		$edisp = $row['edisp'];
		$transmission = $row['transmission'];
		$pc = $row['pc'];
		$fuel = $row['fuel'];
		
		
		
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
								
								<input type="text" class="required sm-form-control" id="" name="pmaxl" rows="1" value="<?php echo "$pmaxl" ; ?>" >
								
							
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Lac</label>
								
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmaxt" rows="1" cols="10" value="<?php echo "$pmaxt" ; ?>">
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Thousands</label>
								
							</div>
							
							</div>
							
							
							<div class="col-md-6" >
							
							<h4> Price Min </h4>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pminl" rows="1"  value="<?php echo "$pminl" ; ?>">
							
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Lac</label>
								
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmint" rows="1" cols="10" value="<?php echo "$pmint" ; ?>">
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Thousands</label>
								
							</div>
							
							</div>
							
						</div>
							
							
							<div class="col-md-6 bottommargin-sm">
									<label for="template-contactform-message">Short Description <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="sdesp" rows="4" cols="30"><?php echo "$sdesp" ; ?></textarea>
								</div>
								<br>
							
							<div class="bottommargin hidden-lg hidden-md"></div>
							
						</div>
						<div class="row">	
							
						
							<div class="col-md-8 bottommargin-sm">
									<label for="template-contactform-message">Long Description <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="desp" rows="6" cols="30"><?php echo "$desp" ; ?></textarea>
								</div>
								
								
							
						</div>
						<div class="row">	
							
							
							

							<div class="col-md-6 bottommargin-sm">
									<label for="">Interior <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="inter" rows="6" cols="30"><?php echo "$inter" ; ?></textarea>
								</div>

							
							<div class="col-md-6 bottommargin-sm">
									<label for="template-contactform-message">Exterior <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="exter" rows="6" cols="30"><?php echo "$exter" ; ?></textarea>
								</div>
								
						</div>
						<div class="row">	
						
							<div class="white-section col-md-3 bottommargin-sm">
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
							<div class="white-section col-md-3 bottommargin-sm">
								<label>Gearbox Transmission:</label>
								<select class="selectpicker"  name="cgt" data-live-search="true">
								<option selected="selected" value="<?php echo "$transmission" ; ?>"><?php echo "$transmission" ; ?></option>

									<?php 
								$rows=mysqli_query($con,"select cgt from carspecs LIMIT 3")or die(mysql_error());
								
								while($row=mysqli_fetch_array($rows)){
									?>
									<option value="<?php echo $crval = $row['cgt']; ?>"><?php echo $car = $row['cgt'];?></option>
								<?php } ?>
								
								
								</select>
							</div>
							<div class="white-section col-md-3 bottommargin-sm">
								<label>Engine Displacement:</label>
								<select class="selectpicker"  name="cgb" data-live-search="true">
								<option selected="selected" value="<?php echo "$gearbox" ; ?>"><?php echo "$gearbox" ; ?></option>

									<?php 
								$rows=mysqli_query($con,"select cgb from carspecs LIMIT 3")or die(mysql_error());
								
								while($row=mysqli_fetch_array($rows)){
									?>
									<option value="<?php echo $crval = $row['cgb']; ?>"><?php echo $car = $row['cgb'];?></option>
								<?php } ?>
								
								
								</select>
							</div>
							<div class="white-section col-md-3 bottommargin-sm">
								<label>Engine Displacement:</label>
								<select class="selectpicker"  name="cft" data-live-search="true">
								<option selected="selected" value="<?php echo "$fuel" ; ?>"><?php echo "$fuel" ; ?></option>

									<?php 
								$rows=mysqli_query($con,"select cft from carspecs LIMIT 3")or die(mysql_error());
								
								while($row=mysqli_fetch_array($rows)){
									?>
									<option value="<?php echo $crval = $row['cft']; ?>"><?php echo $car = $row['cft'];?></option>
								<?php } ?>
								
								
								</select>
							</div>
							
						</div>
						<div class="row">	
						
							<div class="col-md-4 bottommargin-sm">
								<label for="">Engine <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="engine" rows="1" cols="20" value="<?php echo "$engine" ; ?>">
							</div>
							<div class="col-md-4 bottommargin-sm">
								<label for="">Millage <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="millage" rows="1" cols="20" value="<?php echo "$millage" ; ?>">
							</div>
							
							<div class="col-md-4 bottommargin-sm">
								<label for="">Petrol Capacity <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="pc" rows="1" cols="20" value="<?php echo "$pc" ; ?>">
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

<br><br><br><br><br><br><br><br>
	
	















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





