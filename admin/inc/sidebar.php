
<?php 
		
	
		if(empty($sblink)){
		$sblink='dashboard';
		}
		$sblink = $_GET['link'];
		
		?>
		
	<div class="">
		<div class="col-md-2" style="background:;">
			<div style="margin-left:15px;">
				<div style="font-size:25px;">
					Menu <br>
					
				</div>
					
							<div class="panel-group nobottommargin" id="accordion" >
							
						  <div class="panel panel-default">
							<div class="panel-heading " style="background-color: #f5f5f570;">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:#000;font-size: 18px;font-weight: bolder;">
							  
							  <i class="icon-tasks"></i> Home	


							  </a>
							</div>
							<div id="collapseOne" class="panel-collapse collapse <?php if( $sblink=="dashboard" ) echo "in" ; ?> ">
							  <div class="panel-body">
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a href="?link=dashboard">Dashboard</a>
								<br>
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a   href="http://riderspk.com">Vist Site</a><br>
							
							  </div>
							</div>
						  </div>
						  
						  
						  
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#000;font-size: 18px;font-weight: bolder;">
							  	<i class="icon-tasks"></i> Cars	

							  </a>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse <?php if( $sblink=="carpost")  echo "in" ; if( $sblink=="carid")  echo "in" ;  ?> ">
							  <div class="panel-body">
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a href="?link=carpost"> Add Car Post </a><br>
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a href="?link=carid"> Edit Car Post </a><br>
							
								</div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000;font-size: 18px;font-weight: bolder;">
							  	<i class="icon-tasks"></i> Bikes	

							  </a>
							</div>
							<div id="collapseThree" class="panel-collapse collapse  <?php if( $sblink=="bikepost")  echo "in" ;  if( $sblink=="bikeid")  echo "in" ;  ?> ">
							  <div class="panel-body">
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a href="?link=bikepost">Add Bike Post</a><br>
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a href="?link=bikeid">Edit Bike Post</a><br>
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" style="color:#000;font-size: 18px;font-weight: bolder;">
							  	<i class="icon-tasks"></i> Heavy Bikes	

							  </a>
							</div>
							<div id="collapseFour" class="panel-collapse collapse <?php if( $sblink=="heavybikepost")  echo "in" ;  if( $sblink=="hbikeid")  echo "in" ;  ?> ">
							  <div class="panel-body">
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a href="?link=heavybikepost">Add Heavy Bike Post</a><br>
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a href="?link=hbikeid">Edit Heavy Bikes Post</a><br>
							</div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" style="color:#000;font-size: 18px;font-weight: bolder;">
							  	<i class="icon-tasks"></i> Settings	

							  </a>
							</div>
							<div id="collapseFive" class="panel-collapse collapse <?php if( $sblink=="siteset")  echo "in" ;  if( $sblink=="postset")  echo "in" ;  ?> ">
							  <div class="panel-body">
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a   href="?link=siteset">Site Settings</a><br>
								<i style="font-size:15px;margin-right:5px;" class="toggle-open icon-wrench" > </i><a href="?link=postset">Post Settings</a><br>
							</div>
							</div>
						  </div>
						  
						</div>

						
							
							
							
						
							
					</div>
			</div>

		</div>
		<div class="col-md-10" style="background:;">
		
		

			<iframe src="<?php echo $sblink ?>.php" height="700px" width="100%"></iframe>

			
		</div>
	</div>
