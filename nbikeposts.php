<?php include"include/connect.php";?>
<?php  
	
	 $id = $_GET['bikepostid'];
	
	
	$rows=mysqli_query($con,"select * from bikeposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
		
		$company = $row['company'];
		$model = $row['model'];
		$year = $row['year'];
		
		
		$imagen=$row['img1'];
		$imagen1=$row['img2'];
		$imagen2=$row['img3'];
		
		
		$updated = $row['updated'];
		$pmaxl = $row['pmaxl'];
		$pmaxt = $row['pmaxt'];
		$pminl = $row['pminl'];
		$pmint = $row['pmint'];
		$sdesp = $row['sdesp'];
		$desp = $row['desp'];
		$millage = $row['millage'];
		$engine = $row['engine'];
		$gearbox = $row['gearbox'];
		$typeid = $row['type'];
		$startid = $row['start'];
		$pcid = $row['pc'];
		
		
		
		
	}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Hamza Pervaiz, RidersPk" />
	<meta name="description" content="<?php echo $model;   ?>,Bikes and Heavy Bikes in Pakistan, <?php echo $model;   ?> Details, New Bikes Details,<?php echo $company;   ?> cars Details,<?php echo $model;   ?> in Pakistan" />
	<meta name="keywords" content="cars,bikes,heavy bikes,<?php echo $model;   ?>,price,car details,heavy bikes,<?php echo $model;   ?> specs,new bike price,<?php echo $model;   ?> in pakistan" />
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
<meta property="og:title" content="Cars,Bikes, Heav Bikes , New Cars, Latest Car Prices and Details" />
<meta property="og:description" content="Cars, Bikes and Heavy Bikes in Pakistan, New Cars Details, New Bikes Details,New Heavy Bikes Details,Honda cars in Pakistan,Toyota cars in Pakistan  "/>
<meta property="og:site_name" content="RidersPk" />
<meta property="og:url"  content="https://www.riderspk.com/"/>

	<?php include"include/head.php";?>
	
		<!-- Select-Boxes CSS -->
	<link rel="stylesheet" href="css/components/select-boxes.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
		
	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

	
	
	<!-- Document Title
	============================================= -->
	<title><?php echo $model;   ?> - RidersPK</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<?php include"include/connect.php";?>
	<?php include"include/topbar.php";?>
	<?php include"include/header.php";?>
	
	<?php  
	
	 $id = $_GET['bikepostid'];
	
	
	$rows=mysqli_query($con,"select * from bikeposts where post_id = '$id'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($rows)){
		
		
		$company = $row['company'];
		$model = $row['model'];
		$year = $row['year'];
		
		
		$imagen=$row['img1'];
		$imagen1=$row['img2'];
		$imagen2=$row['img3'];
		
		
		$updated = $row['updated'];
		$pmaxl = $row['pmaxl'];
		$pmaxt = $row['pmaxt'];
		$pminl = $row['pminl'];
		$pmint = $row['pmint'];
		$sdesp = $row['sdesp'];
		$desp = $row['desp'];
		$millage = $row['millage'];
		$engine = $row['engine'];
		$gearbox = $row['gearbox'];
		$typeid = $row['type'];
		$startid = $row['start'];
		$pcid = $row['pc'];
		
		
		
		
	}

?>

<?php	
	$cn=mysqli_query($con,"select * from biketype where typeid = '$typeid'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cn)){
		$type = $row['type'];
	}
	$cs=mysqli_query($con,"select * from bs where id = '$startid'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cs)){
		$start = $row['start'];
	}
	
	$cp=mysqli_query($con,"select * from bpc where id = '$pcid'")or die(mysql_error());
	
	while($row=mysqli_fetch_array($cp)){
		$capacity = $row['capacity'];
	}
	
	
	 ?>
	
		
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1><?php echo $company ?> Car</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="bikes">Bikes</a></li>
					<li class="active"><?php echo $model ?></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix col_two_third">
					
							<div class="entry-title bottommargin">
								<h2><?php echo $model ?> <?php echo $year ?> </h2>
							</div>
							

							<div class="entry clearfix">
							<div class="entry-image">
							
							<div class="col-md-9">
							
							
							<div class="fslider" data-arrows="true" data-lightbox="gallery">
									<div class="flexslider">
										
									<div class="flex-viewport" style="overflow: hidden; position: relative;">
									<div class="slider-wrap" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-3420px, 0px, 0px);">
										<div class="slide" data-thumb-alt="<?php echo $model;   ?>" style="width: 1140px; margin-right: 0px; float: left; display: block;"><a href="images/bikes/large/<?php echo $imagen ?>" data-lightbox="gallery-item"><img class="image_fade" src="images/bikes/large/<?php echo $imagen ?>" alt="<?php echo $model ?>" title="<?php echo $model;   ?>" draggable="false"></a></div>
										<div class="slide" data-thumb-alt="<?php echo $model;   ?>" style="width: 1140px; margin-right: 0px; float: left; display: block;"><a href="images/bikes/large/<?php echo $imagen1 ?>" data-lightbox="gallery-item"><img class="image_fade" src="images/bikes/large/<?php echo $imagen1 ?>" alt="<?php echo $model ?>" title="<?php echo $model;   ?>" draggable="false"></a></div>
										<div class="slide" data-thumb-alt="<?php echo $model;   ?>" style="width: 1140px; margin-right: 0px; float: left; display: block;"><a href="images/bikes/large/<?php echo $imagen2 ?>" data-lightbox="gallery-item"><img class="image_fade" src="images/bikes/large/<?php echo $imagen2 ?>" alt="<?php echo $model ?>" title="<?php echo $model;   ?>" draggable="false"></a></div>
									</div>
									</div>
									</div>
							</div>
							
							</div>
							
							
							<div class="col-md-3 col-last">
								
								<h3> Quick Review: </h3>								
								<p><?php echo $sdesp ?></p>
							
							</div>
							<br>
							<div>
							<ul class="entry-meta clearfix topmargin">
								<li><i class="icon-filter"></i><?php echo $id ?></li>
								<li><i class="icon-calendar3"></i> <?php echo $updated ?></li>
								<li><i class="icon-bookmark"></i> <a href="searchbikes-<?php echo $company ?>"><?php echo $company ?></a>, <a href="searchbikes-<?php echo $company ?>"><?php echo $year ?></a></li>
								</ul>
							<br>
							</div>
							<div style="font-size:25px;"><i style="font-size:25px;" class="icon-dollar"></i> Price: <b><?php if($pminl != 0) echo $pminl ?> <?php if($pminl != 0) echo "Lac" ?>  <?php if($pmint != 0) echo $pmint ?> <?php if($pmint != 0) echo "Thousand	" ?>  </b> to <b><?php if($pmaxl != 0) echo $pmaxl ?> <?php if($pmaxl != 0) echo "Lac" ?>  <?php if($pmaxt != 0) echo $pmaxt ?> <?php if($pmaxt != 0) echo "Thousand	" ?>  </b> </div>
							<br>
							<div class="entry-content">
								
								<h3> Description: </h3>
								<p><?php echo $desp ?></p>
							
								
								
								<br>
								
								
								
								<div class="">
									<center>
										<h4 class=""> Engine:<i> <?php echo $engine ?></i></h4>
									</center>
								</div>

								
								
								<div class="">
								
								<div class="col-md-2">
								
								
								</div>
								<div class="col-md-4">
								
								<h3> Type: </h3>								
								<p><?php echo $type ?></p>
							
								
								</div>
								
								
								
								<div class="col-md-4">
								
								
								<h3> Gearbox: </h3>								
								<p><?php echo $gearbox ?></p>
								
								
								</div>
								
								<div class="col-md-2 col_last">
								
								
								</div>
								</div>
								
								
								
								
								<div class="container">
								
								<div class="col-md-6">
								
								<img src="images/bikes/large/<?php echo $imagen1 ?>" alt="<?php echo $row['model'] ?> " title="<?php echo $row['model'] ?>" title="">								
								
								</div>
								
								
								<div class="col-md-6 col_last">
								
								
								<img src="images/bikes/large/<?php echo $imagen2 ?>" alt="<?php echo $row['model'] ?> " title="<?php echo $row['model'] ?>" title="">								

								</div>
								</div>
								<br><br>
								
								
								<div class="">
								
								<div class="col-md-4">
								
								<h3> Millage: </h3>								
								<p><?php echo $millage ?></p>
							
								
								</div>
								
								<div class="col-md-4">
								
								
								<h3> Ignition Start </h3>								
								<p><?php echo $start ?></p>
							
								
								</div>
								
								<div class="col-md-4 col_last">
								
								<h3> Petrol Capacity </h3>								
								<p><?php echo $capacity ?></p>
							
								
								</div>
								</div>
								
								
								
							
							
							</div>
							</div>
							
									<!-- Tag Cloud
									============================================= -->
									<div class="tagcloud clearfix bottommargin">
										<a href="searchbikes-<?php echo $company ?>" ><?php echo $company ?></a>
										<a href="searchbikes-<?php echo $company ?>" ><?php echo $model ?></a>
										<a href="searchbikes-<?php echo $company ?>" ><?php echo $year ?></a>
										
									</div><!-- .tagcloud end -->

									<div class="clear"></div>

									<!-- Post Single - Share
									============================================= -->
									<div class="si-share noborder clearfix">
										<span>Share this Post:</span>
										<div>
											<a href="#" class="social-icon si-borderless si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-pinterest">
												<i class="icon-pinterest"></i>
												<i class="icon-pinterest"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-gplus">
												<i class="icon-gplus"></i>
												<i class="icon-gplus"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-rss">
												<i class="icon-rss"></i>
												<i class="icon-rss"></i>
											</a>
											<a href="#" class="social-icon si-borderless si-email3">
												<i class="icon-email3"></i>
												<i class="icon-email3"></i>
											</a>
										</div>
									</div><!-- Post Single - Share End -->

								</div>
							</div><!-- .entry end -->
							
							
							<?php include"include/postssidebar.php";?>
					

						</div>		
							
						
							<!-- Post Navigation
							============================================= -->
							<div class="post-navigation clearfix">
							
							<?php	


							
							
							$sqlnp = "SELECT * FROM bikeposts WHERE bikeposts.post_id != $id AND bikeposts.company in ('$company') LIMIT 2";
							$resultnp = $con->query($sqlnp) or die($con->error);
							$n=1;
							while($rownp = $resultnp->fetch_assoc()) {
								
								
								$nxtpostid[$n]= $rownp['post_id'];
								$nxtpostmodel[$n]= $rownp['model'];
								$nxtpostyear[$n]= $rownp['year'];
								
								$n++;
								
								
							}
							if(!empty($nxtpostid[1])){
								
							
							?>

								<div class="col_half tleft nobottommargin">
									<a href="bike-<?php  echo $nxtpostid[1]  ?>-<?php $mod=$nxtpostmodel[1]; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $nxtpostyear[1] ?>">&lArr; <?php echo $nxtpostmodel[1] ?>  <?php echo $nxtpostyear[1] ?> </a>
								</div>

								<div class="col_half col_last tright nobottommargin">
									<a href="bike-<?php  echo $nxtpostid[2]  ?>-<?php $mod=$nxtpostmodel[2]; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $nxtpostyear[2] ?>"><?php echo $nxtpostmodel[2] ?>  <?php echo $nxtpostyear[2] ?> &rArr; </a>
								</div>
	
							<?php  }?>
							</div><!-- .post-navigation end -->
							

							<div class="line"></div>

							<!-- Post Author Info
							============================================= -->
							<?php
							$rows=mysqli_query($con,"select cdetails from bmakers where bmakers  in ('$company')")or die(mysql_error());
							
							while($row=mysqli_fetch_array($rows)){
								
								
								$cdetails = $row['cdetails'];
								
							}	
							
					
							 ?>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Company <span><a href="searchbikes-<?php echo $company ?>"><?php echo $company ?></a></span></h3>
								</div>
								<div class="panel-body" rel="canonical">
									<div class="">
										<img src="images/company/<?php echo $company ?>.png" alt="<?php echo $company ?> " title="<?php echo $company ?>" class="">
									</div>
									<?php echo $cdetails ?>
									</div>
							</div><!-- Post Single - Author End -->

							<div class="line"></div>

							<h4>Related Posts:</h4>

							<div class="related-posts clearfix">
							
							<div class="mpost clearfix 	">
							</div>

								<?php	

									$sql = "SELECT * FROM bikeposts WHERE post_id != $id AND company in ('$company')  LIMIT 4";
									$result = $con->query($sql)or die($con->error);
									while($row = $result->fetch_assoc()) {
								?>
						
							
									<div class="mpost clearfix col-md-6">
										<div class="entry-image">
											<a href="bike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><img src="images/bikes/thumb/<?php echo $row['img1thumb'] ?>"  alt="<?php echo $row['model'] ?> " title="<?php echo $row['model'] ?>"></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="bike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"> <?php echo $row['model'] ?> </a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><a href="searchbikes-<?php echo $row['company'] ?>"><i class="icon-briefcase"></i> <?php echo $row['company'] ?> </a></li>
												<li><i class="icon-calendar3"></i> <?php echo $row['year'] ?> </li>
											</ul>
											<div class="entry-content"><?php
								$sdespf = $row['sdesp'] ;
								$sdesp = substr($sdespf,0,100);
								echo $sdesp;
								?>...</div>
										</div>
									</div>
									
									
									<?php } ?>

								
								</div>

							</div>

							

						</div>

					</div><!-- .postcontent end -->

					

				</div>

			</div>

		</section><!-- #content end -->

		
			
			
		<?php include"include/footer.php";?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
	
	<!-- Select-Boxes Plugin -->
	<script type="text/javascript" src="js/components/select-boxes.js"></script>
	<!-- Select-Splitter Plugin -->
	<script type="text/javascript" src="js/components/selectsplitter.js"></script>

	
	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="js/components/bs-select.js"></script>

	<!-- Select Splitter Plugin -->
	<script type="text/javascript" src="js/components/selectsplitter.js"></script>



</body>
</html><?php mysqli_close($con);?>