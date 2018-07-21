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
	
	
	<form method="post" action="ecps.php?carid=<?php echo "$id"; ?>" enctype="multipart/form-data">
	
	<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap">

				<div class="container" style="margin-right:none;">
				
				<?php 
	$rows=mysqli_query($con,"select * from carposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
		$imagen=$row['img1'];
		$imagen1=$row['img2'];
		$imagen2=$row['img3'];
		$company = $row['company'];
		$model = $row['model'];
		$year = $row['year'];
		$sdesp = $row['sdesp'];
		$desp = $row['desp'];
		$inter = $row['inter'];
		$exter = $row['exter'];
		$millage = $row['millage'];
		$engine = $row['engine'];
		$gearbox = $row['gearbox'];
		
		
	}	
	$cn=mysqli_query($con,"select * from cmakers where cmkval = '$company'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cn)){
		$companyname = $row['cmakers'];
	}
	
	$cm=mysqli_query($con,"select * from cars where crval = '$model'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cm)){
		$modelname = $row['car'];
	}
	
	$yr=mysqli_query($con,"select * from years where val = '$year'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($yr)){
		$yearval = $row['year'];
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
										$rows=mysqli_query($con,"select * from cmakers")or die(mysql_error());
										?>
										
										<option selected="selected" value="<?php echo "$company" ; ?>"><?php echo "$companyname" ; ?></option>

										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['cmkval']; ?>"><?php echo $car = $row['cmakers'];?></option>
										<?php } ?>
										
										
										</select>
									</div>
							</div>
							<div class="col-md-4 bottommargin-sm">
									<div class="white-section">
										<label>Car Model:</label>
										<select class="selectpicker" name="model" data-live-search="true" selected="<?php echo "$model" ; ?>">
											<?php 
										$rows=mysqli_query($con,"select * from cars")or die(mysql_error());
										?>
										<option selected="selected" value="<?php echo "$company" ; ?>"><?php echo "$modelname" ; ?></option>

										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>

											<option value="<?php echo $crval = $row['crval']; ?>"><?php echo $car = $row['car'];?></option>
										<?php } ?>
										</select>
									</div>
							</div>
							<div class="col-md-4 bottommargin-sm">
									<div class="white-section">
										<label>Year:</label>
										<select class="selectpicker" name="year" data-live-search="true">
											<option selected="selected" value="<?php echo "$year" ; ?>"><?php echo "$yearval" ; ?></option>

											<?php 
										$rows=mysqli_query($con,"select * from years")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['val']; ?>"> <?php echo $car = $row['year'];?> </option>
										<?php } ?>
										</select>
									</div>
							</div>
							
						</div>
						<div class="row">
							
							
							
							
							<div class="col-md-6 bottommargin-sm">
									<label for="template-contactform-message">Short Description <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="sdesp" rows="4" cols="30"><?php echo "$sdesp" ; ?></textarea>
								</div>
								<br>
							
							<div class="col-md-5 topmargin-sm">
								<img src="../images/cars/<?php echo "$imagen"; ?>" >
								<br>
								<label>Select Another Featured Image If Require:</label><br>
								<input id="input-5" name="image" type="file"  accept="image/*">
							</div>
							
							
							

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
								
							<div class="col-md-6 topmargin-sm bottommargin-sm">
								
								<img src="../images/cars/<?php echo "$imagen1"; ?>" >

								<label>Select Another Image:</label><br>
								<input id="input-6" name="image1" type="file"  accept="image/*">
							</div>
							
							<div class="col-md-6 topmargin-sm bottommargin-sm">
							
								<img src="../images/cars/<?php echo "$imagen2"; ?>" >

								<label>Select Another Image:</label><br>
								<input id="input-8" name="image2" type="file"  accept="image/*">
							</div>
								
						</div>
						<div class="row">	
						
						

							
							<div class="col-md-4 bottommargin-sm">
								<label for="">Engine <small>*</small></label>
								<textarea class="required sm-form-control" id="" name="engine" rows="2" cols="30"><?php echo "$engine" ; ?></textarea>
							</div>
							<div class="col-md-4 bottommargin-sm">
								<label for="">Millage <small>*</small></label>
								<textarea class="required sm-form-control" id="" name="millage" rows="2" cols="30"><?php echo "$millage" ; ?></textarea>
							</div>
							<div class="col-md-4 bottommargin-sm">
								<label for="">Gearbox <small>*</small></label>
								<textarea class="required sm-form-control" id="" name="gearbox" rows="2" cols="30"><?php echo "$gearbox" ; ?></textarea>
							</div>

							
							
							
							

							
						</div>
						<div class="bottommargin hidden-lg hidden-md"></div>
							
					</div><!-- .postcontent end -->


				</div>

			</div>

		</section><!-- #content end -->
	
	
	
	
	
	
	
	
	
	
		
		
		
		
		
		
		
		
		
		<center>
		<input type="submit" class="btn " name="submit" value="Publish">
		</center>

<br><br><br><br><br><br><br><br>
	
	















	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script type="text/javascript" src="../js/components/bs-filestyle.js"></script>
	
	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="../js/components/bs-select.js"></script>

	<!-- Select Splitter Plugin -->
	<script type="text/javascript" src="../js/components/selectsplitter.js"></script>

	

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>

	<script  type="text/javascript">
		$(document).on('ready', function() {
			$("#input-5").fileinput({
				showUpload: false,
				maxFileCount: 10,
				mainClass: "input-group-lg",
				browseClass: "btn btn-success",
				browseLabel: "Pick Image",
				browseIcon: "<i class=\"icon-picture\"></i> ",
				showCaption: true
			});

			$("#input-6").fileinput({
				showUpload: false,
				maxFileCount: 10,
				mainClass: "input-group-lg",
				browseClass: "btn btn-success",
				browseLabel: "Pick Image",
				browseIcon: "<i class=\"icon-picture\"></i> ",
				showCaption: true
			});

			$("#input-8").fileinput({
				showUpload: false,
				maxFileCount: 10,
				mainClass: "input-group-lg",
				browseClass: "btn btn-success",
				browseLabel: "Pick Image",
				browseIcon: "<i class=\"icon-picture\"></i> ",
				showCaption: true
			});

			$("#input-9").fileinput({
				previewFileType: "text",
				allowedFileExtensions: ["txt", "md", "ini", "text"],
				previewClass: "bg-warning",
				browseClass: "btn btn-primary",
				removeClass: "btn btn-default",
				uploadClass: "btn btn-default",
			});

			$("#input-10").fileinput({
				showUpload: false,
				layoutTemplates: {
					main1: "{preview}\n" +
					"<div class=\'input-group {class}\'>\n" +
					"   <div class=\'input-group-btn\'>\n" +
					"       {browse}\n" +
					"       {upload}\n" +
					"       {remove}\n" +
					"   </div>\n" +
					"   {caption}\n" +
					"</div>"
				}
			});

			$("#input-11").fileinput({
				maxFileCount: 10,
				allowedFileTypes: ["image", "video"]
			});

			$("#input-12").fileinput({
				showPreview: false,
				allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
				elErrorContainer: "#errorBlock"
			});
		});

	</script>
	

</body>
</html><?php mysqli_close($con);?>





