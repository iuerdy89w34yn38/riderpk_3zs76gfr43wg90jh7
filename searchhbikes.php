<html>
	<head>
	
	
	<?php include('include/head.php'); ?>
	<?php include('include/connect.php'); ?>
	
		<?php
		
		if(empty($company)) if ( !empty ($_GET['company']) ) $company = $_GET['company'];
		
		
if(isset($_POST['submit']) ){ 	
	
	$company = $_POST['company'];
	$year = $_POST['year'];
	$pmaxl = $_POST['pmaxl'];
	$millage = $_POST['millage'];
	$edisp = $_POST['engine'];
	$startid = $_POST['start'];
	$pcid = $_POST['pc'];
	$gearbox = $_POST['gearbox'];
	$speed = $_POST['speed'];
	$topspeed = $_POST['topspeed'];
	
		
	
	$sort = $_POST['sort'];
	$order = $_POST['order'];

	
	
}
	
	?>
	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Hamza Pervaiz, RidersPk" />
	<meta name="description" content="<?php if ( !empty ($company) ) echo $company ; ?>, Bikes and Heavy Bikes in Pakistan, New Cars Details, New Bikes Details,New Heavy Bikes Details,<?php if ( !empty ($company) ) echo $company ; ?> Bikes in Pakistan  " />
	<meta name="keywords" content="<?php if ( !empty ($company) ) echo $company ; ?>,bikes,heavy bikes,price,car details,heavy bikes specs,new bike price" />
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
<meta property="og:title" content="<?php if ( !empty ($company) ) echo $company ; ?> Prices and Details" />
<meta property="og:description" content="Cars, Bikes and Heavy Bikes in Pakistan, New Cars Details, New Bikes Details,New Heavy Bikes Details,Honda cars in Pakistan"/>
<meta property="og:site_name" content="RidersPk" />
<meta property="og:url"  content="https://www.riderspk.com/"/>

	
	
	<title><?php if ( !empty ($company) ) echo $company ; ?> Heavy Bikes Details Search</title>
	
	
	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<?php include('include/header.php'); ?>
		
		
	
	
	<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap" style="padding:20px 0;">

				<div class="container" style="">
				
				
				<div class="col-md-3">
				<form method="post" action="search_heavybikes" enctype="multipart/form-data">
	
				<h3>	Search Options:		</h3>
				
					<div class="white-section">
										
						<label class="col-md-6"><i class="icon-globe"></i> &nbsp	Company:</label>
						<select class="selectpicker col-md-6" name="company" data-live-search="true">
							<option value=""> Any </option>
						
							
							
							<?php 
						$rows=mysqli_query($con,"select * from hbmakers")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $cmakers = $row['bmakers']; ?>" <?php if(!empty($company)) if($company==$row['bmakers']) echo "selected"; ?> ><?php echo $car = $row['bmakers'];?></option>
						<?php } ?>
						</select>
					</div>
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
					<br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-dollar"></i> &nbsp	Price Max (Lacs):</label>
						<select class="selectpicker col-md-6" name="pmaxl" data-live-search="true">
						<option value="1000"> Any </option>

						<option value="1" <?php if(!empty($pmaxl)) if($pmaxl=="1") echo "selected"; ?>> 1 </option>
						<option value="2" <?php if(!empty($pmaxl)) if($pmaxl=="2") echo "selected"; ?>> 2 </option>
						<option value="3" <?php if(!empty($pmaxl)) if($pmaxl=="3") echo "selected"; ?>> 3 </option>
						<option value="5" <?php if(!empty($pmaxl)) if($pmaxl=="5") echo "selected"; ?>> 5 </option>
						<option value="10" <?php if(!empty($pmaxl)) if($pmaxl=="10") echo "selected"; ?>> 10 </option>
						<option value="15" <?php if(!empty($pmaxl)) if($pmaxl=="15") echo "selected"; ?>> 15 </option>
						<option value="20" <?php if(!empty($pmaxl)) if($pmaxl=="20") echo "selected"; ?>> 20 </option>
						<option value="25" <?php if(!empty($pmaxl)) if($pmaxl=="25") echo "selected"; ?>> 25 </option>
						
						
						
						</select>
					</div>
					<br>
					<br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-dashboard"></i> &nbsp	Min Speedometer:</label>
						<select class="selectpicker col-md-6" name="speed" data-live-search="true">
						<option value="0"> Any </option>

						<option value="100" <?php if(!empty($speed)) if($speed=="100") echo "selected"; ?>> 100 </option>
						<option value="150" <?php if(!empty($speed)) if($speed=="150") echo "selected"; ?>> 150 </option>
						<option value="200" <?php if(!empty($speed)) if($speed=="200") echo "selected"; ?>> 200 </option>
						<option value="250" <?php if(!empty($speed)) if($speed=="250") echo "selected"; ?>> 250 </option>
						<option value="300" <?php if(!empty($speed)) if($speed=="300") echo "selected"; ?>> 300 </option>
						<option value="350" <?php if(!empty($speed)) if($speed=="350") echo "selected"; ?>> 350 </option>
						<option value="400" <?php if(!empty($speed)) if($speed=="400") echo "selected"; ?>> 400 </option>
						<option value="450" <?php if(!empty($speed)) if($speed=="450") echo "selected"; ?>> 450 </option>
						<option value="500" <?php if(!empty($speed)) if($speed=="500") echo "selected"; ?>> 500 </option>
						
						
						</select>
					</div>
					<br>
					<br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-bolt"></i> &nbsp	Min Top Speed Tested*:</label>
						<select class="selectpicker col-md-6" name="topspeed" data-live-search="true">
						<option value="0"> Any </option>

						<option value="100" <?php if(!empty($topspeed)) if($topspeed=="100") echo "selected"; ?>> 100 </option>
						<option value="150" <?php if(!empty($topspeed)) if($topspeed=="150") echo "selected"; ?>> 150 </option>
						<option value="200" <?php if(!empty($topspeed)) if($topspeed=="200") echo "selected"; ?>> 200 </option>
						<option value="250" <?php if(!empty($topspeed)) if($topspeed=="250") echo "selected"; ?>> 250 </option>
						<option value="300" <?php if(!empty($topspeed)) if($topspeed=="300") echo "selected"; ?>> 300 </option>
						<option value="350" <?php if(!empty($topspeed)) if($topspeed=="350") echo "selected"; ?>> 350 </option>
						<option value="400" <?php if(!empty($topspeed)) if($topspeed=="400") echo "selected"; ?>> 400 </option>
						<option value="450" <?php if(!empty($topspeed)) if($topspeed=="450") echo "selected"; ?>> 450 </option>
						<option value="500" <?php if(!empty($topspeed)) if($topspeed=="500") echo "selected"; ?>> 500 </option>
						
						
						
						</select>
					</div>
					<br>
					<br>
					
					<div class="white-section">
						<label class="col-md-6"><i class="icon-filter"></i> &nbsp	Least Millage:</label>
						<select class="selectpicker col-md-6" name="millage" data-live-search="true">
						<option value="0"> Any </option>
						<option value="5" <?php if(!empty($millage)) if($millage=="5") echo "selected"; ?>> 5 KM/L </option>
						<option value="10" <?php if(!empty($millage)) if($millage=="10") echo "selected"; ?>> 10 KM/L </option>
						<option value="15" <?php if(!empty($millage)) if($millage=="15") echo "selected"; ?>> 15 KM/L </option>
						<option value="20" <?php if(!empty($millage)) if($millage=="20") echo "selected"; ?>> 20 KM/L </option>
						<option value="25" <?php if(!empty($millage)) if($millage=="25") echo "selected"; ?>> 25 KM/L </option>
						<option value="30" <?php if(!empty($millage)) if($millage=="30") echo "selected"; ?>> 30 KM/L </option>
						<option value="35" <?php if(!empty($millage)) if($millage=="35") echo "selected"; ?>> 35 KM/L </option>
						<option value="40" <?php if(!empty($millage)) if($millage=="40") echo "selected"; ?>> 40 KM/L </option>
						<option value="45 <?php if(!empty($millage)) if($millage=="45") echo "selected"; ?>"> 45 KM/L </option>
						<option value="50" <?php if(!empty($millage)) if($millage=="50") echo "selected"; ?>> 50 KM/L	 </option>
						<option value="60" <?php if(!empty($millage)) if($millage=="60") echo "selected"; ?>> 60 KM/L	 </option>
						<option value="70" <?php if(!empty($millage)) if($millage=="70") echo "selected"; ?>> 70 KM/L	 </option>
						<option value="80" <?php if(!empty($millage)) if($millage=="80") echo "selected"; ?>> 80 KM/L	 </option>
						
						
						</select>
					</div>
					<br><br>
					
					<div class="white-section">
										<label class="col-md-6"><i class="icon-sitemap"></i> &nbsp	Gearbox Counts:</label>
						<select class="selectpicker col-md-6" name="gearbox" data-live-search="true">
						<option value=""> Any </option>
						
							<?php 
						$rows=mysqli_query($con,"select cgb from carspecs LIMIT 3")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['cgb']; ?>" <?php if(!empty($gearbox)) if($gearbox==$row['cgb']) echo "selected"; ?> > <?php echo $year = $row['cgb'];?></option>
						<?php } ?>
						</select>
					</div>
					<br><br>
					<div class="white-section">
						<label class="col-md-6"><i class="icon-download2"></i> &nbsp	Min Engine Displacement:</label>
						<select class="selectpicker col-md-6" name="engine" data-live-search="true">
							<option value="0"> Any </option>
						
							
							
							<?php 
						$rows=mysqli_query($con,"select ced from carspecs")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $cmakers = $row['ced']; ?>" <?php if(!empty($edisp)) if($edisp==$row['ced']) echo "selected"; ?> ><?php echo $car = $row['ced'];?></option>
						<?php } ?>
						</select>
					</div>
					
					
					<br><br>
					<div class="white-section">
										<label class="col-md-6"><i class="icon-cogs"></i> &nbsp	Start Type:</label>
						<select class="selectpicker col-md-6" name="start" data-live-search="true">
						<option value=""> Any </option>
					
						
						<?php 
						$rows=mysqli_query($con,"select start from bs LIMIT 3")or die(mysql_error());
						while($row=mysqli_fetch_array($rows)){
							?>
							<option value="<?php echo $year = $row['start']; ?>" <?php if(!empty($startid)) if($startid==$row['start']) echo "selected"; ?> > <?php echo $year = $row['start'];?></option>
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
							<option value="<?php echo $year = $row['capacity']; ?>" <?php if(!empty($pcid)) if($pcid==$row['capacity']) echo "selected"; ?> > <?php echo $year = $row['capacity'];?></option>
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
					<a href="search_cars" class="link">Cars </a>	
					<a href="search_bikes" class="link">Bikes ?</a>
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
	$gearbox = $_POST['gearbox'];
	$edisp = $_POST['engine'];
	$startid = $_POST['start'];
	if($startid=="Self Start") $startid="1";if($startid=="Kick Start") $startid="2";if($startid=="Self and Kick Start") $startid="3";
	$pc = $_POST['pc'];
	$speed = $_POST['speed'];
	$topspeed = $_POST['topspeed'];
	
	?>
	Showing Best Matches...</i>	
	<?php
	$sort = $_POST['sort'];
	$order = $_POST['order'];

	
		$sql = "SELECT * FROM heavybikeposts WHERE  company REGEXP ('$company') AND year REGEXP ('$year') AND gearbox REGEXP ('$gearbox') AND start REGEXP ('$startid') AND pmaxl <= ('$pmaxl') AND edisp >= ('$edisp') AND millage >= ('$millage') AND pc >= ('$pc') AND speedometer >= ('$speed') AND topspeed >= ('$topspeed') ORDER BY $sort $order ";
		$result = $con->query($sql)or die($con->error);
		echo $tresults=mysqli_num_rows($result);
		$sql = "SELECT * FROM heavybikeposts WHERE  company REGEXP ('$company') AND year REGEXP ('$year') AND gearbox REGEXP ('$gearbox') AND start REGEXP ('$startid') AND pmaxl <= ('$pmaxl') AND edisp >= ('$edisp') AND millage >= ('$millage') AND pc >= ('$pc') AND speedometer >= ('$speed') AND topspeed >= ('$topspeed') ORDER BY $sort $order LIMIT 8 ";
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
									<a href="images/hbikes/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/hbikes/thumb/<?php echo $row['img1thumb'] ?>" alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?>"></a>
								</div>
								<div class="entry-title">
									<h2><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
								</div>
								<ul class="entry-meta clearfix"  style="float: left;font-size: 13px;line-height: 14px;margin: 0 10px 15px 0;font-family: 'Crete Round', serif;font-style: italic;">
									<p><i class="icon-info"  ></i> <?php echo $row['year'] ?> &nbsp&nbsp 
									<i class="icon-dollar"></i> <?php echo $row['pmaxl'] ?> Lac <?php echo $row['pmaxt'] ?> Thousand &nbsp&nbsp
									<i class="icon-dashboard"></i> <?php echo $row['speedometer'] ?> &nbsp&nbsp
									<i class="icon-bolt"></i> <?php echo $row['topspeed'] ?> &nbsp&nbsp
									<i class="icon-filter"></i> <?php echo $row['millage'] ?> &nbsp&nbsp
									<i class="icon-sitemap"></i> <?php echo $row['gearbox'] ?> &nbsp&nbsp
									<i class="icon-download2"></i> <?php echo $row['edisp'] ?> &nbsp&nbsp
									<i class="icon-cogs"></i> <?php $startid=$row['start']; $cs=mysqli_query($con,"select * from bs where id = '$startid'")or die(mysql_error());	while($rowst=mysqli_fetch_array($cs)){ echo $start = $rowst['start']; break;	} ?> &nbsp&nbsp	
									<i class="icon-tint"></i> <?php echo $row['pc'] ?></p>

								</ul>
								<div class="entry-content">
								
									<a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">View</a>
								</div>
							</div>
							
							<?php }  } }
							
	else {
		
		 if(empty($_GET['company'])) echo "Please Start Searching...";
		 
		 else{
		
		$sql = "SELECT * FROM heavybikeposts WHERE  company REGEXP ('$company') ORDER BY company desc";
		$result = $con->query($sql)or die($con->error);
		echo $tresults=mysqli_num_rows($result);
		
		$sql = "SELECT * FROM heavybikeposts WHERE  company REGEXP ('$company') ORDER BY company desc LIMIT 8 ";
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
									<a href="images/hbikes/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/hbikes/thumb/<?php echo $row['img1thumb'] ?>"  alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?>"></a>
								</div>
								<div class="entry-title">
									<h2><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
								</div>
								<ul class="entry-meta clearfix"  style="float: left;font-size: 13px;line-height: 14px;margin: 0 10px 15px 0;font-family: 'Crete Round', serif;font-style: italic;">
									<p><i class="icon-info"  ></i> <?php echo $row['year'] ?> &nbsp &nbsp
									<i class="icon-dollar"></i> <?php echo $row['pmaxl'] ?> Lac <?php echo $row['pmaxt'] ?> Thousand &nbsp &nbsp 
									<i class="icon-dashboard"></i> <?php echo $row['speedometer'] ?> &nbsp &nbsp 
									<i class="icon-bolt"></i> <?php echo $row['topspeed'] ?> &nbsp &nbsp 
									<i class="icon-filter"></i> <?php echo $row['millage'] ?> &nbsp &nbsp 
									<i class="icon-sitemap"></i> <?php echo $row['gearbox'] ?> &nbsp &nbsp 
									<i class="icon-download2"></i> <?php echo $row['edisp'] ?> &nbsp &nbsp 
									<i class="icon-cogs"></i> <?php $startid=$row['start']; $cs=mysqli_query($con,"select * from bs where id = '$startid'")or die(mysql_error());	while($rowst=mysqli_fetch_array($cs)){ echo $start = $rowst['start']; break;	} ?> &nbsp &nbsp	
									<i class="icon-tint"></i> <?php echo $row['pc'] ?></p>

								</ul>
								<div class="entry-content">
								
									<a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">View</a>
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

