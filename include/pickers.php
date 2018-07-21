
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="nobg">

			<div class="container clearfix">
				<h1>Select Picker</h1>
				<span>Styled Select Boxes bringing Additional Functionality to Normal Select Boxes.</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li class="active">Select Picker</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				<div class="section nomargin">

					<div class="container clearfix">

						<div class="row">

							<div class="row clearfix">

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Become This:</label>
										<select class="selectpicker">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
										<br>
										<pre class="noborder nobottommargin">&#x3C;select class=&#x22;selectpicker&#x22;&#x3E;
  &#x3C;option&#x3E;Mustard&#x3C;/option&#x3E;
  &#x3C;option&#x3E;Ketchup&#x3C;/option&#x3E;
  &#x3C;option&#x3E;Relish&#x3C;/option&#x3E;
&#x3C;/select&#x3E;
</pre>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Multiple Selected Box:</label>
										<select class="selectpicker" multiple>
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>

										<br>
										<pre class="noborder nobottommargin">&#x3C;select class=&#x22;selectpicker&#x22; multiple&#x3E;
  &#x3C;option&#x3E;Mustard&#x3C;/option&#x3E;
  &#x3C;option&#x3E;Ketchup&#x3C;/option&#x3E;
  &#x3C;option&#x3E;Relish&#x3C;/option&#x3E;
&#x3C;/select&#x3E;
</pre>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Live Search:</label>
										<select class="selectpicker" multiple data-live-search="true">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Key Words:</label>
										<select class="selectpicker" data-live-search="true">
											<option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
											<option data-tokens="mustard">Burger, Shake and a Smile</option>
											<option data-tokens="frosting">Sugar, Spice and all things nice</option>
										</select>

									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Limit the number of selections:</label>
										<div class="row">
											<div class="col-md-6">
												<select class="selectpicker" multiple data-max-options="2">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</select>
											</div>
											<div class="col-md-6">
												<select class="selectpicker" multiple>
													<optgroup label="Condiments" data-max-options="2">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</optgroup>
												<optgroup label="Breads" data-max-options="2">
													<option>Plain</option>
													<option>Steamed</option>
													<option>Toasted</option>
													</optgroup>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<div class="row">
											<div class="col-md-6">
												<label>Multiple PlaceHolder:</label>
												<select class="selectpicker" multiple title="Choose one of the following...">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</select>
											</div>
											<div class="col-md-6">
											<label>Single PlaceHolder:</label>
												<select class="selectpicker" title="Choose one of the following...">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Selected text:</label>
										<select class="selectpicker">
											<option title="Combo 1">Hot Dog, Fries and a Soda</option>
											<option title="Combo 2">Burger, Shake and a Smile</option>
											<option title="Combo 3">Sugar, Spice and all things nice</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Selected text Count:</label>
										<select class="selectpicker" multiple data-selected-text-format="count">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Selected text Count more Than 2:</label>
										<select class="selectpicker" multiple data-selected-text-format="count > 2">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Onions</option>
											</select>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Checkmark on selected option:</label>
										<select class="selectpicker show-tick">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											</select>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Menu arrow:</label>
										<select class="selectpicker show-menu-arrow">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Style individual options:</label>
										<select class="selectpicker">
											<option>Mustard</option>
											<option class="special">Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Customized with Labels:</label>
										<select class="selectpicker">
											<option data-content="<span class='label label-success'>Mustard</span>">Mustard</option>
											<option data-content="<span class='label label-warning'>Ketchup</span>">Ketchup</option>
											<option data-content="<span class='label label-danger'>Relish</span>">Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Customized with Icons:</label>
										<select class="selectpicker">
											<option data-icon="icon-glass">Mustard</option>
											<option data-icon="icon-signal">Ketchup</option>
											<option data-icon="icon-camera3">Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<div class="row">
											<div class="col-md-6">
												<label>Subtext:</label>
												<select class="selectpicker">
													<option data-subtext="abc">Mustard</option>
													<option data-subtext="def">Ketchup</option>
													<option data-subtext="xyz">Relish</option>
												</select>
											</div>
											<div class="col-md-6">
												<label>Subtext:</label>
													<select class="selectpicker" data-show-subtext="true">
														<option data-subtext="abcd">Mustard</option>
														<option data-subtext="efgh">Ketchup</option>
														<option data-subtext="ijkl">Relish</option>
													</select>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<div class="row">
											<div class="col-md-6">
												<label>Menu Size:</label>
												<select class="selectpicker">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
													<option>Mayonnaise</option>
													<option>Barbecue Sauce</option>
													<option>Salad Dressing</option>
													<option>Tabasco</option>
													<option>Salsa</option>
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
													<option>Mayonnaise</option>
													<option>Barbecue Sauce</option>
													<option>Salad Dressing</option>
													<option>Tabasco</option>
													<option>Salad Dressing</option>
													<option>Tabasco</option>
													<option>Salsa</option>
												</select>
											</div>
											<div class="col-md-6">
												<label>Menu Size 5:</label>
													<select class="selectpicker" data-size="5">
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
														<option>Mayonnaise</option>
														<option>Barbecue Sauce</option>
														<option>Salad Dressing</option>
														<option>Tabasco</option>
														<option>Salsa</option>
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
														<option>Mayonnaise</option>
														<option>Barbecue Sauce</option>
														<option>Salad Dressing</option>
														<option>Tabasco</option>
														<option>Salsa</option>
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
														<option>Mayonnaise</option>
														<option>Barbecue Sauce</option>
														<option>Salad Dressing</option>
														<option>Tabasco</option>
														<option>Salsa</option>
													</select>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Select/Disable All:</label>
										<select class="selectpicker" multiple data-actions-box="true">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Divider:</label>
										<select class="selectpicker">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Mayonnaise</option>
											<option data-divider="true"></option>
											<option>Barbecue Sauce</option>
											<option>Salad Dressing</option>
											<option>Tabasco</option>
											<option>Salsa</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Header Option:</label>
										<select class="selectpicker" data-header="Select a condiment">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Disabled Select Box:</label>
										<select class="selectpicker" disabled>
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Disabled Options:</label>
										<select class="selectpicker" disabled>
											<option>Mustard</option>
											<option disabled>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="white-section">
										<label>Disabled Option Group:</label>
										<select class="selectpicker">
											<optgroup label="Picnic" disabled>
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</optgroup>
											<optgroup label="Camping">
												<option>Tent</option>
												<option>Flashlight</option>
												<option>Toilet Paper</option>
											</optgroup>
										</select>
									</div>
								</div>

								<div class="col-md-12 bottommargin-sm">
									<div class="white-section">
										<div class="row">
											<div class="col-md-12">
												<label class="inline-block">Data Width "Fit":</label>
												<select class="selectpicker" data-width="fit">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</select>
											</div>
											<div class="col-md-12">
												<label class="inline-block">Data Width "300px":</label>
												<select class="selectpicker" data-width="300px">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</select>
											</div>
											<div class="col-md-12">
												<label class="inline-block">Data Width "75%":</label>
												<select class="selectpicker" data-width="75%">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12 bottommargin-sm">
									<div class="white-section">
										<label>Select Button classes:</label>
										<select class="selectpicker" data-style="btn-primary">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Onions</option>
											</select>
										</select>
										<select class="selectpicker" data-style="btn-info">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Onions</option>
											</select>
										</select>
										<select class="selectpicker" data-style="btn-warning">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Onions</option>
											</select>
										</select>
										<select class="selectpicker" data-style="btn-success">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Onions</option>
											</select>
										</select>
										<select class="selectpicker" data-style="btn-danger">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
											<option>Onions</option>
											</select>
										</select>
									</div>
								</div>

								<div class="col-md-12 bottommargin-sm">
									<div class="white-section">
										<label>individual Width:</label>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<select class="selectpicker form-control">
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</div>
											<div class="col-sm-9">
												<div class="form-group">
													<select class="selectpicker form-control">
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<select class="selectpicker form-control">
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</div>
											<div class="col-sm-8">
												<div class="form-group">
													<select class="selectpicker form-control">
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-5">
												<div class="form-group">
													<select class="selectpicker form-control">
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="form-group">
													<select class="selectpicker form-control">
													  <option>Mustard</option>
													  <option>Ketchup</option>
													  <option>Relish</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<select class="selectpicker form-control">
														<option>Mustard</option>
														<option>Ketchup</option>
														<option>Relish</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<select class="selectpicker form-control">
													  <option>Mustard</option>
													  <option>Ketchup</option>
													  <option>Relish</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Blogroll</h4>

								<ul>
									<li><a href="http://codex.wordpress.org/">Documentation</a></li>
									<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
									<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
									<li><a href="http://wordpress.org/support/">Support Forums</a></li>
									<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
									<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
									<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-md-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
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
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
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
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

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
	<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

	<!-- Select Splitter Plugin -->
	<script type="text/javascript" src="js/components/selectsplitter.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">

		$('.selectsplitter').selectsplitter();

	</script>

</body>
</html><?php mysqli_close($con);?>