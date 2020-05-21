<?php
  session_start();
  if(isset($_SESSION['uname']))
	  header('location:index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="registration.css">
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
		<div id="body">
			<div id="body-align" style=" margin: 0 auto;">
				<div class="title"><h1>LogIn</h1></div>
<div class="container">
	<div class="left"></div>
	<div class="right">
		<div class="formBox">
			<form action="login.php" method="post">
				<p>Email</p>
              <input type="text" name="name" placeholder="Enter ur name">
              <p>Password</p>
              <input type="password" name="password" placeholder="*****">
              <br>
              <input type="submit" name="submit" value="Sing in">
              <br>
              <a href="#">Forget Password</a>
              <a href="index.php" style=" margin-left:50%;">Home</a>
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
	  	 include("dbconnect.php");
	  $email =$_POST["name"];
	  $password=$_POST["password"];
	  if($con)
	  { 
     
		  $query="select * from registration where email='$email' AND password='$password'";
		  $run=mysqli_query($con,$query);
		  $num=mysqli_num_rows($run); 
		
		  if($num>0)
		  {
			$data=mysqli_fetch_assoc($run);
			$uname=$data['UNAME'];
		  //echo $uname; 
             //ssession_start();
		
             $_SESSION['uname']=$uname;		   
			  
		  }
		  else
		  {
			?>
		<script>
		alert("email id or password missmatch");
		window.open("login.php","_self");
		</script>
		<?php
	   }
	  }
      else
		  echo "not";
  }
?>