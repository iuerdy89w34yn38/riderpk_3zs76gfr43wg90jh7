<?php 
	session_start();
	if(!isset($_SESSION['name'])){
		header("location:../login.php");
	}

?>
<?php

// Store Session Data
 $username= $_SESSION['name'];  // Initializing Session with value of PHP Variable
echo $_SESSION['name'];


?>



<html>
	<head>
	<title>Admin Panel</title>
	
		<link type="text/css" rel="stylesheet" href="../css/style.css">
		
		
	</head>
	
<body>
	<center>
	<a href="../index.php">
	Home
	</a>
	<br><br>
	<h2>Welcome To Admin Panel </h2>
	<br>
	<h3>What You Want To Do.?</h3>
	<h4>
	<a href="insert.php">Insert New Post </a>
	</h4>
	
	<h4>
	<a href="view.php">View All Post </a>
	</h4>
	
	<h4>
	<a href="del.php">Delete All Post </a>
	</h4>
	<br><br><br><br>
	<h4>
	<a href="logout.php">logout </a>
	</h4>
	
	
	
	
	
	
	
	
	</div>
