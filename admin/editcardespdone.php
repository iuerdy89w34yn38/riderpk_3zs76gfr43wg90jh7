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
		$pmaxl = $_POST['pmaxl'];
		$pmaxt = $_POST['pmaxt'];
		$pminl = $_POST['pminl'];
		$pmint = $_POST['pmint'];
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
		
		
		$data=mysqli_query($con,"UPDATE `carposts` SET `pmaxl` = '$pmaxl', `pmaxt` = '$pmaxt', `pminl` = '$pminl', `pmint` = '$pmint', `sdesp` = '$sdesp', `desp` = '$desp', `inter` = '$inter', `exter` = '$exter', `millage` = '$millage',`engine` = '$engine', `gearbox` = '$gearbox',`edisp` = '$edisp',`transmission` = '$transmission', `pc` = '$pc', `fuel` = '$fuel' WHERE `carposts`.`post_id` = $id")or die( mysql_error() );
		
		echo"<h1> <center> Post Updated </h1>";
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