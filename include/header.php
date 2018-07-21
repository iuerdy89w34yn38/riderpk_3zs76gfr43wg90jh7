<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap" >

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" >
						<a href="home" class="standard-logo" data-dark-logo="images/logo/logo.png"><img src="images/logo/logol.png"  alt="RidersPK"></a>
						<a href="home" class="retina-logo" data-dark-logo="images/logo/logo.png"><img src="images/logo/logo.png" alt="RidersPK"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul style="padding-right:none;">
							<li class="current"><a href="cars"><div><i class="icon-laptop"></i>Cars Trends</div><span>Latest Cars Trends</span></a>
								<ul>
									<li><a href="cars"><div>Cars - New Cars</div></a>
									<li><a href="companycars"><div>New Cars By Company</div></a>
									<?php 
										$rows=mysqli_query($con,"select * from cmakers")or die(mysql_error());
										?>
										<ul>
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<li><a href="searchcars-<?php echo $makers = $row['cmakers'];  ?>"><div><?php echo $makers = $row['cmakers']; ?></div></a></li>
											<?php } ?>
										</ul>
									</li>
									<li><a href="working"><div>Used Cars</div></a></li>
									<li><a href="working"><div>Used Cars By Company</div></a>
									<?php 
										$rows=mysqli_query($con,"select * from cmakers")or die(mysql_error());
										?>
										<ul>
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<li><a href="working"><div><?php echo $makers = $row['cmakers']; ?></div></a></li>
											<?php } ?>
										</ul>
									</li>
								</ul>
							</li>
							<li class="current" ><a href="bikes"><div><i class="icon-truck"></i>Bikes Info</div><span>Bikes Information</span></a>
								<ul>
								<li><a href="bikes"><div>Bikes - New Bikes</div></a>
									<li><a href="companybikes"><div>New Bikes By Company</div></a>
									<?php 
										$rows=mysqli_query($con,"select * from bmakers")or die(mysql_error());
										?>
										<ul>
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<li><a href="searchbikes-<?php echo $makers = $row['bmakers']; ?>"><div><?php echo $makers = $row['bmakers']; ?></div></a></li>
											<?php } ?>
										</ul>
									</li>
									<li><a href="working"><div>Used Bikes By Company</div></a>
									<?php 
										$rows=mysqli_query($con,"select * from bmakers")or die(mysql_error());
										?>
										<ul>
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<li><a href="working"><div><?php echo $makers = $row['bmakers']; ?></div></a></li>
											<?php } ?>
										</ul>
									</li>
								
								</ul>
							</li>
							<li class="current"><a href="heavybikes"><div><i class="icon-select"></i>Heavy Bikes</div><span>Heavy Bikes Specs</span></a>
								<ul>
								<li><a href="heavybikes"><div>Heavy Bikes</div></a>
									<li><a href="companyheavybikes"><div>New Heavy Bikes</div></a>
									<?php 
										$rows=mysqli_query($con,"select * from hbmakers ")or die(mysql_error());
										?>
										<ul>
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<li><a href="searchheavybikes-<?php echo $makers = $row['bmakers']; ?>"><div><?php echo $makers = $row['bmakers']; ?></div></a></li>
											<?php } ?>
										</ul>
									</li>
									<li><a href="working"><div>Used Heavy Bikes In Pakistan</div></a></li>
								
								</ul>
							</li>
							
							
							
						</ul>


						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="searchcars.php" method="get">
								<input type="text" name="company" class="form-control" value="" placeholder="Type Company &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->