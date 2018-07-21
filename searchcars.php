<html>
	<head>
	
	
	<?php include('include/head.php'); ?>
	<?php include('include/connect.php'); ?>
	
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
	
	
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Hamza Pervaiz, RidersPk" />
	<meta name="description" content="Search <?php if ( !empty ($company) ) echo $company ; ?> Cars,Bikes and Heavy Bikes in Pakistan, New Cars Details, New Bikes Details,New Heavy Bikes Details,Honda cars in Pakistan,Toyota cars in Pakistan  " />
	<meta name="keywords" content="cars,<?php if ( !empty ($company) ) echo $company ; ?>,car price,car details,heavy bikes specs,new bike price,toyota cars in pakistan" />
	<meta name="classification" content="vehicle,motorized vehicle,heavybikes,sports" />
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="10 days" />
	<meta name="creator" content="Hamza Pervaiz" />
	<meta name="publisher" content="RidersPk" />
	
<link href="https://www.riderspk.com/" hreflang="x-default" rel="alternate" />
<link href="https://www.riderspk.com//" rel="canonical" />
<meta property="og:type"  content="website"/>
<meta property="og:title" content="<?php if ( !empty ($company) ) echo $company ; ?> Details" />
<meta property="og:description" content="Cars, Bikes and Heavy Bikes in Pakistan, New Cars Details, New Bikes Details,New Heavy Bikes Details,Honda cars in Pakistan,Toyota cars in Pakistan  "/>
<meta property="og:site_name" content="RidersPk" />
<meta property="og:url"  content="https://www.riderspk.com/"/>

	
	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

	
	<title><?php if ( !empty ($company) ) echo $company ; ?> Cars Details Search</title>
	
	
	
	
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
				<form method="post" action="search_cars" enctype="multipart/form-data">
	
				<h3>	Search Options:	</h3>
				
					<div class="white-section">
										
						<label class="col-md-6"><i class="icon-globe"></i> &nbsp	Company:</label>
						<select class="selectpicker col-md-6" name="company" data-live-search="true">
							<option value=""> Any </option>
						
							
							
							<?php 
						$rows=mysqli_query($con,"select * from cmakers")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $cmakers = $row['cmakers']; ?>" <?php if(!empty($company)) if($company==$row['cmakers']) echo "selected"; ?> ><?php echo $car = $row['cmakers'];?></option>
						<?php } ?>
						</select>
					</div>
					<br>
					<br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-info"></i> &nbsp	 Year:</label>
						<select class="selectpicker col-md-6" name="year" data-live-search="true">
							<option value=""> Any </option>
						
							
							
							<?php 
						$rows=mysqli_query($con,"select * from years")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $cmakers = $row['year']; ?>" <?php if(!empty($year)) if($year==$row['year']) echo "selected"; ?> ><?php echo $car = $row['year'];?></option>
						<?php } ?>
						</select>
					</div>
					<br><br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-dollar"></i> &nbsp	Price Max (Lacs):</label>
						<select class="selectpicker col-md-6" name="pmaxl" data-live-search="true">
						<option value="1000"> Any </option>

						<option value="1" <?php if(!empty($pmaxl)) if($pmaxl=="1") echo "selected"; ?>> 1 </option>
						<option value="5" <?php if(!empty($pmaxl)) if($pmaxl=="5") echo "selected"; ?>> 5 </option>
						<option value="10" <?php if(!empty($pmaxl)) if($pmaxl=="10") echo "selected"; ?>> 10 </option>
						<option value="15" <?php if(!empty($pmaxl)) if($pmaxl=="15") echo "selected"; ?>> 15 </option>
						<option value="20" <?php if(!empty($pmaxl)) if($pmaxl=="20") echo "selected"; ?>> 20 </option>
						<option value="25" <?php if(!empty($pmaxl)) if($pmaxl=="25") echo "selected"; ?>> 25 </option>
						<option value="30" <?php if(!empty($pmaxl)) if($pmaxl=="30") echo "selected"; ?>> 25 </option>
						<option value="40" <?php if(!empty($pmaxl)) if($pmaxl=="40") echo "selected"; ?>> 25 </option>
						<option value="50" <?php if(!empty($pmaxl)) if($pmaxl=="50") echo "selected"; ?>> 25 </option>
						<option value="60" <?php if(!empty($pmaxl)) if($pmaxl=="60") echo "selected"; ?>> 25 </option>
						<option value="70" <?php if(!empty($pmaxl)) if($pmaxl=="70") echo "selected"; ?>> 25 </option>
						<option value="80" <?php if(!empty($pmaxl)) if($pmaxl=="80") echo "selected"; ?>> 25 </option>
						<option value="90" <?php if(!empty($pmaxl)) if($pmaxl=="90") echo "selected"; ?>> 25 </option>
						
						
						
						</select>
					</div>
					<br>
					<br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-download2"></i> &nbsp	Min Engine Displacement:</label>
						<select class="selectpicker col-md-6" name="ced" data-live-search="true">
						<option value="0"> Any </option>
						
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
						<label class="col-md-6"><i class="icon-cogs"></i> &nbsp	Transmission:</label>
						<select class="selectpicker col-md-6" name="cgt" data-live-search="true">
						<option value=""> Any </option>
						
						<?php 
						$rows=mysqli_query($con,"select cgt from carspecs")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['cgt']; ?>" <?php if(!empty($transmission)) if($transmission==$row['cgt']) echo "selected"; ?>> <?php echo $year = $row['cgt'];?></option>
						<?php } ?>
						</select>
						
						</select>
					</div>
					
					<br><br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-filter"></i> &nbsp	Least Millage:</label>
						<select class="selectpicker col-md-6" name="millage" data-live-search="true">
						<option value="0"> Any </option>
						<option value="<?php if(!empty($millage)) echo "$millage"; ?>" <?php if(!empty($millage)) echo "selected";  ?>> <?php  if(!empty($millage)) if($millage=="100") echo"Any"; else echo "$millage"; ?> </option>
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
					<br><br>
					
					<div class="white-section">
										<label class="col-md-6"><i class="icon-sitemap"></i> &nbsp	Gearbox Counts:</label>
						<select class="selectpicker col-md-6" name="cgb" data-live-search="true">
						<option value=""> Any </option>
						
							<?php 
						$rows=mysqli_query($con,"select cgb from carspecs")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['cgb']; ?>" <?php if(!empty($gearbox)) if($gearbox==$row['cgb']) echo "selected"; ?> > <?php echo $year = $row['cgb'];?></option>
						<?php } ?>
						</select>
					</div>
					<br><br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-tint"></i> &nbsp	Least Petrol Capacity:</label>
						<select class="selectpicker col-md-6" name="pc" data-live-search="true">
						<option value="0"> Any </option>
						
							<?php 
						$rows=mysqli_query($con,"select capacity from bpc")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['capacity']; ?>" <?php if(!empty($pc)) if($pc==$row['capacity']) echo "selected"; ?> > <?php echo $year = $row['capacity'];?> Liters</option>
						<?php } ?>
						</select>
					</div>
					
					<br><br>
					
					<div class="white-section">
						<label class="col-md-2">Sort:</label>
						<select class="selectpicker col-md-5" name="sort" data-live-search="true">
						<option value="company" <?php if(!empty($sort)) if($sort=="company") echo "selected"; ?>> Company </option>
						<option value="year" <?php if(!empty($sort)) if($sort=="year") echo "selected"; ?>> Year </option>
						<option value="pmaxl" <?php if(!empty($sort)) if($sort=="pmaxl") echo "selected"; ?>> Price </option>
						<option value="millage" <?php if(!empty($sort)) if($sort=="millage") echo "selected"; ?>> Millage </option>
						<option value="gearbox" <?php if(!empty($sort)) if($sort=="gearbox") echo "selected"; ?>> Gearbox </option>
						<option value="edisp" <?php if(!empty($sort)) if($sort=="edisp") echo "selected"; ?>> Engine </option>
						<option value="start" <?php if(!empty($sort)) if($sort=="start") echo "selected"; ?>> Strat Typ. </option>
						<option value="pc" <?php if(!empty($sort)) if($sort=="pc") echo "selected"; ?>> Petrol Cap. </option>
						</select>
						<select class="selectpicker col-md-4" name="order" data-live-search="true">
						<option value="asc" <?php if(!empty($order)) if($order=="asc") echo "selected"; ?>> 1 - 10 </option>
						<option value="desc" <?php if(!empty($order)) if($order=="desc") echo "selected"; ?>> 10 - 1 </option>
						</select>
					</div>
					<br><br>
					<center>
					<button name="submit" class="button">Search</button>
					</center>
					
				
				</form>
				<center>
					<a href="search_bikes" class="link">Bikes </a>	
					<a href="search_heavybikes" class="link">HeavyBikes ?</a>
					</center>
				</div>
				
				
				
				<div class="col-md-9">
				<h3><i>
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
	
	?>
	Showing Best Matches...</i>	
	<?php
	$sort = $_POST['sort'];
	$order = $_POST['order'];

	
		$sql = "SELECT * FROM carposts WHERE  company REGEXP ('$company') AND year REGEXP ('$year') AND gearbox REGEXP ('$gearbox') AND transmission REGEXP ('$transmission') AND pmaxl <= ('$pmaxl') AND edisp >= ('$edisp') AND millage >= ('$millage') AND pc >= ('$pc') ORDER BY $sort $order ";
		$result = $con->query($sql)or die($con->error);
		echo $tresults=mysqli_num_rows($result);
		$sql = "SELECT * FROM carposts WHERE  company REGEXP ('$company') AND year REGEXP ('$year') AND gearbox REGEXP ('$gearbox') AND transmission REGEXP ('$transmission') AND pmaxl <= ('$pmaxl') AND edisp >= ('$edisp') AND millage >= ('$millage') AND pc >= ('$pc') ORDER BY $sort $order LIMIT 12 ";
		$result = $con->query($sql)or die($con->error);
		$sresults=mysqli_num_rows($result);

		if(empty($result)){
		echo"No Result found;";
		}
		else{
			
			
		?>
		
		Results Found..!	
		</h3>
						
						
						<div id="posts" class="post-grid grid-container post-masonry grid-4 clearfix">
	<?php 
		while($row = $result->fetch_assoc()) {
		?>
							<div class="entry clearfix nobottommargin notopmargin">
								<div class="entry-image">
									<a href="images/cars/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/cars/thumb/<?php echo $row['img1thumb'] ?>" alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?>"></a>
								</div>
								<div class="entry-title">
									<h2><a href="car-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
								</div>
								<ul class="entry-meta clearfix"  style="float: left;font-size: 13px;line-height: 14px;margin: 0 10px 15px 0;font-family: 'Crete Round', serif;font-style: italic;">
									<p><i class="icon-info"  ></i> <?php echo $row['year'] ?> &nbsp &nbsp </li>
									<i class="icon-dollar"></i> <?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand &nbsp &nbsp</li>
									<i class="icon-download2"></i> <?php echo $row['edisp'] ?> &nbsp&nbsp
									<i class="icon-cogs"></i> <?php echo $row['transmission'] ?> &nbsp&nbsp	
									<i class="icon-filter"></i> <?php echo $row['millage'] ?> &nbsp&nbsp
									<i class="icon-sitemap"></i> <?php echo $row['gearbox'] ?> &nbsp&nbsp
									<i class="icon-tint"></i> <?php echo $row['pc'] ?></p>
								</ul>
								<div class="entry-content">
								
									<a href="car-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">View</a>
								</div>
							</div>
							
							<?php }  } }
							
	else {
		
		 if(empty($_GET['company'])) echo "Please Start Searching...";
		 
		 else{
		
		$sql = "SELECT * FROM carposts WHERE  company REGEXP ('$company') ORDER BY company desc";
		$result = $con->query($sql)or die($con->error);
		echo $tresults=mysqli_num_rows($result);
		
		$sql = "SELECT * FROM carposts WHERE  company REGEXP ('$company') ORDER BY company desc LIMIT 8 ";
		$result = $con->query($sql)or die($con->error);
		
		echo" Results Found..!";		
			
		?>
		
						</h2>
						
						<div id="posts" class="post-grid grid-container post-masonry grid-4 clearfix">
	<?php 
		while($row = $result->fetch_assoc()) {
		?>
							<div class="entry clearfix nobottommargin notopmargin">
								<div class="entry-image">
									<a href="images/cars/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/cars/thumb/<?php echo $row['img1thumb'] ?>" alt="<?php echo $row['model'] ?> title="<?php echo $row['model'] ?>"></a>
								</div>
								<div class="entry-title">
									<h2><a href="car-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
								</div>
								<ul class="entry-meta clearfix"  style="float: left;font-size: 13px;line-height: 14px;margin: 0 10px 15px 0;font-family: 'Crete Round', serif;font-style: italic;">
									<p><i class="icon-info"  ></i> <?php echo $row['year'] ?> &nbsp&nbsp </li>
									<i class="icon-dollar"></i> <?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand &nbsp&nbsp</li>
									<i class="icon-download2"></i> <?php echo $row['edisp'] ?> &nbsp&nbsp
									<i class="icon-cogs"></i> <?php echo $row['transmission'] ?> &nbsp&nbsp	
									<i class="icon-filter"></i> <?php echo $row['millage'] ?> &nbsp&nbsp
									<i class="icon-sitemap"></i> <?php echo $row['gearbox'] ?> &nbsp&nbsp
									<i class="icon-tint"></i> <?php echo $row['pc'] ?> </p>
								</ul>
								<div class="entry-content">
								
									<a href="car-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">View</a>
								</div>
							</div>
							
	<?php } } }?>
							
							
						</div>

									
							
				
				</div>
				<h4><center>Refine your seacrches to your needs, its all made for you...!</h4></center>
	
				
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

	

</body>
</html><?php mysqli_close($con);?>