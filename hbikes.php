<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<?php include"include/head.php";?>
	
		<!-- Select-Boxes CSS -->
	<link rel="stylesheet" href="css/components/select-boxes.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
		
	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

	
	
	<!-- Document Title
	============================================= -->
	<title>HeavyBikes - PakRiders</title>

</head>

<body class="stretched">

	<!-- Document Wrapperddd
	============================================= -->
	<div id="wrapper" class="clearfix">

	<?php include"include/connect.php";?>
	<?php include"include/topbar.php";?>
	<?php include"include/header.php";?>
	<?php include"include/search.php";?>
	

		
		
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-center" data-animate="bounceInDown">

			<div class="container clearfix">
				<h1>HeavyBikes</h1>
				<span>Latest HeavyBikes Updates</span>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap"  data-animate="fadeIn">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin col_last clearfix">

						<!-- Posts
						============================================= -->
						<div id="posts" class="small-thumbs alt">
						
						
						
						<?php	

							$sql = "SELECT * FROM heavybikeposts ORDER BY created desc LIMIT 10";
							$result = $con->query($sql);
							while($row = $result->fetch_assoc()) {
							?>
						

							<div class="entry clearfix">
								<div class="entry-image" >
									<a href="images/hbikes/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/hbikes/thumb/<?php echo $row['img1thumb'] ?>" alt="Standard Post with Image"></a>
							</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
							</div>
									<ul class="entry-meta clearfix">
									<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
									<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
									<li style="text-transform:standard;"><i class="icon-cogs"></i><?php echo $row['topspeed'] ?>KM/H TopSpeed</li>
									</ul>
									<div class="entry-content">
										<p><?php
								$sdespf = $row['sdesp'] ;
								$sdesp = substr($sdespf,0,220);
								echo $sdesp;
								?>...</p>
										
									<a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">Read More</a>
								
									</div>
								</div>
							</div>

									
							<?php } ?>
					

					<a href="searchheavybikes-Honda" class="button" >Search More !</a>
						
						</div><!-- #posts end -->

						
					</div><!-- .postcontent end -->

					
					
							<?php include"include/postssidebar.php";?>
					

					
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