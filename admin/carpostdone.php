
<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Add New POST</title>

	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	



</div>




<?php 
if(isset($_POST['submit'])){ 	


								date_default_timezone_set("Asia/Karachi");
								$date= date("Y-m-d");
								$author=$_SESSION['name'];

     
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
		$modelv = $_POST['modelv'];
		$pmaxl = $_POST['pmaxl'];
		$pmaxt = $_POST['pmaxt'];
		$pminl = $_POST['pminl'];
		$pmint = $_POST['pmint'];
		$year = $_POST['year'];
		$sdesp = $_POST['sdesp'];
		$desp = $_POST['desp'];
		$inter = $_POST['inter'];
		$exter = $_POST['exter'];
		$millage = $_POST['millage'];
		$engine = $_POST['engine'];
		$gearbox = $_POST['cgb'];
		$edisp = $_POST['ced'];
		$transmission = $_POST['cgt'];
		$pc = $_POST['pc'];
		$fuel = $_POST['cft'];
		
		//resizing start
	
			//image1
			$max_size = 1200; //max image size in Pixels
			$destination_folder = '../images/cars/large/';
			$destination_folder_thumb = '../images/cars/thumb/';
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
			
			//image2
			
			$max_size = 1200; //max image size in Pixels
			$destination_folder = '../images/cars/large/';
			$destination_folder_thumb = '../images/cars/thumb/';
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
			
			$max_size = 1200; //max image size in Pixels
			$destination_folder = '../images/cars/large/';
			$destination_folder_thumb = '../images/cars/thumb/';
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
		
		
		$data=mysqli_query($con,"INSERT INTO carposts (author,created,updated,company,model,modelv,pmaxl,pmaxt,pminl,pmint,year,img1,img2,img3,img1thumb,img2thumb,img3thumb,sdesp,desp,inter,exter,millage,engine,gearbox,edisp,transmission,pc,fuel) VALUES ('$author','$date','$date','$company','$model','$modelv','$pmaxl','$pmaxt','$pminl','$pmint','$year','$imagen','$imagen1','$imagen2','$imagenthumb','$imagen1thumb','$imagen2thumb','$sdesp','$desp','$inter','$exter','$millage','$engine','$gearbox','$edisp','$transmission','$pc','$fuel')")or die( mysqli_error($con) );
		
		
		
		
		echo"<h1> <center> Post Published </h1>";
	}
	else{
		echo "<script>alert ('Something is Wrong Please Check and Retry...')</script> ";
		
	} 	
		
		}
		
	 mysqli_close($con);

?>


