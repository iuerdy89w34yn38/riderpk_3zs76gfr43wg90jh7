<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Add Car Post</title>
	
	<?php   
 function fill_brand($con)  
 {  
      $output = '';  
      $sql = "SELECT car FROM cars";  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["car"].'">'.$row["car"].'</option>';  
      }  
      return $output;  
 }  
 function fill_product($con)  
 {  
       
 }  
 ?> 
 <script src="../js/jquery.js"></script>  
    
	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
	<form method="post" action="carpostdone.php" enctype="multipart/form-data">
	
	<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap">

				<div class="container" style="margin-right:none;">

					<!-- Post Content
					============================================= -->
					<div class=" nobottommargin clearfix">
							<label>

								<?php
								date_default_timezone_set("Asia/Karachi");
								$date= date("Y-m-d");
								echo "Post Created on: $date ";
								$author=$_SESSION['name'];
								echo "&nbsp&nbsp&nbsp Post Created by: $author" ;
								?>
							</label>
							<br>
							<br>
							<br>
						<div class="row">
						
							<div class="col-md-3 bottommargin-sm">
							
									<div class="white-section">
										
										<label>Company:</label>
										<select class="selectpicker" name="company" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from cmakers")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $cmakers = $row['cmakers']; ?>"><?php echo $car = $row['cmakers'];?></option>
										<?php } ?>
										</select>
									</div>
							</div>

							<div class="col-md-3 bottommargin-sm">
									<div class="white-section">
										<label>Year:</label>
										<select class="selectpicker" name="year" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from years")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $year = $row['year']; ?>"> <?php echo $year = $row['year'];?></option>
										<?php } ?>
										</select>
									</div>
							</div>
							
						
						<div class="col-md-4 bottommargin-sm">  
						<label>MODEL:</label>
							<p>  
								 <select class="selectpicker" data-live-search="true" name="model" id="model">  
									  <option value="">SELECT MODEL</option>  
									  <?php echo fill_brand($con); ?>  
								 </select>  
								 <br /><br />  
								 <div class="row" id="show_product">  
									  <?php echo fill_product($con);?>  
								 </div>  
							</p>  
					   </div> 
					   <div class="col-md-2 ">
					   
							<label for="">Varient (If Any!)</label>
								
								<input type="text"	class="required sm-form-control" id="" name="modelv" rows="1" placeholder="0" >
							
								
						</div>
						</div>
						
						<div class="row">
						
						<div class="col-md-6" >
						<h4> Price Max </h4>
						
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text"	class="required sm-form-control" id="" name="pmaxl" rows="1" placeholder="0" >
							
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Lac</label>
								
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmaxt" rows="1" cols="10" placeholder="0" >
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Thousands</label>
								
							</div>
							
							</div>
							
							
							<div class="col-md-6" >
							
							<h4> Price Min </h4>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pminl" rows="1"placeholder="0"  >							
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Lac</label>
								
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmint" rows="1" cols="10" placeholder="0" >
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Thousands</label>
								
							</div>
							
							</div>
							
						</div>
						
						<div class="row">
							
							
							
							
							<div class="col-md-6 bottommargin-sm">
									<label for="template-contactform-message">Short Description <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="sdesp" rows="4" cols="30"></textarea>
								</div>
								<br>
							
							<div class="col-md-5 topmargin-sm">
								<label>Select Featured Image:</label><br>
								<input id="input-5" name="image" type="file"  accept="image/*">
							</div>
							
							
							

							<div class="bottommargin hidden-lg hidden-md"></div>
							
						</div>
						<div class="row">	
							
						
							<div class="col-md-8 bottommargin-sm">
									<label for="template-contactform-message">Long Description <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="desp" rows="6" cols="30"></textarea>
								</div>
								
								
							
						</div>
						<div class="row">	
							
							
							

							<div class="col-md-6 bottommargin-sm">
									<label for="">Interior <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="inter" rows="6" cols="30"></textarea>
								</div>

							
							<div class="col-md-6 bottommargin-sm">
									<label for="template-contactform-message">Exterior <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="exter" rows="6" cols="30"></textarea>
								</div>
								
							<div class="col-md-6 topmargin-sm bottommargin-sm">
								<label>Select Interior Image:</label><br>
								<input id="input-6" name="image1" type="file"  accept="image/*">
							</div>
							
							<div class="col-md-6 topmargin-sm bottommargin-sm">
								<label>Select Exterior Image:</label><br>
								<input id="input-8" name="image2" type="file"  accept="image/*">
							</div>
								
						</div>
						<div class="row">	
						
							<div class="col-md-3 bottommargin-sm">
								<div class="white-section">
									<label>Engine Displacement:</label>
									<select class="selectpicker" name="ced" data-live-search="true">
										<?php 
									$rows=mysqli_query($con,"select ced from carspecs")or die(mysql_error());
									?>
									
									<?php
									while($row=mysqli_fetch_array($rows)){
										?>
										<option value="<?php echo $year = $row['ced']; ?>"> <?php echo $year = $row['ced'];?></option>
									<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-md-3 bottommargin-sm">
								<div class="white-section">
									<label>Gearbox Tramsmission:</label>
									<select class="selectpicker" name="cgt" data-live-search="true">
										<?php 
									$rows=mysqli_query($con,"select cgt from carspecs LIMIT 3")or die(mysql_error());
									?>
									
									<?php
									while($row=mysqli_fetch_array($rows)){
										?>
										<option value="<?php echo $year = $row['cgt']; ?>"> <?php echo $year = $row['cgt'];?></option>
									<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-md-3 bottommargin-sm">
								<div class="white-section">
									<label>Gearbox Counts:</label>
									<select class="selectpicker" name="cgb" data-live-search="true">
										<?php 
									$rows=mysqli_query($con,"select cgb from carspecs LIMIT 3")or die(mysql_error());
									?>
									
									<?php
									while($row=mysqli_fetch_array($rows)){
										?>
										<option value="<?php echo $year = $row['cgb']; ?>"> <?php echo $year = $row['cgb'];?></option>
									<?php } ?>
									</select>
								</div>
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								<div class="white-section">
									<label>Petrol Type:</label>
									<select class="selectpicker" name="cft" data-live-search="true">
										<?php 
									$rows=mysqli_query($con,"select cft from carspecs LIMIT 2")or die(mysql_error());
									?>
									
									<?php
									while($row=mysqli_fetch_array($rows)){
										?>
										<option value="<?php echo $year = $row['cft']; ?>"> <?php echo $year = $row['cft'];?></option>
									<?php } ?>
									</select>
								</div>
							</div>
							
						</div>
						
						<div class="row">	
						
							<div class="col-md-4 bottommargin-sm">
								<label for="">Engine <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="engine" rows="2" cols="30">
							</div>
							<div class="col-md-4 bottommargin-sm">
								<label for="">Millage <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="millage" rows="2" cols="30">
							</div>
							<div class="col-md-4 bottommargin-sm">
								<label for="">Fuel Capacity <small>*</small></label>
								<input type="text" class="required sm-form-control" id="" name="pc" rows="2" cols="30">
							</div>
							
						</div>
						
						
						<div class="bottommargin hidden-lg hidden-md"></div>
							
					</div><!-- .postcontent end -->


				</div>

			</div>

		</section><!-- #content end -->
	
	
	
	
	
		
		
		
		
		
		
		
	<center>	
<div class="twoToneCenter">
    
    <button name="submit" class="twoToneButton button">Post</button>
    
</div>
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
	
	
	<!-- live search Plugin -->
	 <script>  
	 $(document).ready(function(){  
		  $('#model').change(function(){  
			   var brand_id = $(this).val();  
			   $.ajax({  
					url:"load_cars.php",  
					method:"POST",  
					data:{brand_id:brand_id},  
					success:function(data){  
						 $('#show_product').html(data);  
					}  
			   });  
		  });  
	 });  
	 </script>
	

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
		
		
		
		$(function(){
    
    var twoToneButton = document.querySelector('.twoToneButton');
    
    twoToneButton.addEventListener("click", function() {
        twoToneButton.innerHTML = "Posting (Please Wait...)";
        
      setTimeout( 
            function  (){  
                twoToneButton.innerHTML = "Posted";
                
            }, 600000);
    }, false);
    
	});

	</script>
	
	

</body>
</html>





