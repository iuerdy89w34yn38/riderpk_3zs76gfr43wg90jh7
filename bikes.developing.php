<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<?php include"include/head.php";?>
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
	$( document ).on( 'click', '.loadmore', function () {
	     $(this).text('Loading...');
	     var ele = $(this).parent('li');
	      $.ajax({
	        url: 'loadmorebikes.php',
	        type: 'POST',
	        data: {
	          page:$(this).data('page'),
	        },
	        success: function(response){
	          if(response){
	            ele.hide();
	            $(".news_list").append(response);
	          }
	        }
	      });
	});
	</script>
	
	<!-- Document Title
	============================================= -->
	<title>Static Parallax | Canvas</title>
	
	
<style>

.filter-item {
	display: block;
	width: 70px;
	height: 70px;
	background: #444;
}

.filter-red .filter-item { background-color: #FF0000; }
.filter-blue .filter-item { background-color: #0000FF; }
.filter-green .filter-item { background-color: #00FF00; }

.filter-large .filter-item {
	width: 140px;
	height: 140px;
}

.filter-circle .filter-item { border-radius: 50%; }

.grid .filter-item { margin: 20px; }

</style>


</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<?php include"include/connect.php";?>
	<?php include"include/topbar.php";?>
	<?php include"include/header.php";?>
	
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Combination Filter</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Templates</a></li>
					<li class="active">Filter</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		
		
		
		
		
		
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row combination-filter bottommargin">
						<div class="">
							<strong>Company:</strong>
							<div class="btn-group" role="group" data-filter-group="color" style="margin-left: 10px;">
								<a href="#" data-filter="" class="btn btn-primary">Any</a>
								<?php 
								$rows=mysqli_query($con,"select * from bmakers")or die(mysql_error());
								
								while($row=mysqli_fetch_array($rows)){
								?>
								
								<a href="#" data-filter=".filter-<?php echo $makers = $row['bmakers']; ?>" class="btn btn-default"><?php echo $makers = $row['bmakers']; ?></a>
								
								<?php } ?>
					
					
						
							</div>
						</div>
						<br>
						

						<div class="">
							<strong>Model:</strong>
							<div class="btn-group" role="group" data-filter-group="size" style="margin-left: 30px;">
								<a href="#" data-filter="" class="btn btn-primary">Any</a>
								<?php 
								$rows=mysqli_query($con,"select * from years WHERE val<=10")or die(mysql_error());
								
								while($row=mysqli_fetch_array($rows)){
								?>
								
								<a href="#" data-filter=".filter-<?php echo $years = $row['year']; ?>" class="btn btn-default"><?php echo $years = $row['year']; ?></a>
								
								<?php } ?>
					
								
							</div>
						</div>

					</div>

					

				</div>

			</div>

		</section><!-- #content end -->

		

		
		
		
			
			
		<?php include"include/footer.php";?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
	
	
	<script type="text/javascript">
		jQuery(window).load( function(){
			var filters = {};

			var $container = $('.grid');

			$container.isotope();

			$('.combination-filter').on( 'click', '.btn', function() {
				var $this = $(this);
				// get group key
				var $buttonGroup = $this.parents('.btn-group');
				var filterGroup = $buttonGroup.attr('data-filter-group');
				// set filter for group
				filters[ filterGroup ] = $this.attr('data-filter');
				// combine filters
				var filterValue = concatValues( filters );
				$container.isotope({ filter: filterValue });

				$this.parents('.btn-group').find('.btn').removeClass('btn-primary').addClass('btn-default');

				$this.addClass('btn-primary');

				return false;
			});

			// flatten object by concatting values
			function concatValues( obj ) {
				var value = '';
				for ( var prop in obj ) {
				value += obj[ prop ];
				}
				return value;
			}

			$(window).resize(function() {
				$container.isotope('layout');
			});
		});

	</script>

</body>
</html><?php mysqli_close($con);?>