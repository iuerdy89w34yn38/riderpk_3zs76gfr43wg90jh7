 <?php include('inc/head.php'); ?>
 
	<?php $hacker=$_SESSION['name']; ?>
	
	<?php 
	
	$myhacker=md5(uniqid());
	$query=mysqli_query($con,"UPDATE `users` SET `password` = '$myhacker' WHERE `username` = '$hacker'")or die( mysql_error() );
		
	
	
	
	 
	 ?>
	 
	 
	 <?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:../kickout.php"); // Redirecting To Home Page
}
?>

