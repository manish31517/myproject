
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta neme="viewport" content="width-device-width, initial-scale.0">
	
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <meta http-equiv="X-UA-Compatible" content="id=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="cartbody.css">
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<script src="jquery.js"></script>
	<script type="text/javascript" src="rotation.js"></script>
	<script type="text/javascript" src="menustick-slide.js"></script>
	<?php
   session_start();
  if(isset($_SESSION['uname']))
   {
	   ?>
	   <script>
	     $(document).ready(function(){
			// alert();
			$("#sign").css("display","none");
			$("#login").css("display","none");
			$("#logout").css("display","inline");
			$("#welcome").css("display","inline");
		 })
	   </script>
	   <?php
	   function show()
	   {
		   echo "Welcome".$_SESSION['uname'];
	   }
   }
  
?>
</head>
<body>
	<div id="main">
		<div id="header-menu">
				<header id="header">
					<section id="right-section">
						<span id="sign" style="border-right: 1px solid;"><a href="registation.php">Sign up</a></span> 
						   <span id="login"><a href="login.php">Login</a></span>
						   	<span id="welcome" style="border-right: 1px solid; margint-left:-100px;display:none;">
							<?php 
							  if(isset($_SESSION['uname']))
							show();
						?></span> 
						   <span id="logout" style="display:none"><a href="logout.php">Logout</a></span>
					</section>
					<section id="form-section">
						<form accept="#" id="search">
						
							<input type="text" name="search" id="search-input" maxlength="30">
							<input type="submit" id="search_btn">
						</form>
					</section>
					<figure id="logo">
						<img src="images/logo.gif">
					</figure>
		</header>
		