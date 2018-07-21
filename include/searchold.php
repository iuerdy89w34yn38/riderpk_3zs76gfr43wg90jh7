


		<div class="section nomargin noborder light" style="background:#1ABC9C; padding: 80px 0;">
				
	
			<center>
				<div class="container clearfix">
				
				<div class="center heading" data-animate="bounceInUp">
						<h2>Looking for something...? Let us Help you Find...</h2>
					</div>

					<!-- Post Content
					============================================= -->
					<div class=" nobottommargin clearfix">

						<form action="#" method="post" class="nobottommargin" data-animate="fade">
							<div class="bottommargin-sm " style="text-transform:uppercase; float:left; width:45%; margin:0px 40px;">
								<label for="">Select City</label>
									<select class="select-1" style="width:100%;text-transform:uppercase;">
									<optgroup label="All">
										<option value=" ">All Cities</option>
									</optgroup>
									
									<optgroup label="Popular Cities">
									
									<?php 
										$rows=mysqli_query($con,"select * from cities where ctval>455")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="
											<?php
											echo $ctval = $row['ctval'];
										
											?>">
										
											
										<?php
			
											echo $city = $row['city'];
										
											?>
											</option>
										<?php } ?>
									
									</optgroup>
									
									
									<optgroup label="All Cities">
										
										<?php 
										$rows=mysqli_query($con,"select * from cities")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="
											<?php
											echo $ctval = $row['ctval'];
										
											?>">
										
											
										<?php
			
											echo $city = $row['city'];
										
											?>
											</option>
										<?php } ?>
											
										</optgroup>
									
										
									
									
								</select>
							</div>

							<div class="bottommargin-sm">
								<label for="">Select Car</label>
									<select class="select-1" style="width:45%;">
									
									<optgroup label="All">
										<option value=" ">All Cars</option>
									</optgroup>
									
									
									<optgroup label="Latest Cars In Pakistan">
									
									<?php 
										$rows=mysqli_query($con,"select * from cars")or die(mysql_error());
										?>
										
										<?php
										while($row=mysqli_fetch_array($rows)){
											?>
											<option value="
											<?php
											echo $crval = $row['crval'];
										
											?>">
										
											
										<?php
			
											echo $car = $row['car'];
										
											?>
											</option>
										<?php } ?>
									
									</optgroup>
									
									
								</select>
							</div>
							<div class="bottommargin-sm ">
							
								<button type="button" class="btn btn-default" style="padding:12px;">Search Now</button>

							
							</div>

							
						</form>

					</div>
				</div>
				<center>
			</div>
		</section>
		</div>