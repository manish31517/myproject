<?php include("dbconnect.php");?>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="registration_main.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="jquery.js"></script>
	<script type="text/javascript" src="rotation.js"></script>
	<script type="text/javascript" src="menustick-slide.js"></script>
</head>
<body>
	<div id="main">
		<div id="header-menu">
				<header id="header">
					<section id="right-section">
						<span style="border-right: 1px solid"><a href="registation.php">Sign up</a></span> 
						   <span><a href="login.php">Login</a></span>
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
		<div id="body" style="height: 1000px;">
			<div id="body-align" style=" margin: 0 auto;">
				<div class="title"><h1>Sing Up</h1></div>
<div class="container">
	<div class="left"></div>
	<div class="right">
		<div class="formBox">
			<form action="registation.php" method="post">
				<p>First Name</p>
              <input type="text" name="fname" placeholder="Enter first name">
              	<p>Last Name</p>
              <input type="text" name="lname" placeholder="Enter last name">
              	<p>Email address</p>
              <input type="text" name="email" placeholder="Enter email">
			  <p>User Name</p>
              <input type="text" name="uname" placeholder="Enter user name">
              	<p>Contact No</p>
              <input type="text" name="contact1" placeholder="enter contact no">
              	<p>Alternative Contact No</p>
              <input type="text" name="contact2" placeholder="Enter Alternative no">
              <p>Addresss</p>
              <input type="text" name="addr" placeholder="Enter Addresss">
              <p>Password</p>
              <input type="password" name="password1" placeholder="*****">
              <p>Confirm Password</p>
              <input type="password" name="password" placeholder="*****">
              <br>
              <input type="submit" name="submit" value="Sing up">
              <br>
              <a href="login.php">Log in</a>
              <a href="index.php" style=" margin-left:70%;">Home</a>
			</form>
		</div>
	</div>
</div>
			</div>
			
		</div>
	<?php include("footer.php");?>
	
	<?php
	  if(isset($_POST["submit"]))
	  {
	  $fname = $_POST["fname"];
	   $uname = $_POST["uname"];
	  $lname =$_POST["lname"];
	  $email=$_POST["email"];
	  $contact1=$_POST["contact1"];
	  $contact2=$_POST["contact2"];
	  $addr=$_POST["addr"];
	  $password=$_POST["password1"];
	 // INSERT INTO `registration`(`fn`, `ln`, `email`, `address`, `username`, `password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
	  $query="insert into registration values('$fname','$lname','$email','$addr',' $uname','$password')";
	  $query1="insert into contact values($contact1,'$email')";
	  $query2="insert into contact values($contact2,'$email')";
	  $run1= mysqli_query($con,$query);
	  if($run1==TRUE)
	  {
		  $run2= mysqli_query($con,$query1);
	      $run3= mysqli_query($con,$query2);
	  }
	  
	     if($run1==TRUE && $run2==TRUE && $run3==TRUE)
		  header("Location:login.php");
	     else 
		  echo "data is not inserted";
	  }
	?>