

		
		
	
		
		
		
		
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix1" >
				<h1>Bikes</h1>
				<span>Showcase of Bikes</span>
				<ol class="breadcrumb">
					<li class="active">Home</li>
					<li ><a href="bikes">Bikes</a></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap topmargin-lg" style="padding:0px;">

				<div class="container clearfix">

				
					<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="4">

						
						
						<?php	

							$sql = "SELECT * FROM bikeposts ORDER BY created desc LIMIT 5";
							$result = $con->query($sql);
							while($row = $result->fetch_assoc()) {
							?>
						

						<div class="entry clearfix">
							<div class="entry-image">
								<a href="images/bikes/large/<?php echo $row['img1'] ?>" data-lightbox="image"><img class="image_fade" src="images/bikes/thumb/<?php echo $row['img1thumb'] ?>" alt="<?php echo $row['model'] ?>"></a>
							</div>
							<div class="entry-title">
								<h2><a href="bike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
								<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
							</ul>
							<div class="entry-content">
								<p><?php
								$sdespf = $row['sdesp'] ;
								$sdesp = substr($sdespf,0,120);
								echo $sdesp;
								?>...</p>
								<a href="bike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">Read More</a>
							</div>
						</div>
						

						<?php } ?>


				</div><!-- .portfolio-carousel end -->


			</div>

		</section><!-- #content end -->
		
			
			
			
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix1">
				<h1>Have A Heavy Bike  Day...</h1>
				<span>Today's Heavy Bike.</span>
				
			</div>

		</section><!-- #page-title end -->

		
				<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="small-thumbs">

					<?php	

							$sql = "SELECT * FROM heavybikeposts ORDER BY created desc LIMIT 1";
							$result = $con->query($sql);
							while($row = $result->fetch_assoc()) {
							?>
						

						
						<div class="container">
							<div class="col-md-6">
								<div class="fslider" data-arrows="false" data-lightbox="gallery">
									<div class="flexslider">
										<div class="slider-wrap">
											<div class="slide"><a href="images/hbikes/large/<?php echo $row['img1'] ?>" title="<?php echo $row['model'] ?>" alt="<?php echo $row['model'] ?>" data-lightbox="gallery-item"><img class="image_fade" src="images/hbikes/large/<?php echo $row['img1'] ?>" alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?>"></a></div>
											<div class="slide"><a href="images/hbikes/large/<?php echo $row['img2'] ?>" title="<?php echo $row['model'] ?>" alt="<?php echo $row['model'] ?>" data-lightbox="gallery-item"><img class="image_fade" src="images/hbikes/large/<?php echo $row['img2'] ?>" alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?>"></a></div>
											<div class="slide"><a href="images/hbikes/large/<?php echo $row['img3'] ?>" title="<?php echo $row['model'] ?>" alt="<?php echo $row['model'] ?>" data-lightbox="gallery-item"><img class="image_fade" src="images/hbikes/large/<?php echo $row['img3'] ?>" alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?>"></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="entry-c col-md-6">
								<div class="entry-title">
									<h2><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?></a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-info"></i><?php echo $row['year'] ?></li>
									<li><i class="icon-dollar"></i><?php echo $row['pminl'] ?> Lac <?php echo $row['pmint'] ?> Thousand</li>
								</ul>
								<div class="entry-content">
									<p><?php
								$sdespf = $row['sdesp'] ;
								$sdesp = substr($sdespf,0,120);
								echo $sdesp;
								?>...</p>
									<a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"class="more-link">Read More</a>
								</div>
							</div>
						</div>
						
						<?php } ?>


					</div><!-- #posts end -->

					
				</div>

			</div>

		</section><!-- #content end -->
		
		