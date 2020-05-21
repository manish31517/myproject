<?php
 session_start();
	//echo "<script>alert()</script>";
	$name=$_POST['name'];
	//echo $name;
	unset($_SESSION[$name]);
	header("location:cart.php");

	

?>