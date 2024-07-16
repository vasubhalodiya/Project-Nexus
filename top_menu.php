<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/validation.js"></script>
</head>
<body>
<div class="topmenu">
	<div class="menubar" >
		<a id = "home" href="index.php"><i class="fa fa-home"></i> Home</a>
	  	<?php if (isset($_SESSION['name'])) {  ?>
	  	<div class="logout">
	  		<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	  	</div>
	  	<?php } 
	  	else { ?>
	  		<a id = "login"  href="login.php"><i class="fa fa-sign-in"></i> Login</a>
	  	<?php } ?>
	  	<div class="user"><?php if (isset($_SESSION['name']))
	  		echo '<span class="welcome">Welcome &nbsp;&nbsp;</span>'.$_SESSION['name']; ?>
	 	</div>
	</div>
</div>





