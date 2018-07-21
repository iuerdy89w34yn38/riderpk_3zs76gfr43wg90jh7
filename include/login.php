<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<?php
	include('../include/connect.php');
	session_start();

if(isset($_SESSION['name'])){
header("location:../admin/index.php?link=dashboard");
}
?>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../style.css" type="text/css" />
	<link rel="stylesheet" href="../css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="../css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Login - RidersPK</title>

	
	
</head>

<body class="stretched">

	
	

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background:; background-size: cover;"></div>

				<div class="section nobg full-screen nopadding nomargin">
					<div class="container vertical-middle divcenter clearfix">

						<div class="row center">
							<a href="../index.php"><img src="/images/logo/logos.jpg" alt="Rider PK"></a>
						</div>

						<div class="panel panel-default divcenter noradius noborder" style="max-width: 400px;">
							<div class="panel-body" style="padding: 40px;">
								<form id="login-form" name="login-form" class="nobottommargin" action="login.php" method="post">
									<h3>Login to your Account</h3>

									<div class="col_full">
										<label for="login-form-username">Username:</label>
										<input type="text" id="login-form-username" name="username" value="" class="form-control not-dark" style="width:100%;" />
									</div>

									<div class="col_full">
										<label for="login-form-password">Password:</label>
										<input type="password" id="login-form-password" name="password" value="" class="form-control not-dark" style="width:100%;" />
									</div>

									<div class="col_full nobottommargin">
										<button class="button button-3d button-black nomargin" id="login-form-submit" name="submit" value="login">Login</button>
										<a href="#" class="fright">Forgot Password?</a>
									</div>
								</form>
								<?php
								
								$button=$_GET['button'];
								if($button=1){
								if (isset($_POST['submit'])) {
								if (empty($_POST['username']) || empty($_POST['password'])) {
								echo "Username or Password is empty";
								}
								else
								{
								$username=$_POST['username'];
								$password=$_POST['password'];
								$username = stripslashes($username);
								$password = stripslashes($password);
								$query = mysqli_query($con,"select * from admins where password='$password' AND username='$username'")or die(mysql_error());
								$rows = mysqli_num_rows($query);
								if ($rows == 1) {
								$_SESSION['name']=$username; // Initializing Session
								header("location:../admin/index.php?link=dashboard"); // Redirecting To Other Page
								} else {
								echo "Username or Password is invalid";
								}
								}
								}
								}
								else{
									$user = $_POST['username'];
									$pass = $_POST['password'];
									$query = mysqli_query($con,"select * from admins where password='$pass' AND username='$user'")or die(mysql_error());
									$rows = mysql_num_rows($query);
									if ($rows == 1) {
									$_SESSION['name']=$username; // Initializing Session
									header("location:../admin/index.php?link=dashboard"); // Redirecting To Other Page
									} else {
									echo "Username or Password is invalid";
							}
							}
		?>
								
								
								
								
								
								

								<div class="line line-sm"></div>

							</div>
						</div>

						<div class="row center dark"><small>Copyrights &copy; All Rights Reserved by Riders PK.</small></div>

					</div>
				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>

</body>
</html><?php mysqli_close($con);?>