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
	
			$company = $_POST['company'];
			$model = $_POST['model'];
			$year = $_POST['year'];
	
		
		
		$data=mysqli_query($con,"UPDATE `heavybikeposts` SET `company` = '$company', `year` = '$year', `model` = '$model' WHERE `heavybikeposts`.`post_id` = $id")or die( mysql_error() );
		
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