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
		$id = $_GET['bikeid'];
		?>

		<?php 



		if(isset($_POST['submit'])){ 	
	
			$companyname = $_POST['company'];
			$model = $_POST['model'];
			$year = $_POST['year'];
	
		
		
		$data=mysqli_query($con,"UPDATE `bikeposts` SET `company` = '$companyname', `year` = '$year', `model` = '$model' WHERE `bikeposts`.`post_id` = $id")or die( mysql_error() );
		
		echo"<h1> <center> Post Published </h1>";
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