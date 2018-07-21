<?php 
	include('secure.php');
	?>
<html>
	<head>
	<title>Insert Post - Bikes</title>
	
		<link type="text/css" rel="stylesheet" href="../css/style.css">
		
		
	</head>
	
<body>

	
	<div>
	<form method="post" action="insert_bikes.php" enctype="multipart/form-data">
	<br> <br> 
	<center><h1> Insert New Post </h1> </center>
	<br>
	<p> Enter Post Title : </p>
	<input type="text" name="title" size="25">
	
	
	<br>
	<p> Select Post Image : </p>
	<input type="file" name="image" >
	
	
	<br>
	<p> Enter Post Content : </p>
	<textarea name="cont"cols="60" rows="6" size="150" >
	</textarea>
	<br>
	
	<input type="submit" name="submit" value="Publish">
	
	
	
	
	
	
	
	
	
	
	
	</form>
	
	
</body>
</html><?php mysqli_close($con);?>
<?php 

include('../inc/connect.php');

if(isset($_POST['submit'])){ 	
     $title=$_POST['title'];
     $cont=$_POST["cont"];
     $imagen=$_FILES['image']['name'];
      $imaget=$_FILES['image']['type']; $imagetn=$_FILES['image']['tmp_name'];


	if($title==''){
		echo "<script>alert('Title cannot be empty')</script>";
		exit();
	}
	if ($imaget=="image/jpeg"or$imaget=="image/png"or$imaget=="image/gif" ){
		move_uploaded_file($imagetn,"../img/$imagen");
		
		$data=mysqli_query($con,"INSERT INTO bikes (post_name,post_img,post_cont) VALUES ('$title','$imagen','$cont')")or die( mysql_error() );
		echo"<h1> <center> Post Published </h1>";
	}
	else{
		echo "<script>alert ('image type is not supported')</script> ";
		exit();
	} 
	

		
		
		
		
		
		}
		
		
		
		
		
		







?>