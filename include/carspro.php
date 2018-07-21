

		
		
	
		
		
		
		
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix1" >
				<div data-animate="rotateInUpRight">
				<h1>Cars</h1>
				<span>Showcase of Our Cars</span>
				</div>
				<ol class="breadcrumb">
					<li class="active">Home</li>
					<li><a href="cars">Cars</a></li>
					
				</ol>
			</div>

		</section><!-- #page-title end -->

		
		<!-- Content
		============================================= -->
		<section id="content" >

			<div class="content-wrap">

				<div class="container clearfix">

						<!-- Posts
					============================================= -->
				<div id="posts" class="post-grid grid-container post-masonry grid-3 clearfix">


						
						
						
						<?php	

							$sql = "SELECT * FROM carposts ORDER BY created desc LIMIT 6";
							$result = $con->query($sql);
							while($row = $result->fetch_assoc()) {
							?>
						
						
						<div class="entry clearfix">
							<div class="entry-image clearfix">
								<div class="portfolio-single-image masonry-thumbs col-3" data-big="1" data-lightbox="gallery">
									<a href="images/cars/large/<?php echo $row['img1'] ?>" alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?> riderspk" data-lightbox="gallery-item"><img class="image_fade" src="images/cars/thumb/<?php echo $row['img1thumb'] ?>" title="<?php echo $row['model'] ?> riderspk" alt="<?php echo $row['model'] ?>"></a>
									<a href="images/cars/large/<?php echo $row['img2'] ?>" alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?> riderspk" data-lightbox="gallery-item"><img class="image_fade" src="images/cars/thumb/<?php echo $row['img2thumb'] ?>" title="<?php echo $row['model'] ?> riderspk" alt="<?php echo $row['model'] ?>"></a>
									<a href="images/cars/large/<?php echo $row['img3'] ?>" alt="<?php echo $row['model'] ?>" title="<?php echo $row['model'] ?> riderspk" data-lightbox="gallery-item"><img class="image_fade" src="images/cars/thumb/<?php echo $row['img3thumb'] ?>" title="<?php echo $row['model'] ?> riderspk" alt="<?php echo $row['model'] ?>"></a>
									</div>
							</div>
							<div class="entry-title">
								<h2><a href="car-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model'] ?> <?php echo $row['year'] ?></a></h2>
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
								<a href="car-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>" class="more-link">Read More</a>
							</div>
						</div>

					
					
									
							<?php } ?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
						
						
						



					</div><!-- #posts end -->

					
			</div>

		</section><!-- #content end -->
		
		
		