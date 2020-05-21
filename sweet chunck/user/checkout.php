<?php
include("header.php");
if(!(isset($_SESSION['uname'])))
{
	header('location:index.php');
}

?>
<?php
include('dbconnect.php');
?>
<!-- menu -->
<nav id="menu">
			<ul>
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="category.php">Category</a>
                 <ul>
                 	<li><a href="nonegg.php">Non-egg</a></li>
				<li><a href="egg.php">Egg</a></li>
                 </ul>
				</li>
				<li><a href="cart.php">Cart</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="about.php">AboutUs</a></li>
		         <li><a href="contact.php">ContactUs</a></li>
			</ul>
		</nav>
		<nav id="hidden-menu">
			<ul>
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="category.php">Category</a>
                 <ul>
                 	<li><a href="nonegg.php">Non-egg</a></li>
				<li><a href="egg.php">Egg</a></li>
                 </ul>
				</li>
				<li><a href="cart.php">Cart</a></li>
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
<!-- body -->
<div id="body">
			<div id="container" style="border:none; padding-top:50px; padding-bottom:50px;">
			 <h2>
    	
    </h2>
    <div class="row">
    	<div class="col-75">
    		<div class="container">
    			<form action="">
    				<div class="row">
    					<div class="col-58">
						<?php
						    if($con)
							{
								$query ="Select * from registration where uname='".$_SESSION['uname']."'";
								$run=mysqli_query($con,$query);
								$num=mysqli_num_rows($run);
								if($num>0)
								{
								  $data=mysqli_fetch_assoc($run);
								   $fname=$data['FNAME'];
								   $lname=$data['LNAME'];
								   $email=$data['EMAIL'];
								}
							}
						?>
    						<h3>Billing Address</h3>
    						<label for="fname"><i class="fa fa-user">Full Name</i></label>
    						<input type="text" id="fname" name="first name" value="<?php echo $fname." ".$lname;?>">
    						<label for="email"><i class="fa fa-envelope">Email</i></label>
    						<input type="text" id="email  " name="email " value="<?php echo $email;?>">
    						<label for="addr"><i class="fa fa-address-caed-o">Address</i></label>
    						<input type="text" id="addr" name="address" placeholder="452 W. 15th street ">
    						<label for="city"><i class="fa fa-institution"></i>City</label>
    						<input type="text" id="city" name="city" placeholder="mumbai">
    						<div class="row">
    							<div class="col-50">
    								<label for="state">State</label>
    								<input type="text" id="state" name="state" placeholder="pp">
      							</div>
    						
    							<div class="col-50">
    								<label for="state">Zip</label>
    								<input type="text" id="zip" name="zip" placeholder="221404">
    							</div>
    						</div>
    					</div>
    					<div class="col-50">
    						<h3>Payment</h3>
    						<label for="fname">Accepted Card</label>
    						<div class="icon-container">
    							<i class="fa fa-cc-visa"></i>
    							<i class="fa fa-cc-amex" style="color:blue"></i>
    							<i class="fa fa-cc-mastercard" style="color:red"></i>
    							<i class="fa fa-cc-discover" style="color:orange"></i>
    						</div>
    						<label for="cname">Name on Card</label>
    						<input type="text" id="cname" name="cardnumber" placeholder="12345">
    						<label for="cnum">Credit Card</label>
    						<input type="text" id="cnum" name="cardnumber" placeholder="1111-2222-3333-4444">
    						<label for="expmonth">Exp month</label>
    						<input type="text" id="expmonth" name="expmonth" placeholder="september">
    						<div class="row">
    							<div class="col-50">
    								<label for="expyear">Exp Year</label>
    								<input type="text" id="expyear" name="expyear" placeholder="2013">
    							</div>
    		              <div class="col-50">
    		              	<label for="cvv">CVV</label>
    		              	<input type="text" name=cvv" placeholder="532">
    		              	
    		              </div>
    						</div>
    					</div>
    				</div>
    				<!--	<input type="checkbox" checked="checked" name="sameadr">Shipping Address same as billing</label> -->
    					<input type="submit" value="continue to checkbos" class="btn">
    			
    			</form>
    		</div>
    	</div>
    	<div class="col-25">
    		<div class="container">
    			<h4>Cart<span class="price" style="color: black;"><i class="fa fa-shopping-cart"><b>4</b></i></span></h4>
    			<p><a href="#">IPHone</a><span class="price">$1500</span></p>
    			<p><a href="#">Samsung</a><span class="price">$1000</span></p>
    			<p><a href="#">OPPo</a><span class="price">$100</span></p>
    			<p><a href="#">xiaomi</a><span class="price">$500</span></p>
    			<hr>
    			<p>Total <span class="price" style="color:black"><b>$3900</b></span></p>
    		</div>
    	</div>
    </div>
			</div>
		</div>
<?php
include("footer.php");
?>
<script type="text/javascript">
		function show()
		{
		   alert('Item is added');
				
		}
	</script>
