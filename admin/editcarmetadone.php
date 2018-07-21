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
		$id = $_GET['carid'];
		?>

		<?php 



		if(isset($_POST['submit'])){ 	
	
			$company = $_POST['company'];
			$model = $_POST['model'];
			$modelv = $_POST['modelv'];
			$year = $_POST['year'];
	
		
		
		$data=mysqli_query($con,"UPDATE `carposts` SET `company` = '$company', `year` = '$year', `model` = '$model', `modelv` = '$modelv' WHERE `carposts`.`post_id` = $id")or die( mysql_error() );
		
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