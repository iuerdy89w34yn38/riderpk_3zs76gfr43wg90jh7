<html>
	<head>
	
	
	<?php include('include/head.php'); ?>
	<?php include('include/connect.php'); ?>
	
	
	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="../css/components/bs-select.css" type="text/css" />

	
	<title>Cars Search</title>
	
	
	
	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<?php include('include/header.php'); ?>
		
		
		<?php
		
		if(empty($company)) if ( !empty ($_GET['company']) ) $company = $_GET['company'];
		
		
if(isset($_POST['submit']) ){ 	
	
	$company = $_POST['company'];
	$pmaxl = $_POST['pmaxl'];
	$year = $_POST['year'];
	$millage = $_POST['millage'];
	$gearbox = $_POST['cgb'];
	$edisp = $_POST['ced'];
	$transmission = $_POST['cgt'];
	$pc = $_POST['pc'];
	
	
	$sort = $_POST['sort'];
	$order = $_POST['order'];

	
	
}
	
	?>
	
	
	
	<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap" style="padding:20px 0;">

				<div class="container" style="">
				
				
				<div class="col-md-3">
				<form method="post" action="searchcars.php" enctype="multipart/form-data">
	
				<h3>	Search Options:		</h3>
				
					<div class="white-section">
										
						<label class="col-md-6">Company:</label>
						<select class="selectpicker col-md-6" name="company" data-live-search="true">
							<option value="<?php 
						$rows=mysqli_query($con,"select * from cmakers")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
						?>|<?php echo $cmakers = $row['cmakers']; }?>"> Any </option>
						
							
							
							<?php 
						$rows=mysqli_query($con,"select * from cmakers")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $cmakers = $row['cmakers']; ?>" <?php if(!empty($company)) if($company==$row['cmakers']) echo "selected"; ?> ><?php echo $car = $row['cmakers'];?></option>
						<?php } ?>
						</select>
					</div>
					<br>
					
					<div class="white-section">
										<label class="col-md-6">Year:</label>
						<select class="selectpicker col-md-6" name="year" data-live-search="true">
						<option value="<?php 
						$rows=mysqli_query($con,"select * from years")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
						?>|<?php echo $cmakers = $row['year']; }?>"> Any </option>
						
							<?php 
						$rows=mysqli_query($con,"select * from years")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['year']; ?>" > <?php echo $year = $row['year'];?></option>
						<?php } ?>
						</select>
					</div>
					<br>
					<div class="white-section">
										<label class="col-md-6">Price Max (Lacs):</label>
						<select class="selectpicker col-md-6" name="pmaxl" data-live-search="true">
						<option value="1000"> Any </option>
						<option value="5"> 5 </option>
						<option value="10"> 10 </option>
						<option value="15"> 15 </option>
						<option value="20"> 20 </option>
						<option value="25"> 25 </option>
						<option value="30"> 30 </option>
						<option value="35"> 35 </option>
						<option value="40"> 40 </option>
						<option value="50"> 50 </option>
						<option value="60"> 60 </option>
						<option value="70"> 70 </option>
						<option value="80"> 80 </option>
						<option value="90"> 90 </option>
						<option value="100">100 </option>
						
						</select>
					</div>
					<br>
					<br>
					<div class="white-section">
						<label class="col-md-6">Minimum Engine Displacement:</label>
						<select class="selectpicker col-md-6" name="ced" data-live-search="true">
						<option value="10000"> Any </option>
						
							<?php 
						$rows=mysqli_query($con,"select ced from carspecs")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['ced']; ?>" <?php if(!empty($edisp)) if($edisp==$row['ced']) echo "selected"; ?>> <?php echo $year = $row['ced'];?> CC</option>
						<?php } ?>
						</select>
					</div>
					
		
					<br>
					<br>
					<div class="white-section">
						<label class="col-md-6">Transmission:</label>
						<select class="selectpicker col-md-6" name="cgt" data-live-search="true">
						<option value="<?php 
						$rows=mysqli_query($con,"select cgt from carspecs")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
						?>|<?php echo $cmakers = $row['cgt']; }?>"> Any </option>
						
						<?php 
						$rows=mysqli_query($con,"select cgt from carspecs")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['cgt']; ?>" <?php if(!empty($transmission)) if($transmission==$row['cgt']) echo "selected"; ?>> <?php echo $year = $row['cgt'];?></option>
						<?php } ?>
						</select>
						
						</select>
					</div>
					
					<br>
					<div class="white-section">
						<label class="col-md-6">Least Millage:</label>
						<select class="selectpicker col-md-6" name="millage" data-live-search="true">
						<option value="100"> Any </option>
						<option value="5"> 5 KM/L </option>
						<option value="10"> 10 KM/L </option>
						<option value="15"> 15 KM/L </option>
						<option value="20"> 20 KM/L </option>
						<option value="25"> 25 KM/L </option>
						<option value="30"> 30 KM/L </option>
						<option value="35"> 35 KM/L </option>
						<option value="40"> 40 KM/L </option>
						<option value="45"> 45 KM/L </option>
						<option value="50"> 50 KM/L	 </option>
						
						
						</select>
					</div>
					<br>
					
					<div class="white-section">
										<label class="col-md-6">Gearbox Counts:</label>
						<select class="selectpicker col-md-6" name="cgb" data-live-search="true">
						<option value="<?php 
						$rows=mysqli_query($con,"select cgb from carspecs")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
						?>|<?php echo $cmakers = $row['cgb']; }?>"> Any </option>
						
							<?php 
						$rows=mysqli_query($con,"select cgb from carspecs")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['cgb']; ?>"> <?php echo $year = $row['cgb'];?></option>
						<?php } ?>
						</select>
					</div>
					<br>
					<div class="white-section">
										<label class="col-md-6">Least Petrol Capacity:</label>
						<select class="selectpicker col-md-6" name="pc" data-live-search="true">
						<option value="100"> Any </option>
						
							<?php 
						$rows=mysqli_query($con,"select capacity from bpc")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['capacity']; ?>"> <?php echo $year = $row['capacity'];?> Liters</option>
						<?php } ?>
						</select>
					</div>
					
					<br>
					
					<div class="white-section">
						<label class="col-md-2">Sort:</label>
						<select class="selectpicker col-md-5" name="sort" data-live-search="true">
						<option value="company"> Company </option>
						<option value="year"> Year </option>
						<option value="pmaxl"> Price </option>
						<option value="millage"> Millage </option>
						<option value="gearbox"> Gearbox </option>
						<option value="edisp"> Engine </option>
						<option selected="selected" value="transmission"> Transmission </option>
						<option value="pc"> Petrol Cap. </option>
						</select>
						<select class="selectpicker col-md-4" name="order" data-live-search="true">
						<option value="asc"> 1 - 10 </option>
						<option value="desc"> 10 - 1 </option>
						</select>
					</div>
					
					<center>
					<button name="submit" class="button">Search</button>
					</center>
				
				</form>
				</div>
				
				
				
				<div class="col-md-9">
				<h3>	Search Results:		</h3>
<?php 

if(isset($_POST['submit']) ){ 	
	
	$company = $_POST['company'];
	$pmaxl = $_POST['pmaxl'];
	$year = $_POST['year'];
	$millage = $_POST['millage'];
	$gearbox = $_POST['cgb'];
	$edisp = $_POST['ced'];
	$transmission = $_POST['cgt'];
	$pc = $_POST['pc'];
	
	
	$sort = $_POST['sort'];
	$order = $_POST['order'];

	
		$sql = "SELECT * FROM carposts WHERE  company REGEXP ('$company') AND year REGEXP ('$year') AND gearbox REGEXP ('$gearbox') AND transmission REGEXP ('$transmission') AND pmaxl <= ('$pmaxl') AND edisp <= ('$edisp') AND millage <= ('$millage') AND pc <= ('$pc') ORDER BY $sort $order ";
		$result = $con->query($sql)or die($con->error);
		if(empty($result)){
		echo"No Result found;";
		}
		else{
			
			
		?>
		
						
						
						<div id="posts" class="post-grid grid-container post-masonry grid-3 clearfix">
	<?php 
		while($row = $result->fetch_assoc()) {
		?>
							<div class="entry clearfix">
								<div class="entry-image">
									<a href="images/cars/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/cars/thumb/<?php echo $row['img1thumb'] ?>" alt="<?php echo $row['model'] ?>"></a>
								</div>
								<div class="entry-title">
									<h2><a href="ncarposts.php?carpostid=<?php  echo $row['post_id']  ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
									<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
									<li><i class="icon-info"></i><?php echo $row['millage'] ?></li>
									<li><i class="icon-sitemap"></i><?php echo $row['gearbox'] ?></li>
									<li><i class="icon-download2"></i><?php echo $row['edisp'] ?></li>
									<li><i class="icon-cogs"></i><?php echo $row['transmission'] ?></li>
									<li><i class="icon-tint"></i><?php echo $row['pc'] ?></li>
								</ul>
								<div class="entry-content">
									<p><?php
									$sdespf = $row['sdesp'] ;
									$sdesp = substr($sdespf,0,120);
									echo $sdesp;
									?>...</p>
									<a href="ncarposts.php?carpostid=<?php  echo $row['post_id']  ?>"class="more-link">Read More</a>
								</div>
							</div>
							
							<?php } } }
	else {
		
		 if(empty($_GET['company'])) echo "Please Start Searching...";
		 
		 else{
		
		$sql = "SELECT * FROM carposts WHERE  company REGEXP ('$company') ORDER BY company desc ";
		$result = $con->query($sql)or die($con->error);
		
		
		
			
		?>
		
						
						
						<div id="posts" class="post-grid grid-container post-masonry grid-3 clearfix">
	<?php 
		while($row = $result->fetch_assoc()) {
		?>
							<div class="entry clearfix">
								<div class="entry-image">
									<a href="images/cars/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/cars/thumb/<?php echo $row['img1thumb'] ?>" alt="<?php echo $row['model'] ?>"></a>
								</div>
								<div class="entry-title">
									<h2><a href="ncarposts.php?carpostid=<?php  echo $row['post_id']  ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
									<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
									<li><i class="icon-info"></i><?php echo $row['millage'] ?></li>
									<li><i class="icon-sitemap"></i><?php echo $row['gearbox'] ?></li>
									<li><i class="icon-download2"></i><?php echo $row['edisp'] ?></li>
									<li><i class="icon-cogs"></i><?php echo $row['transmission'] ?></li>
									<li><i class="icon-tint"></i><?php echo $row['pc'] ?></li>
								</ul>
								<div class="entry-content">
									<p><?php
									$sdespf = $row['sdesp'] ;
									$sdesp = substr($sdespf,0,120);
									echo $sdesp;
									?>...</p>
									<a href="ncarposts.php?carpostid=<?php  echo $row['post_id']  ?>"class="more-link">Read More</a>
								</div>
							</div>
							
	<?php } } }?>
							
							
						</div>

									
							
				
				</div>
				
				
				</div>

			</div>

		</section><!-- #content end -->
	
	
		
		
		
		
    












	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script type="text/javascript" src="js/components/bs-filestyle.js"></script>
	
	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="js/components/bs-select.js"></script>

	<!-- Select Splitter Plugin -->
	<script type="text/javascript" src="js/components/selectsplitter.js"></script>

	

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="/js/functions.js"></script>

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
	

</body>
</html>









