<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<?php include"include/head.php";?>
	

	<!-- Document Title
	============================================= -->
	<title>HeavyBikes by Company - PakRiders</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<?php include"include/connect.php";?>
	<?php include"include/topbar.php";?>
	<?php include"include/header.php";?>


	<section id="slider" class="slider-parallax" style="background:#47C747;" data-height-lg="250" data-height-md="300" data-height-sm="350" data-height-xs="400" data-height-xxs="450">
			<div class="slider-parallax-inner">
				<div class="container clearfix">
					<div class="vertical-middle center">

						<div class="heading-block nobottomborder center">
							<h1>
								<div style="color:white;;" class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="1500">
									Yes! We Have <span class="t-rotate">Honda|Suzuki|Yamaha|Unique</span> For You...
								</div>
							</h1>
						</div>
						<div>
						
						<p style="font-size:20px;color:white;"> We have Tried Our Best To Cover Your Needs... Still Confused??? or Not Finding What You Looking For...Try The Power Of Our Search Engine... </p>
						<a href="searchheavybikes-Honda" class="button" >Let's Start</a>
						</div>
						
					</div>
					

				</div>
			<div>
		</section>


				<div class="fancy-title title-center title-dotted-border topmargin">
						<h3><a href="searchheavybikes-Honda">Honda HeavyBikes</a></h3>
					</div>

		
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap topmargin-lg" style="padding:0px;">

				<div class="container clearfix">

				
					<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3">

						
						<?php	

						$company="Honda";
						$dd="100";
							$sql = "SELECT * FROM heavybikeposts WHERE company in ('$company') ORDER BY created desc LIMIT 4";
							$result = $con->query($sql) or die($con->error);
							while($row = $result->fetch_assoc()) {
							?>

						<div class="entry clearfix"  data-animate="bounceInUp" data-delay="<?php echo $dd;  ?>">
							<div class="entry-image">
								<a href="images/hbikes/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/hbikes/thumb/<?php echo $row['img1thumb'] ?>"alt="<?php echo $row['model'] ?> " title="<?php echo $row['model'] ?>"></a>
							</div>
							<div class="entry-title">
									<h2><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
								<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
							</ul>
							<br>
							<div class="entry-content">
								<p><?php
								$sdespf = $row['sdesp'] ;
								$sdesp = substr($sdespf,0,120);
								echo $sdesp;
								?>...</p>
								<a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">Read More</a>
							</div>
						</div>
						
						
						
							<?php
							$dd=$dd+100;
							} ?>
					


				</div><!-- .portfolio-carousel end -->


			</div>

		</section><!-- #content end -->
		
		

				<div class="fancy-title title-center title-dotted-border topmargin">
						<h3><a href="searchheavybikes-Yamaha">Yamaha HeavyBikes</a></h3>
					</div>

		
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap topmargin-lg" style="padding:0px;">

				<div class="container clearfix">

				
					<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3">

						
						<?php	

						$company="Yamaha";
						$dd="100";
							$sql = "SELECT * FROM heavybikeposts WHERE company in ('$company') ORDER BY created desc LIMIT 4";
							$result = $con->query($sql) or die($con->error);
							while($row = $result->fetch_assoc()) {
							?>

						<div class="entry clearfix"  data-animate="bounceInRight" data-delay="<?php echo $dd;  ?>">
							<div class="entry-image">
								<a href="images/hbikes/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/hbikes/thumb/<?php echo $row['img1thumb'] ?>"alt="<?php echo $row['model'] ?> " title="<?php echo $row['model'] ?>"></a>
							</div>
							<div class="entry-title">
									<h2><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
								<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
							</ul>
							<br>
							<div class="entry-content">
								<p><?php
								$sdespf = $row['sdesp'] ;
								$sdesp = substr($sdespf,0,120);
								echo $sdesp;
								?>...</p>
								<a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">Read More</a>
							</div>
						</div>
						
						
						
							<?php

							$dd=$dd+100;
							} ?>
					


				</div><!-- .portfolio-carousel end -->


			</div>

		</section><!-- #content end -->
		
		
		

				<div class="fancy-title title-center title-dotted-border topmargin">
						<h3><a href="searchheavybikes-Suzuki">Suzuki HeavyBikes</a></h3>
					</div>

		
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap topmargin-lg" style="padding:0px;">

				<div class="container clearfix">

				
					<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-animate="bounceInLeft" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3">

						
						<?php	

						$company="Suzuki";
						$dd="100";
							$sql = "SELECT * FROM heavybikeposts WHERE company in ('$company') ORDER BY created desc LIMIT 4";
							$result = $con->query($sql) or die($con->error);
							while($row = $result->fetch_assoc()) {
							?>

						<div class="entry clearfix"  data-animate="bounceInLeft" data-delay="<?php echo $dd;  ?>">
							<div class="entry-image">
								<a href="images/hbikes/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/hbikes/thumb/<?php echo $row['img1thumb'] ?>"alt="<?php echo $row['model'] ?> " title="<?php echo $row['model'] ?>"></a>
							</div>
							<div class="entry-title">
									<h2><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
								<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
							</ul>
							<br>
							<div class="entry-content">
								<p><?php
								$sdespf = $row['sdesp'] ;
								$sdesp = substr($sdespf,0,120);
								echo $sdesp;
								?>...</p>
								<a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">Read More</a>
							</div>
						</div>
						
						
						
							<?php 
							$dd=$dd+100;
							} ?>
					


				</div><!-- .portfolio-carousel end -->


			</div>

		</section><!-- #content end -->
		
		
		

				<div class="fancy-title title-center title-dotted-border topmargin">
						<h3><a href="searchheavybikes-Kawasaki">Kawasaki HeavyBikes</a></h3>
					</div>

		
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap topmargin-lg" style="padding:0px;">

				<div class="container clearfix">

				
					<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="3">

						
						<?php	

						$company="Kawasaki";
						$dd="100";
							$sql = "SELECT * FROM heavybikeposts WHERE company in ('$company') ORDER BY created desc LIMIT 4";
							$result = $con->query($sql) or die($con->error);
							while($row = $result->fetch_assoc()) {
							?>

						<div class="entry clearfix"  data-animate="bounceInUp" data-delay="<?php echo $dd;  ?>">
							<div class="entry-image">
								<a href="images/hbikes/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/hbikes/thumb/<?php echo $row['img1thumb'] ?>"alt="<?php echo $row['model'] ?> " title="<?php echo $row['model'] ?>"></a>
							</div>
							<div class="entry-title">
									<h2><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
								<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
							</ul>
							<br>
							<div class="entry-content">
								<p><?php
								$sdespf = $row['sdesp'] ;
								$sdesp = substr($sdespf,0,120);
								echo $sdesp;
								?>...</p>
								<a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">Read More</a>
							</div>
						</div>
						
						
						
							<?php 
							$dd=$dd+100;
							} ?>
					


				</div><!-- .portfolio-carousel end -->


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
	
	<!-- Bootstrap Select Plugin -->
	<script type="text/javascript" src="js/components/bs-select.js"></script>


	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html><?php mysqli_close($con);?>