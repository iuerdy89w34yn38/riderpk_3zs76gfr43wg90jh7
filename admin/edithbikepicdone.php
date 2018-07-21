<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Add New POST</title>

	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
	<?php  ?>
	



</div>

		<?php 
		$id = $_GET['hbikeid'];
		?>

		
	
		
		
		<?php 


		if(isset($_POST['submit'])){ 	

		
		$rows=mysqli_query($con,"select * from heavybikeposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
		
		$imagen=$row['img1'];
		$imagenthumb=$row['img1thumb'];
		$imagen1=$row['img2'];
		$imagen1thumb=$row['img2thumb'];
		$imagen2=$row['img3'];
		$imagen2thumb=$row['img3thumb'];
		$file1="../images/hbikes/large/$imagen";
		$file1thumb="../images/hbikes/thumb/$imagenthumb";
		$file2="../images/hbikes/large/$imagen1";
		$file2thumb="../images/hbikes/thumb/$imagen1thumb";
		$file3="../images/hbikes/large/$imagen2";
		$file3thumb="../images/hbikes/thumb/$imagen2thumb";
		
	}

     
     $imagenn=$_FILES['nimage']['name'];$imaget=$_FILES['nimage']['type']; $imagetn=$_FILES['nimage']['tmp_name'];
     $imagenn1=$_FILES['nimage1']['name'];$imaget1=$_FILES['nimage1']['type']; $imagetn1=$_FILES['nimage1']['tmp_name'];
     $imagenn2=$_FILES['nimage2']['name'];$imaget2=$_FILES['nimage2']['type']; $imagetn2=$_FILES['nimage2']['tmp_name'];


	
	if ($imaget=="image/jpeg"or$imaget=="image/png"or$imaget=="image/gif"or$imaget1=="image/jpeg"or$imaget1=="image/png"or$imaget1=="image/gif"or$imaget2=="image/jpeg"or$imaget2=="image/png"or$imaget2=="image/gif"){
		
		if (!empty($imagenn)) {
			
			
			$delfile1 = unlink($file1);
			$delfile1thumb = unlink($file1thumb);
			$imagenn=md5(uniqid())  . "1.png";
			$imagennthumb=md5(uniqid())  . "1thumb.jpg";

			
			//image1
			$max_size =1500; //max image size in Pixels
			$destination_folder = '../images/hbikes/large/';
			$destination_folder_thumb = '../images/hbikes/thumb/';
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
					
					imagejpeg($new_canvas, $destination_folder_thumb.'/'.$imagennthumb , 20);

					//calculate center position of watermark image
					$watermark_left = ($new_image_width)-(300); //watermark left
					$watermark_bottom = ($new_image_height)-(100); //watermark bottom

					$watermark = imagecreatefrompng($watermark_png_file); //watermark image

					//use PHP imagecopy() to merge two images.
					imagecopy($new_canvas, $watermark, $watermark_left, $watermark_bottom, 0, 0, 300, 100); //merge image
					
					
					
					//Or Save image to the folder
					imagejpeg($new_canvas, $destination_folder.'/'.$imagenn , 70);
					
				}
			}
			
			
			$data=mysqli_query($con,"UPDATE `heavybikeposts` SET `img1` = '$imagenn' WHERE `heavybikeposts`.`post_id` = $id")or die( mysql_error() );
			$data=mysqli_query($con,"UPDATE `heavybikeposts` SET `img1thumb` = '$imagennthumb' WHERE `heavybikeposts`.`post_id` = $id")or die( mysql_error() );
	
		}
		
		if (!empty($imagenn1)) {
			$delfile2 = unlink($file2);
			$delfile2thumb = unlink($file2thumb);
			$imagenn1=md5(uniqid())  . "1.png";
			$imagenn1thumb=md5(uniqid())  . "1thumb.jpg";

			
			
			
			//image2
			
			$max_size =1500; //max image size in Pixels
			$destination_folder = '../images/hbikes/large/';
			$destination_folder_thumb = '../images/hbikes/thumb/';
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
					
					imagejpeg($new_canvas, $destination_folder_thumb.'/'.$imagenn1thumb , 20);

					//calculate center position of watermark image
					$watermark_left = ($new_image_width)-(300); //watermark left
					$watermark_bottom = ($new_image_height)-(100); //watermark bottom

					$watermark = imagecreatefrompng($watermark_png_file); //watermark image

					//use PHP imagecopy() to merge two images.
					imagecopy($new_canvas, $watermark, $watermark_left, $watermark_bottom, 0, 0, 300, 100); //merge image
					
					
					
					//Or Save image to the folder
					imagejpeg($new_canvas, $destination_folder.'/'.$imagenn1 , 70);
					
				}
			}
			
			
			$data=mysqli_query($con,"UPDATE `heavybikeposts` SET `img2` = '$imagenn1' WHERE `heavybikeposts`.`post_id` = $id")or die( mysql_error() );
			$data=mysqli_query($con,"UPDATE `heavybikeposts` SET `img2thumb` = '$imagenn1thumb' WHERE `heavybikeposts`.`post_id` = $id")or die( mysql_error() );
	
		}
		
		if (!empty($imagenn2)) {
			
			
			$delfile3 = unlink($file3);
			$delfile3thumb = unlink($file3thumb);
			$imagenn2=md5(uniqid())  . "1.png";
			$imagenn2thumb=md5(uniqid())  . "1thumb.jpg";

			
			//image3
			
			$max_size =1500; //max image size in Pixels
			$destination_folder = '../images/hbikes/large/';
			$destination_folder_thumb = '../images/hbikes/thumb/';
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
					
					imagejpeg($new_canvas, $destination_folder_thumb.'/'.$imagenn2thumb , 20);

					//calculate center position of watermark image
					$watermark_left = ($new_image_width)-(300); //watermark left
					$watermark_bottom = ($new_image_height)-(100); //watermark bottom

					$watermark = imagecreatefrompng($watermark_png_file); //watermark image

					//use PHP imagecopy() to merge two images.
					imagecopy($new_canvas, $watermark, $watermark_left, $watermark_bottom, 0, 0, 300, 100); //merge image
					
					
					
					//Or Save image to the folder
					imagejpeg($new_canvas, $destination_folder.'/'.$imagenn2 , 70);
					
				}
			}
			
			
			$data=mysqli_query($con,"UPDATE `heavybikeposts` SET `img3` = '$imagenn2' WHERE `heavybikeposts`.`post_id` = $id")or die( mysql_error() );
			$data=mysqli_query($con,"UPDATE `heavybikeposts` SET `img3thumb` = '$imagenn2thumb' WHERE `heavybikeposts`.`post_id` = $id")or die( mysql_error() );
	
		}
		
		echo"<h1> <center> Changes Saved </h1>";
	}
	else{
		echo " <center> No Changes have been made.... ";
		
	} 
	

		
		}
		
		

?>

		







<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>
	

</body>
</html><?php mysqli_close($con);?>