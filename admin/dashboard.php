
<html>
	<head>
	
	
	<?php include('inc/head.php'); ?>
	
	<title>Welcome <?php echo $user=$_SESSION['name'];?></title>

	
	
	
	
	</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix" style="padding:20px;">
	
	
	
			<div class="container clearfix">
				<h1 style="text-transform:uppercase;">Welcome  <?php echo $user=$_SESSION['name'];?></h1>
				
			</div>

		
		
		<div class=" nobottommargin clearfix">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title">Overall Stats </h2>
			</div>
			<div class="panel-body">
			<div class="container content" >
		<ul class="list-group col-md-4 " >
							<li class="list-group-item">
								<span class="badge">
								
								<?php 
														
							$sql="SELECT * FROM carposts where author = '$user' ";

							$result=mysqli_query($con,$sql);
							
							$allcarcount=mysqli_num_rows($result);
							echo $allcarcount;
							
							
								?>
								
								
								
								</span>
								Car Posts
							</li>
						</ul>
		<ul class="list-group col-md-4 " >
							<li class="list-group-item">
								<span class="badge">
								
								<?php 
														
							$sql="SELECT * FROM bikeposts where author = '$user' ";

							$result=mysqli_query($con,$sql);
							
							$allbikecount=mysqli_num_rows($result);
							echo $allbikecount;
							
							
								?>
								
								</span>
								Bikes Posts
							</li>
						</ul>
		<ul class="list-group col-md-4 col_last" >
							<li class="list-group-item">
								<span class="badge">
								
								<?php 
														
							$sql="SELECT * FROM heavybikeposts where author = '$user' ";

							$result=mysqli_query($con,$sql);
							
							$allhbikecount=mysqli_num_rows($result);
							echo $allhbikecount;
							
							
								?>
								
								</span>
								Heavy Bike Posts
							</li>
						</ul>
		</div>
			</div>
		</div>
		<section>
		<br>
		<h3>Today's Stats</h3>
		</section>
		
		
		
		<div class="container content" >
		<div class="list-group col-md-4 " >
							<div class="list-group-item">
								<span class="badge">
								
								<?php 
								date_default_timezone_set("Asia/Karachi");
								$date= date("Y-m-d");						
							$sql="SELECT * FROM carposts where author = '$user' && created = '$date'  ";

							$result=mysqli_query($con,$sql);
							
							$carcount=mysqli_num_rows($result);
							echo $carcount;
							
							
								?>
								
								
								</span>
								Car Posts
							</div>
							<div style="padding-top:25px;">
								<h4>Some Recent Cars Posts</h4>
							</div>
							<table class="table">
							
							
								<thead>
									<tr>
										<th>PostID</th>
										<th>Company</th>
										<th>Model</th>
										<th>Preview</th>
									</tr>
								</thead>
								<tbody>
								
							<?php							
							$sql = "SELECT post_id, model, year , img1thumb FROM carposts WHERE author = '$user' ORDER BY post_id desc LIMIT 5";
							$result = $con->query($sql);
							while($row = $result->fetch_assoc()) {
							?>
								
									<tr>
										<td><?php echo $row['post_id'] ?></td>
										<td><?php echo $row['model'] ?></td>
										<td><?php echo $row['year'] ?></td>
										<td><img src="../images/cars/thumb/<?php echo $row['img1thumb'] ?>" > </td>
										
									</tr>
									
							<?php } ?>
									
								</tbody>
							</table>
		</div>
		<ul class="list-group col-md-4 " >
							<li class="list-group-item">
								<span class="badge">
								
								<?php 
														
							$sql="SELECT * FROM bikeposts where author = '$user'  && created = '$date'  ";

							$result=mysqli_query($con,$sql);
							
							$bikecount=mysqli_num_rows($result);
							echo $bikecount;
							
							
								?>
								
								
								</span>
								Bikes Posts
							</li>
							<div style="padding-top:25px;">
								<h4>Some Recent Bike Posts</h4>
							</div>
							
							<table class="table">
								<thead>
									<tr>
										<th>PostID</th>
										<th>Company</th>
										<th>Model</th>
										<th>Preview</th>
									</tr>
								</thead>
								<tbody>
									<?php							
							$sql = "SELECT post_id, company , model, year , img1thumb FROM bikeposts WHERE author = '$user' ORDER BY post_id desc LIMIT 5 ";
							$result = $con->query($sql);
							while($row = $result->fetch_assoc()) {
							?>
								
									<tr>
										<td><?php echo $row['post_id'] ?></td>
										<td><?php echo $row['company'] , "&nbsp" , $row['model'] ?></td>
										<td><?php echo $row['year']  ?></td>
										<td><img src="../images/bikes/thumb/<?php echo $row['img1thumb'] ?>" > </td>
										
									</tr>
									
							<?php } ?>
									
								</tbody>
							</table>
						</ul>
		<ul class="list-group col-md-4 col_last" >
							<li class="list-group-item">
								<span class="badge">
								
								<?php 
														
							$sql="SELECT * FROM heavybikeposts where author = '$user'  && created = '$date' ";

							$result=mysqli_query($con,$sql);
							
							$hbikecount=mysqli_num_rows($result);
							echo $hbikecount;
							
							
								?>
								
								
								</span>
								Heavy Bike Posts
							</li>
							<div style="padding-top:25px;">
								<h4>Some Recent Heavy Bike Posts</h4>
							</div>
							
							<table class="table">
								<thead>
									<tr>
										<th>PostID</th>
										<th>Company</th>
										<th>Model</th>
										<th>Preview</th>
									</tr>
								</thead>
								<tbody>
									<?php							
							$sql = "SELECT post_id, model, year , img1thumb FROM heavybikeposts WHERE author = '$user' ORDER BY post_id desc LIMIT 5 ";
							$result = $con->query($sql);
							while($row = $result->fetch_assoc()) {
							?>
								
									<tr>
										<td><?php echo $row['post_id'] ?></td>
										<td><?php echo $row['model'] ?></td>
										<td><?php echo $row['year']  ?></td>
										<td><img src="../images/hbikes/thumb/<?php echo $row['img1thumb'] ?>" > </td>
										
									</tr>
									
							<?php } ?>
								
								</tbody>
							</table>
						</ul>
		</div>

		<?php  
		
		$allcount=$allcarcount+$allbikecount+$allhbikecount;
		
		$data=mysqli_query($con,"UPDATE `admins` SET `carposts`='$allcarcount',`bikeposts`='$allbikecount',`hbikeposts`='$allhbikecount',`allpost`='$allcount' WHERE `username` = '$user'	")or die( mysqli_error($con) );
		
		
		?>




<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../../js/functions.js"></script>
	

</body>
</html><?php mysqli_close($con);?>


