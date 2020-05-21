<?php
  $name=$_POST['name'];
  $image=$_POST['image'];
  $price=$_POST['price'];
  $quantity=1;
  $product= array($name,$image,$price,$quantity);
  //print_r($product);
  session_start();
  if(isset($_SESSION[$name]))
  {
	  echo "hello";
  }
  else
  {
	  $_SESSION[$name]=$product;
  }
  
header("Location:index.php");
?>