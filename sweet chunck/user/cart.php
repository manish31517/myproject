<?php
include("header.php");
?>
<nav id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li  ><a href="category.php">Category</a>
                 <ul>
                 	<li><a href="nonegg.php">Non-egg</a></li>
				<li><a href="egg.php">Egg</a></li>
                 </ul>
				</li>
				<li class="current"><a href="cart.php">Cart</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="about.php">AboutUs</a></li>
		         <li><a href="contact.php">ContactUs</a></li>
			</ul>
		</nav>
		<nav id="hidden-menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="category.php">Category</a>
                 <ul>
                 	<li><a href="nonegg.php">Non-egg</a></li>
				<li><a href="egg.php">Egg</a></li>
                 </ul>
				</li>
				<li class="current"><a href="cart.php">Cart</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="about.php">AboutUs</a></li>
		         <li><a href="contact.php">ContactUs</a></li>
			</ul>
		</nav>
		<div id="line" style="background-color:  #703f54;height:4px;"></div>
		<div  id="banner">
			<img src="images/image1.jpg"> 
			<img src="images/image2.jpg">
			<img src="images/image3.jpg">
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
			<div class="circle"></div>
	
		</div> 

<div id="body">
			<div id="container" style="border:none;">
			<table id="table">
			<thead>
			 <tr>
			 <th>
			 SNO
			 </th>
			 <th>
			 NAME
			 </th>
			 <th>
			 IMAGE
			 </th>
			 <th>
			 PRICE
			 </th>
			 <th>
			 QUANTITY
			 </th>
			 
			 <th>
			 TOTAL
			 </th>
			 <th>
			 CHANGE
			 </th>
			 </tr>
			</thead>
			<tbody>
			<?php
			$total=0;
			 $bill=0;
			 $sno=1;
			//echo "helll";
			 foreach($_SESSION as $product)
			 {  
			 if(!(isset($_SESSION['uname'])))
				 {
						
			     $price=0;
				 echo "<tr>";
				 echo "<form action='removecart.php' method='post'>";
				 echo "<td>".($sno++)."</td>";
				 foreach($product as $key => $value)
				 {
					 if($key==0)
					 {
						 $name=$value;
						 echo "<td style='text-transform:uppercase;'>".$value."</td>";
						 echo "<input type='hidden' name='name' value= '".$value."'>";
					 }
					 if($key==1)
					 { 
				     // echo $value;
						 echo "<td><img src='cakes/".$value."'></td>";
						 echo "<input type='hidden' name='image' value= '".$value."'>";
					 }
				  if($key==2)
					 {
						 $price=$value;
						 echo "<td>Rs.".$value."</td>";
						 echo "<input type='hidden' name='price' value= '".$value."'>";
					 }
					if($key==3)
					 {
						 $quantity=$value;
						 
						 echo "<td>".$value."</td>";
						 echo "<input type='hidden' name='price' value= '".$value."'>";
						// $_SESSION[$name][$key]=3;
					 }
				 }
				          
						 $bill=$quantity*$price;
						 $total=$total+$bill;
						 //echo "<td>".$quantity."</td>";
						 echo "<td>".$bill."</td>";
						 echo "<td><input type='submit' id='remove' name='remove' value= 'Remove'></td>";
					 
				         echo "</form>";
				          echo "</tr>";
				 }
						  
			     else if($product!=$_SESSION['uname']){
			     $price=0;
				 echo "<tr>";
				 echo "<form action='removecart.php' method='post'>";
				 echo "<td>".($sno++)."</td>";
				 foreach($product as $key => $value)
				 {
					 if($key==0)
					 {
						 echo "<td style='text-transform:uppercase;'>".$value."</td>";
						 echo "<input type='hidden' name='name' value= '".$value."'>";
					 }
					 if($key==1)
					 { 
				     // echo $value;
						 echo "<td><img src='cakes/".$value."'></td>";
						 echo "<input type='hidden' name='image' value= '".$value."'>";
					 }
				  if($key==2)
					 {
						 $price=$value;
						 echo "<td>Rs.".$value."</td>";
						 echo "<input type='hidden' name='price' value= '".$value."'>";
					 }
					 if($key==3)
					 {
						 $quantity=$value;
						 
						 echo "<td>".$value."</td>";
						 echo "<input type='hidden' name='price' value= '".$value."'>";
						
					 }
					
				 }
				         
						 $bill=$quantity*$price;
						 $total=$total+$bill;
						// echo "<td>".$quantity."</td>";
						 echo "<td>".$bill."</td>";
						 echo "<td><input type='submit' id='remove' name='remove' value= 'Remove'></td>";
					 
				         echo "</form>";
				          echo "</tr>";
				 }
						  
			 }
			 if($sno>1)
			 echo "<tr><td style='border:none;text-align:right' colspan='5'>Total price</td><td style='border:none;'>$total</td><td style='border:none;'><a id='proceed-btn' href='proceed&checkout.php'>Procedd and Checkout</a></td></tr>"
			?>
			</tbody>
			</table>
			</div>
		</div>
<?php
include("footer.php");
?>
