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
	
	$company = $row['company'];	
	$model = $row['model'];
	$year = $row['year'];

	}
	if (!empty($model)) {

	$cn=mysqli_query($con,"select * from bmakers where bmkval= '$company'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cn)){
		$companyname = $row['bmakers'];
	}
	
	$cm=mysqli_query($con,"select * from years where val= '$year'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cm)){
		$yearn = $row['year'];
	}
	
	
	}
	else{
		header("location:notdone.php");
	}
	
	?>

	<div class="topmargin">
	<center>
<p> Your Bike is <b> <?php echo "$companyname $model $yearn"; ?>  </b> Would you like to Remove it.? </p>


	<a href="removebikeyes.php?bikeid=<?php echo "$id"; ?>" class="button">Yes</a>
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