	
							<?php
							$rows=mysqli_query($con,"select * from featured ")or die(mysqli_error($con));
							
							while($row=mysqli_fetch_array($rows)){
								
								$fcid = $row['fc'];
								$fbid = $row['fb'];
								$fhbid = $row['fhb'];
								
							}	
							
							$rows=mysqli_query($con,"select model,year,img1thumb,img2thumb,img3thumb from carposts where post_id=$fcid ")or die(mysqli_error($con));
							
							while($row=mysqli_fetch_array($rows)){
								
								
								$cmodel = $row['model'];
								$cyear = $row['year'];
								$cimg1thumb = $row['img1thumb'];
								$cimg2thumb = $row['img2thumb'];
								$cimg3thumb = $row['img3thumb'];
								
							}	
							
							$rows=mysqli_query($con,"select model,year,img1thumb,img2thumb,img3thumb from bikeposts where post_id=$fbid ")or die(mysqli_error($con));
							
							while($row=mysqli_fetch_array($rows)){
								
								
								$bmodel = $row['model'];
								$byear = $row['year'];
								$bimg1thumb = $row['img1thumb'];
								$bimg2thumb = $row['img2thumb'];
								$bimg3thumb = $row['img3thumb'];
								
							}	
							
							$rows=mysqli_query($con,"select model,year,img1thumb,img2thumb,img3thumb from heavybikeposts where post_id=$fhbid ")or die(mysqli_error($con));
							
							while($row=mysqli_fetch_array($rows)){
								
								
								$hbmodel = $row['model'];
								$hbyear = $row['year'];
								$hbimg1thumb = $row['img1thumb'];
								$hbimg2thumb = $row['img2thumb'];
								$hbimg3thumb = $row['img3thumb'];
								
							}	
							
					
							 ?>
							 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

							<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin <?php if(!empty($_GET['carpostid']) OR !empty($_GET['bikepostid']) OR !empty($_GET['hbikepostid'])) echo"col_last";   ?> clearfix">
						<div class="sidebar-widgets-wrap">

							

							<div class="widget clearfix">
								
								<h4>Facebook</h4>
								
								<div class="fb-page" data-href="https://www.facebook.com/riderspkofficial/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/riderspkofficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/riderspkofficial/">Riders PK</a></blockquote></div>
							
							</div>
							
							
							
							<div class="widget clearfix">
							<div>

								<h4>Featured Car</h4>
								
						
								<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="car-<?php  echo $fcid  ?>-<?php $mod=$cmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $cyear ?>">
													<img src="images/cars/thumb/<?php echo $cimg1thumb ?>" alt="<?php echo $cmodel ?>">
												</a>
												
											</div>
											
										</div>
									</div>
									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												
												<a href="car-<?php  echo $fcid  ?>-<?php $mod=$cmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $cyear ?>">
													<img src="images/cars/thumb/<?php echo $cimg2thumb ?>" alt="<?php echo $cmodel ?>">
												</a>
											</div>
											
										</div>
									</div>
									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												
												<a href="car-<?php  echo $fcid  ?>-<?php $mod=$cmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $cyear ?>">
													<img src="images/cars/thumb/<?php echo $cimg3thumb ?>" alt="<?php echo $cmodel ?>">
												</a>
											</div>
											
										</div>
									</div>
									</div>
								<div class="center nobottompadding">
									<label><a href="car-<?php  echo $fcid  ?>-<?php $mod=$cmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $cyear ?>"></label>
									<br>
									<span><?php echo $cmodel ?> <?php echo $cyear ?></span>
									</a>
								</div>
							</div>

							</div>		

							<div class="widget clearfix">

								<h4>Popular Searches Cloud</h4>
								<div class="tagcloud">
									<a href="searchcars-Honda">Honda Cars</a>
									<a href="searchcars-Toyota">Toyota Cars</a>
									<a href="searchheavybikes-Suzuki">Suzuki Heavy Bikes</a>
									<a href="searchbikes-Honda">Honda Bikes</a>
									<a href="searchheavybikes-Kawasaki">Kawasaki Heavy Bikes</a>
									<a href="searchcars-Audi">Audi Cars</a>
									<a href="searchbikes-Unique">Unique Bikes</a>
								</div>

							</div>
							
							
							
							
							<div class="widget clearfix">
							<div>

								<h4>Featured Bike</h4>
								
						
								<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="bike-<?php  echo $fbid  ?>-<?php $mod=$bmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $byear ?>">
													<img src="images/bikes/thumb/<?php echo $bimg1thumb ?>" alt="<?php echo $bmodel ?>">
												</a>
												
											</div>
											
										</div>
									</div>
									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												
												<a href="bike-<?php  echo $fbid  ?>-<?php $mod=$bmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $byear ?>">
													<img src="images/bikes/thumb/<?php echo $bimg2thumb ?>" alt="<?php echo $bmodel ?>">
												</a>
											</div>
											
										</div>
									</div>
									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												
												<a href="bike-<?php  echo $fbid  ?>-<?php $mod=$bmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $byear ?>">
													<img src="images/bikes/thumb/<?php echo $bimg3thumb ?>" alt="<?php echo $bmodel ?>">
												</a>
											</div>
											
										</div>
									</div>
									</div>
								<div class="center nobottompadding">
									<label><a href="bike-<?php  echo $fbid  ?>-<?php $mod=$bmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $byear ?>"><?php echo $bmodel ?></a></label>
									<br>
									<span><?php echo $byear ?></span>
								</div>
							</div>


							
						
						</div>
							
							
							<div class="widget clearfix">
							<div>

								<h4>Featured Heavy Bike</h4>
								
						
								<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="heavybike-<?php  echo $fhbid  ?>-<?php $mod=$hbmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $hbyear ?>">
													<img src="images/hbikes/thumb/<?php echo $hbimg1thumb ?>" alt="<?php echo $hbmodel ?>">
												</a>
												
											</div>
											
										</div>
									</div>
									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												
												<a href="heavybike-<?php  echo $fhbid  ?>-<?php $mod=$hbmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $hbyear ?>">
													<img src="images/hbikes/thumb/<?php echo $hbimg2thumb ?>" alt="<?php echo $hbmodel ?>">
												</a>
											</div>
											
										</div>
									</div>
									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												
												<a href="heavybike-<?php  echo $fhbid  ?>-<?php $mod=$hbmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $hbyear ?>">
													<img src="images/hbikes/thumb/<?php echo $hbimg3thumb ?>" alt="<?php echo $hbmodel ?>">
												</a>
											</div>
											
										</div>
									</div>
									</div>
								<div class="center nobottompadding">
									<label><a href="heavybike-<?php  echo $fhbid  ?>-<?php $mod=$hbmodel; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $hbyear ?>"><?php echo $hbmodel ?></a></label>
									<br>
									<span><?php echo $hbyear ?></span>
								</div>
							</div>


							
						
						</div>

					</div><!-- .sidebar end -->