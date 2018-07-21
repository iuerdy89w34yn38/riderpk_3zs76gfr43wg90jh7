<div class="divider divider-center" style="margin:0px;"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

		
		<!-- Footer
		============================================= -->
		<footer class="footer light " >

			<div class="container content-wrap">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="widget clearfix">

							<img src="images/logo/logos.jpg" alt="RidersPK" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

					<p>RidersPk provides you the access to <strong>Latest Cars,</strong> Upcoming Cars and <strong>Used cars</strong> in Pakistan.We also provides you the Information for <strong>Bikes</strong> and <strong>Heavy Bikes</strong> along with the Upcoming Models and Specifications. </p>

							<div class="line" style="margin: 30px 0;"></div>

							<div class="row">

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
									<h4>Popular Cities</h4>
									
										<?php 
										$rows=mysqli_query($con,"select * from cities where ctval>455")or die(mysqli_error());
										?>
									<ul>
									<?php
										while($row=mysqli_fetch_array($rows)){
											?>
										<li><a href="#"><?php echo $city = $row['city']; ?></a></li>
										<?php } ?>
									</ul>
								</div>

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
									<h4>Top Brands</h4>
									
										<?php 
										$rows=mysqli_query($con,"select * from cmakers where cmkval<7")or die(mysqli_error());
										?>
									<ul>
									<?php
										while($row=mysqli_fetch_array($rows)){
											?>
										<li><a href="searchcars-<?php echo $cmakers = $row['cmakers']; ?>"><?php echo $cmakers = $row['cmakers']; ?></a></li>
										<?php } ?>
									</ul>
								</div>

								

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
									<h4>Upcoming Rides</h4>
									
									<ul>
									
										<li><a href="#">Honda Civic 1.5 Turbo 2019</a></li>
										
										<li><a href="#">Hyundai Tucson Crossover 2019</a></li>
										<li><a href="#">Toyota Yaris Hybrid 2019 </a></li>
										<li><a href="#">Honda CG 125 2019</a></li>
										<li><a href="#">Kawasaki Ninja H2 SX SE</a></li>
										
									</ul>
								</div>

								<div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
									<h4>Featured Heavy Bikes</h4>
									<ul>
									<?php	

							$sql = "SELECT post_id,model,year FROM heavybikeposts ORDER BY created desc LIMIT 6";
							$result = $con->query($sql);
							while($row = $result->fetch_assoc()) {
							?>
									
										<li><a href="heavybike-<?php  echo $row['post_id']  ?>-<?php $mod=$row['model']; echo $modstring = preg_replace("/[\s-]/", "_", $mod); ?>_<?php echo $row['year'] ?>"><?php echo $row['model']; ?></a></li>
										
								<?php } ?>		
									</ul>
								</div>
							
								


							</div>

						</div>

					</div>
				

					<div class="col_one_third col_last">

						

						<div class="widget quick-contact-widget clearfix">

							<h4>Send Message</h4>

							<div class="quick-contact-form-result"></div>

							<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">

								<div class="form-process"></div>

								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-user"></i></span>
									<input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
								</div>
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
								</div>
								<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
								<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
								<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-danger nomargin" value="submit">Send Email</button>

							</form>

						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Follow US</strong><br>on Twitter</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						
						Copyrights &copy; 2018 All Rights Reserved by RidersPK. <a href="privacy">Privacy Policy</a>
					</div>
					
					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->
		
	