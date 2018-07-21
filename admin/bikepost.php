<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Welcome <?php echo $_SESSION['name'];?></title>

<?php   
 function fill_brand($con)  
 {  
      $output = '';  
      $sql = "SELECT model FROM bikeposts";  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["model"].'">'.$row["model"].'</option>';  
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
	
	
	
	
	<form method="post" action="bikepost.php" enctype="multipart/form-data">
	
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
										$rows=mysqli_query($con,"select * from bmakers")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $bmkval = $row['bmakers']; ?>"><?php echo $bmakers = $row['bmakers'];?></option>
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
							<div class="col-md-4 ">
									<div class="white-section">
										<label>Bike Model:</label>
										
										<input type="text" class="required sm-form-control" id="" name="model" rows="1">
									</div>
							</div>
						</div>
						
						<div class="col-md-4 bottommargin-sm">  
						<label>Existing Models:</label>
							<p>  
								 <select class="selectpicker" data-live-search="true" name="model_search" id="model">  
									  <option value="">SELECT MODEL</option>  
									  <?php echo fill_brand($con); ?>  
								 </select>  
								 <br /><br />  
								 <div class="row" id="show_product">  
									  <?php echo fill_product($con);?>  
								 </div>  
							</p>  
					   </div> 
						
						
						
						
						
						<div class="row">
						
						<div class="col-md-6" >
						<h4> Price Max </h4>
						
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmaxl" rows="1" value="0" >
							
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Lac</label>
								
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmaxt" rows="1" cols="10" value="0" >
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Thousands</label>
								
							</div>
							
							</div>
							
							
							<div class="col-md-6" >
							
							<h4> Price Min </h4>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pminl" rows="1" value="0" >
							
								
							</div>
							<div class="col-md-2 topmargin-sm">
								
								<label for="">Lac</label>
								
							</div>
							
							<div class="col-md-3 bottommargin-sm">
								
								<input type="text" class="required sm-form-control" id="" name="pmint" rows="1" cols="10" value="0"  >
								
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
							
						
							<div class="col-md-7 bottommargin-sm">
									<label for="template-contactform-message">Long Description <small>*</small></label>
									<textarea class="required sm-form-control" id="" name="desp" rows="6" cols="30"></textarea>
								</div>
								
							<div class="col-md-2 bottommargin-sm">
									<label for="template-contactform-message">Engine <small>*</small></label>
									<input type="text" class="required sm-form-control" id="" name="engine" rows="1" cols="30" value="0"  >
								</div>
							<div class="col-md-2 bottommargin-sm">
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
								
							<div class="col-md-4 bottommargin-sm">
									<label for="template-contactform-message">Millage <small>*</small></label>
									<input type="text" class="required sm-form-control" id="" name="millage" rows="1" cols="30" value="0"  >
								</div>
								
								
							
						</div>
						<div class="row">	
							
							
							<div class="col-md-3 topmargin-sm">
									<label for="">Type <small>*</small></label>
										<select class="selectpicker" name="type" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from biketype")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $typeid = $row['typeid']; ?>"><?php echo $type = $row['type'];?></option>
										<?php } ?>
										</select>								
							</div>
							
							<div class="col-md-3 topmargin-sm">
								<label for="">Starting <small>*</small></label>
								
								<select class="selectpicker" name="start" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from bs")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $id = $row['id']; ?>"><?php echo $start = $row['start'];?></option>
										<?php } ?>
										</select>
								
							</div>
							
							<div class="col-md-3 topmargin-sm">
								<label for="">Capacity <small>*</small></label>
								
								<select class="selectpicker" name="pc" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from bpc")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $id = $row['id']; ?>"><?php echo $capacity = $row['capacity'];?></option>
										<?php } ?>
										</select>
								
							</div>
							<div class="col-md-3 topmargin-sm">
								<label for="">Gearbox <small>*</small></label>
								
								<select class="selectpicker" name="gearbox" data-live-search="true">
											
											<option value="4-Speed">4-Speed</option>
											<option value="5-Speed">5-Speed</option>
										</select>
								
							</div>
							
							

							

							
							
								
							<div class="col-md-6 topmargin-sm bottommargin-sm">
								<label>Select Image 1:</label><br>
								<input id="input-6" name="image1" type="file"  accept="image/*">
							</div>
							
							<div class="col-md-6 topmargin-sm bottommargin-sm">
								<label>Select Image 2:</label><br>
								<input id="input-8" name="image2" type="file"  accept="image/*">
							</div>
								
						</div>
						<div class="row">	
						
						
							
						</div>
						<div class="bottommargin hidden-lg hidden-md"></div>
							
					</div><!-- .postcontent end -->


				</div>

			</div>

		</section><!-- #content end -->
	
	
	
		<center>
		
		<div class="twoToneCenter">
    
    <button name="submit" class="button twoToneButton">Post</button>
    
</div>

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
					url:"load_bikes.php",  
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

<?php 



if(isset($_POST['submit'])){ 	


     
     $imagen=$_FILES['image']['name'];$imaget=$_FILES['image']['type']; $imagetn=$_FILES['image']['tmp_name'];
     $imagen1=$_FILES['image1']['name'];$imaget1=$_FILES['image1']['type']; $imagetn1=$_FILES['image1']['tmp_name'];
     $imagen2=$_FILES['image2']['name'];$imaget2=$_FILES['image2']['type']; $imagetn2=$_FILES['image2']['tmp_name'];
	
	if ($imaget=="image/jpeg"or$imaget=="image/png"or$imaget=="image/gif" ){
		
		$imagen=md5(uniqid())  . "1.jpg";
		$imagenthumb=md5(uniqid())  . "1thumb.jpg";
		$imagen1=md5(uniqid())  . "2.jpg";
		$imagen1thumb=md5(uniqid())  . "2thumb.jpg";
		$imagen2=md5(uniqid())  . "3.jpg";
		$imagen2thumb=md5(uniqid())  . "3thumb.jpg";
		$company = $_POST['company'];
		$model = $_POST['model'];
		$pmaxl = $_POST['pmaxl'];
		$pmaxt = $_POST['pmaxt'];
		$pminl = $_POST['pminl'];
		$pmint = $_POST['pmint'];
		$year = $_POST['year'];
		$sdesp = $_POST['sdesp'];
		$desp = $_POST['desp'];
		$engine = $_POST['engine'];
		$millage = $_POST['millage'];
		$type = $_POST['type'];
		$start = $_POST['start'];
		$pc = $_POST['pc'];
		$gearbox = $_POST['gearbox'];
		$edisp = $_POST['ced'];
		
		
		//resizing start
	
			//image1
			$max_size =1500; //max image size in Pixels
			$destination_folder = '../images/bikes/large/';
			$destination_folder_thumb = '../images/bikes/thumb/';
			$watermark_png_file = 'images/watermark.png'; //path to watermark image
			
		 
			switch(strtolower($imaget)){ //determine uploaded image type 
					//Create new image from file
					case 'image/png': 
						$image_resource =  imagecreatefrompng($imagetn);
						break;
					case 'image/gif':
						$image_resource =  imagecreatefromgif($imagetn);
						break;          
					case 'image/jpeg': case 'image/pjpeg':
						$image_resource = imagecreatefromjpeg($imagetn);
						break;
					default:
						$image_resource = false;
				}
			
			if($image_resource){
				//Copy and resize part of an image with resampling
				list($img_width, $img_height) = getimagesize($imagetn);
				
				//Construct a proportional size of new image
				$image_scale        = min($max_size / $img_width, $max_size / $img_height); 
				$new_image_width    = ceil($image_scale * 800);
				$new_image_height   = ceil($image_scale * 500);
				$new_canvas         = imagecreatetruecolor($new_image_width , $new_image_height);

				//Resize image with new height and width
				if(imagecopyresampled($new_canvas, $image_resource , 0, 0, 0, 0, $new_image_width, $new_image_height, $img_width, $img_height))
				{
					
					imagejpeg($new_canvas, $destination_folder_thumb.'/'.$imagenthumb , 20);

					//calculate center position of watermark image
					$watermark_left = ($new_image_width)-(300); //watermark left
					$watermark_bottom = ($new_image_height)-(100); //watermark bottom

					$watermark = imagecreatefrompng($watermark_png_file); //watermark image

					//use PHP imagecopy() to merge two images.
					imagecopy($new_canvas, $watermark, $watermark_left, $watermark_bottom, 0, 0, 300, 100); //merge image
					
					
					//Or Save image to the folder
					imagejpeg($new_canvas, $destination_folder.'/'.$imagen , 70);
					
				}
			}
			
			$max_size =1500; //max image size in Pixels
			$destination_folder = '../images/bikes/large/';
			$destination_folder_thumb = '../images/bikes/thumb/';
			$watermark_png_file = 'images/watermark.png'; //path to watermark image
			
		 
			switch(strtolower($imaget1)){ //determine uploaded image type 
					//Create new image from file
					case 'image/png': 
						$image_resource =  imagecreatefrompng($imagetn1);
						break;
					case 'image/gif':
						$image_resource =  imagecreatefromgif($imagetn1);
						break;          
					case 'image/jpeg': case 'image/pjpeg':
						$image_resource = imagecreatefromjpeg($imagetn1);
						break;
					default:
						$image_resource = false;
				}
			
			if($image_resource){
				//Copy and resize part of an image with resampling
				list($img_width, $img_height) = getimagesize($imagetn1);
				//Construct a proportional size of new image
				$image_scale        = min($max_size / $img_width, $max_size / $img_height); 
				$new_image_width    = ceil($image_scale * 800);
				$new_image_height   = ceil($image_scale * 500);
				$new_canvas         = imagecreatetruecolor($new_image_width , $new_image_height);

				//Resize image with new height and width
				if(imagecopyresampled($new_canvas, $image_resource , 0, 0, 0, 0, $new_image_width, $new_image_height, $img_width, $img_height))
				{
					
					imagejpeg($new_canvas, $destination_folder_thumb.'/'.$imagen1thumb , 20);

					//calculate center position of watermark image
					$watermark_left = ($new_image_width)-(300); //watermark left
					$watermark_bottom = ($new_image_height)-(100); //watermark bottom

					$watermark = imagecreatefrompng($watermark_png_file); //watermark image

					//use PHP imagecopy() to merge two images.
					imagecopy($new_canvas, $watermark, $watermark_left, $watermark_bottom, 0, 0, 300, 100); //merge image
					
					
					//Or Save image to the folder
					imagejpeg($new_canvas, $destination_folder.'/'.$imagen1 , 70);
					
				}
			}
			
		
		
		
			//image3
			
			$max_size =1500; //max image size in Pixels
			$destination_folder = '../images/bikes/large/';
			$destination_folder_thumb = '../images/bikes/thumb/';
			$watermark_png_file = 'images/watermark.png'; //path to watermark image
			
		 
			switch(strtolower($imaget2)){ //determine uploaded image type 
					//Create new image from file
					case 'image/png': 
						$image_resource =  imagecreatefrompng($imagetn2);
						break;
					case 'image/gif':
						$image_resource =  imagecreatefromgif($imagetn2);
						break;          
					case 'image/jpeg': case 'image/pjpeg':
						$image_resource = imagecreatefromjpeg($imagetn2);
						break;
					default:
						$image_resource = false;
				}
			
			if($image_resource){
				//Copy and resize part of an image with resampling
				list($img_width, $img_height) = getimagesize($imagetn2);
				//Construct a proportional size of new image
				$image_scale        = min($max_size / $img_width, $max_size / $img_height); 
				$new_image_width    = ceil($image_scale * 800);
				$new_image_height   = ceil($image_scale * 500);
				$new_canvas         = imagecreatetruecolor($new_image_width , $new_image_height);

				//Resize image with new height and width
				if(imagecopyresampled($new_canvas, $image_resource , 0, 0, 0, 0, $new_image_width, $new_image_height, $img_width, $img_height))
				{
					
					imagejpeg($new_canvas, $destination_folder_thumb.'/'.$imagen2thumb , 20);

					//calculate center position of watermark image
					$watermark_left = ($new_image_width)-(300); //watermark left
					$watermark_bottom = ($new_image_height)-(100); //watermark bottom

					$watermark = imagecreatefrompng($watermark_png_file); //watermark image

					//use PHP imagecopy() to merge two images.
					imagecopy($new_canvas, $watermark, $watermark_left, $watermark_bottom, 0, 0, 300, 100); //merge image
					
					
					
					//Or Save image to the folder
					imagejpeg($new_canvas, $destination_folder.'/'.$imagen2 , 70);
					
				}
			}
		
		
		//resizing ends
		
		$data=mysqli_query($con,"INSERT INTO bikeposts (author,created,updated,company,model,pmaxl,pmaxt,pminl,pmint,year,img1,img2,img3,img1thumb,img2thumb,img3thumb,sdesp,desp,engine,millage,type,start,pc,gearbox,edisp) VALUES ('$author','$date','$date','$company','$model','$pmaxl','$pmaxt','$pminl','$pmint','$year','$imagen','$imagen1','$imagen2','$imagenthumb','$imagen1thumb','$imagen2thumb','$sdesp','$desp','$engine','$millage','$type','$start','$pc','$gearbox','$edisp')")or die( mysql_error() );
		
		echo"<h1> <center> Post Published </h1>";
	}
	else{
		echo "<script>alert ('Something is Wrong Please Check and Retry...')</script> ";
		
	} 
	

		
		
		
		
		
		}
		
		
		
		 mysqli_close($con);
		
		

?>







