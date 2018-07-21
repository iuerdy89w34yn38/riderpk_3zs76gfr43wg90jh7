<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Add New POST</title>

	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
	<?php  
	$id = $_GET['bikeid'];
	
	
	$rows=mysqli_query($con,"select * from bikeposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
	$model = $row['model'];
		
		
		$imagen=$row['img1'];
		$imagenthumb=$row['img1thumb'];
		$imagen1=$row['img2'];
		$imagen1thumb=$row['img2thumb'];
		$imagen2=$row['img3'];
		$imagen2thumb=$row['img3thumb'];
		$file1="../images/bikes/large/$imagen";
		$file1thumb="../images/bikes/thumb/$imagenthumb";
		$file2="../images/bikes/large/$imagen1";
		$file2thumb="../images/bikes/thumb/$imagen1thumb";
		$file3="../images/bikes/large/$imagen2";
		$file3thumb="../images/bikes/thumb/$imagen2thumb";
		
		
	if (!empty($model)) {

		$delfile1 = unlink($file1);
		$delfile1thumb = unlink($file1thumb);
		$delfile2 = unlink($file2);
		$delfile2thumb = unlink($file2thumb);
		$delfile3 = unlink($file3);
		$delfile3thumb = unlink($file3thumb);
		

	$del=mysqli_query($con,"DELETE FROM `bikeposts` WHERE `bikeposts`.`post_id` = $id");
	
	}
	else{
		header("location:notdone.php");
	}
	
	
	?>


</div>

		
		<section>
		

			<div class="content-wrap" data-animate="fadein" style="padding-top:10px;">

				<div class="container clearfix">
					<center>
					<br><br><br>
					
					<p class="h2">Your Car Has Been Removed </p>

				
			</div>
			
		</section>
		







<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>
	

</body>
</html><?php mysqli_close($con);?>