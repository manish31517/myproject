<?php
include("header.php");
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
			<div id="container">
			
			<?php 
			  include("dbconnect.php");
			  //if($con)
				  $query ="select * from produc1";
			       $run=mysqli_query($con,$query);
				   $num=mysqli_num_rows($run);
				   if($num>0)
				   {
					   while($data=mysqli_fetch_assoc($run))
					   {
						   ?>
						   <form method="post" action="insertcart.php">
						   <ul>
						   <li>
						   <section class="title"><?php
						   echo $data['name'];
						   ?>
						   </section>
						    <figure class="img">
							<img src="cakes/<?php
							 echo $data['image']
							?>">
							</figure>
							<section>
							<h3 class="price">
							<span style="margin-left:20px;">
							Rs.<?php
                             $val =$data['price'];
							 $dis=$data['discount'];
							 $realdis=($val*$dis)/100;
							 $act=$val-$realdis;
							 echo $act;
    					    ?> </span>
							<span style="margin-left:40%;text-decoration:line-through;color:#5b5c5e"><?php
                            echo "Rs ".$val;
    					?></span>
						<span"><?php
                            echo $dis;
    					?>%OFF</span>
						</h3>
							</section>
							<section id="button">
							<input type="hidden" name="name" value="<?php echo $data['name'];?>">
							<input type="hidden" name="image" value="<?php echo $data['image'];?>">
							<input type="hidden" name="price" value="<?php echo $act;?>">
							<input type="submit" id="left-button" name="cart" onclick="show()" value="Add Cart">
							<input type="submit" id="right-button" name="buy" value="Buy">
							</section>
						   </li>
						   </ul>
						   </form>
						   <?php
					   }
				   }
		      
			?>
			
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
