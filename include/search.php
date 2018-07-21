<!-- Content
		============================================= -->
		<center>
		<section class="" style="background:#47C747;">

			<div class="content-wrap">

				<div class="container clearfix">
					
					<div class="center heading" data-animate="bounceInUp">
						<h2>Looking for something...? Let us Help you Find...</h2>
					</div>
					<!-- Post Content
					============================================= -->
					<div class="" data-animate="fade">

						<div class="">
						
							
							<div class="col-md-4 topmargin-sm">
									<div class="white-section">
										<label>Cardd Model:</label>
										<select class="selectpicker col-md-8" name="model" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from cars")or die(mysqli_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['crval']; ?>"><?php echo $car = $row['car'];?></option>
										<?php } ?>
										</select>
									</div>
							</div>
							<div class="col-md-4 topmargin-sm ">
									<div class="white-section">
										<label>Year:</label>
										<select class="selectpicker col-md-6" name="year" data-live-search="true">
											<?php 
										$rows=mysqli_query($con,"select * from years")or die(mysqli_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="<?php echo $crval = $row['val']; ?>"> <?php echo $car = $row['year'];?></option>
										<?php } ?>
										</select>
									</div>
						
							</div>
							<div class="col-md-4" style="margin-top:20px;">
							
								<a href="searchcars-Honda" type="submit" class="button" style="background:white; color:#47C747;" name="search" value="Search">Search</a>
							
							</div>
							
						</div>
						
						<div class="bottommargin hidden-lg hidden-md"></div>
							
					</div><!-- .postcontent end -->
					

				</div>
			<div>
		</section>
	</center>