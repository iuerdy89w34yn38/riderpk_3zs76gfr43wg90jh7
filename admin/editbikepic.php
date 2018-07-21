<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Welcome <?php echo $_SESSION['name'];?></title>

	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
	
	<?php
	
	 $id = $_GET['bikeid'];
	echo $id;
	
	 ?>
	
	
	<form method="post" action="editbikepicdone.php?bikeid=<?php echo "$id"; ?>" enctype="multipart/form-data">
	
	<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap">

				<div class="container" style="margin-right:none;">
				
				<?php 
	$rows=mysqli_query($con,"select * from bikeposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
		
		$imagen=$row['img1'];
		$imagen1=$row['img2'];
		$imagen2=$row['img3'];
		
	}	
	
	
	
	
		?>

					<!-- Post Content
					============================================= -->
					<div class=" nobottommargin clearfix">
						<div class="row">
							
							
							
						<div class="center topmargin-sm">
								<img src="../images/bikes/large/<?php echo "$imagen"; ?>" >
								<br>
								<label>Select Another Featured Image If Require:</label><br>
								<input id="input-5" name="nimage" type="file"  accept="image/*">
							</div>
							
							
							<div class="bottommargin hidden-lg hidden-md"></div>
							
						</div>
						<div class="row">	
							
							<div class="col-md-6 topmargin-sm bottommargin-sm">
								
								<img src="../images/bikes/large/<?php echo "$imagen1"; ?>" >

								<label>Select Another Image:</label><br>
								<input id="input-6" name="nimage1" type="file"  accept="image/*">
							</div>
							
							<div class="col-md-6 topmargin-sm bottommargin-sm">
							
								<img src="../images/bikes/large/<?php echo "$imagen2"; ?>" >

								<label>Select Another Image:</label><br>
								<input id="input-8" name="nimage2" type="file"  accept="image/*">
							</div>
						
						</div>
						<div class="bottommargin hidden-lg hidden-md"></div>
							
					</div><!-- .postcontent end -->


				</div>

			</div>

		</section><!-- #content end -->
	
	
	
	
	
	
	
	
	
	
		
		
		
		
		
		
		<div class="twoToneCenter">
    <button name="submit" class="twoToneButton">Update</button>
</div>

<br><br><br><br><br><br><br><br>
	
	








	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script type="text/javascript" src="../js/components/bs-filestyle.js"></script>
	
	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="../js/components/bs-select.js"></script>

	<!-- Select Splitter Plugin -->
	<script type="text/javascript" src="../js/components/selectsplitter.js"></script>

	

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>

	<script  type="text/javascript">
		$(document).on('ready', function() {
			$("#input-5").fileinput({
				showUpload: false,
				maxFileCount: 10,
				mainClass: "input-group-lg",
				browseClass: "btn btn-success",
				browseLabel: "Pick Image",
				browseIcon: "<i class=\"icon-picture\"></i> ",
				showCaption: true
			});

			$("#input-6").fileinput({
				showUpload: false,
				maxFileCount: 10,
				mainClass: "input-group-lg",
				browseClass: "btn btn-success",
				browseLabel: "Pick Image",
				browseIcon: "<i class=\"icon-picture\"></i> ",
				showCaption: true
			});

			$("#input-8").fileinput({
				showUpload: false,
				maxFileCount: 10,
				mainClass: "input-group-lg",
				browseClass: "btn btn-success",
				browseLabel: "Pick Image",
				browseIcon: "<i class=\"icon-picture\"></i> ",
				showCaption: true
			});

			$("#input-9").fileinput({
				previewFileType: "text",
				allowedFileExtensions: ["txt", "md", "ini", "text"],
				previewClass: "bg-warning",
				browseClass: "btn btn-primary",
				removeClass: "btn btn-default",
				uploadClass: "btn btn-default",
			});

			$("#input-10").fileinput({
				showUpload: false,
				layoutTemplates: {
					main1: "{preview}\n" +
					"<div class=\'input-group {class}\'>\n" +
					"   <div class=\'input-group-btn\'>\n" +
					"       {browse}\n" +
					"       {upload}\n" +
					"       {remove}\n" +
					"   </div>\n" +
					"   {caption}\n" +
					"</div>"
				}
			});

			$("#input-11").fileinput({
				maxFileCount: 10,
				allowedFileTypes: ["image", "video"]
			});

			$("#input-12").fileinput({
				showPreview: false,
				allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
				elErrorContainer: "#errorBlock"
			});
		});

	</script>
	
	
	
	<!-- Button  Script
	============================================= -->
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





