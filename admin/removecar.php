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
	$id = $_GET['carid'];
	
	
	$rows=mysqli_query($con,"select * from carposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
	$model = $row['model'];
	$year = $row['year'];
	}
	if (!empty($model)) {
	
	$cm=mysqli_query($con,"select * from cars where crval = '$model'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cm)){
		$modelname = $row['car'];
		
	}
	}
	else{
		header("location:notdone.php");
	}
	
	
	?>

	<div class="topmargin">
	<center>
<p> Your Car is <b> <?php echo "$modelname $year"; ?>  </b> Would you like to Remove it.? </p>


	<a href="removecaryes.php?carid=<?php echo "$id"; ?>" class="button">Yes</a>
	<a class="button"  onclick="document.getElementById('foo').innerHTML= 'Go  Back   Silly     .....'">No</a>
	
	<br><br>
	<p id="foo" class="a" style="font-size:20;color:black;"> </p>

</div>


<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>
	

</body>
</html><?php mysqli_close($con);?>