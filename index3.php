<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	
	
	
	<!-- Document Title
	============================================= -->
	<title>PakRiders</title>
	
	<!-- Select-Boxes CSS -->
	<link rel="stylesheet" href="css/components/select-boxes.css" type="text/css" />
	
	
	<?php
	include"include/head.php";
	?>

	
	

</head>

<body class="stretched">
			
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
	
		<?php
		
			include"include/connect.php";
		
		
		?>
		
		<?php
		
			include"include/topbar.php";
		
		
		?>
		
		
		<?php
		
			include"include/header.php";
		
		
		?>
		
		
		
		
		
		
		<?php
		
			include"include/slidemain.php";
		
		
		?>
		
		
	
		
		
		<?php 
			include"include/info.php";
		?>
	
		
		
		<?php 
			include"include/search.php";
		?>
	
		
		
		
		
		
		<?php 
			include"include/carspro.php";
		?>
	

		<?php 
			include"include/bikespro.php";
		?>
	
		
		
		
		
		
		
		
		<?php 
			include"include/footer.php";
		?>
	
		
		
		
		
		
		
		
		
		
		
		
		
		
	
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

	<!-- Select-Boxes Plugin -->
	<script type="text/javascript" src="js/components/select-boxes.js"></script>
	
	
	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script type="text/javascript" src="js/ss/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="js/ss/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="js/ss/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="js/ss/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/ss/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/ss/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/ss/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/ss/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/ss/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/ss/revolution.extension.parallax.min.js"></script>

	<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

			var apiRevoSlider = tpj('.tp-banner').show().revolution(
			{
				sliderType:"standard",
				jsFileLocation:"js/ss/",
				sliderLayout:"fullwidth",
				dottedOverlay:"none",
				delay:16000,
				startwidth:1140,
				startheight:600,
				hideThumbs:200,

				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,

				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder"></div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
				},

				touchenabled:"on",
				onHoverStop:"on",

				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,

				parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

				keyboardNavigation:"off",

				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,

				shadow:0,
				fullWidth:"on",
				fullScreen:"off",

				spinner:"spinner4",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",

				autoHeight:"off",
				forceFullWidth:"off",
				hideTimerBar:"on",


				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
			});

			apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
			});

			apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});

		});

	</script>
	
	<script type="text/javascript">
		jQuery(document).ready( function($){

			
			// Multiple Select
			$(".select-1").select2({
				placeholder: "Select Multiple Values"
			});

			// Loading array data
			var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];
			$(".select-data-array").select2({
			  data: data
			})
			$(".select-data-array-selected").select2({
			  data: data
			});

			// Enabled/Disabled
			$(".select-disabled").select2();
			$(".select-enable").on("click", function () {
				$(".select-disabled").prop("disabled", false);
				$(".select-disabled-multi").prop("disabled", false);
			});
			$(".select-disable").on("click", function () {
				$(".select-disabled").prop("disabled", true);
				$(".select-disabled-multi").prop("disabled", true);
			});

			// Without Search
			$(".select-hide").select2({
				minimumResultsForSearch: Infinity
			});

			// select Tags
			$(".select-tags").select2({
				tags: true
			});

			// Select Splitter
			$('.selectsplitter').selectsplitter();

		});
	</script>
	
	
	
	
	
	
	
	
	
</body>
</html><?php mysqli_close($con);?>