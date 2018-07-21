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

		$pmaxl = $_POST['pmaxl'];
		$pmaxt = $_POST['pmaxt'];
		$pminl = $_POST['pminl'];
		$pmint = $_POST['pmint'];
		$sdesp = $_POST['sdesp'];
		$desp = $_POST['desp'];
		$millage = $_POST['millage'];
		$engine = $_POST['engine'];
		$typeid = $_POST['type'];
		$startid = $_POST['start'];
		$pcid = $_POST['pc'];
		$speedometer = $_POST['speedometer'];
		$topspeed = $_POST['topspeed'];
		$gearbox = $_POST['gearbox'];
		$edisp = $_POST['ced'];
		
		$data=mysqli_query($con,"UPDATE `heavybikeposts` SET  `pmaxl` = '$pmaxl', `pmaxt` = '$pmaxt', `pminl` = '$pminl', `pmint` = '$pmint',  `sdesp` = '$sdesp', `desp` = '$desp', `millage` = '$millage',`engine` = '$engine', `type` = '$typeid', `start` = '$startid', `pc` = '$pcid', `speedometer` = '$speedometer', `topspeed` = '$topspeed', `gearbox` = '$gearbox',`edisp` = '$edisp' WHERE `heavybikeposts`.`post_id` = $id")or die( mysql_error() );
		
	
		
		echo"<h1> <center> Post Updated </h1>";
	}
	else{
		echo"cannot make changes ";
	}


?>

		







<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>
	
	
	
	<script  type="text/javascript">
				
		$(function(){
    
    var twoToneButton = document.querySelector('.twoToneButton');
    
    twoToneButton.addEventListener("click", function() {
        twoToneButton.innerHTML = "Updating (Please Wait...)";
        
      setTimeout( 
            function  (){  
                twoToneButton.innerHTML = "Posted";
                
            }, 600000);
    }, false);
    
	});

	</script>

</body>
</html><?php mysqli_close($con);?>