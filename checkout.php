<?php
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Online Book Shop | Checkout</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input name="Email" placeholder="Email Address" type="text" required="">						
													<input name="Password" placeholder="Password" type="password" required="">										
													<div class="sign-up">
														<input type="submit" value="Sign in"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input placeholder="Name" name="Name" type="text" required="">
													<input placeholder="Email Address" name="Email" type="email" required="">	
													<input placeholder="Password" name="Password" type="password" required="">	
													<input placeholder="Confirm Password" name="Password" type="password" required="">
													<div class="sign-up">
														<input type="submit" value="Create Account"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">
								OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">
										Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><img src="images/logo.jpg" alt="Smiley face" width="100" height="100"></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index2.php">Bharat Publications<span>For Competitors</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart box_1">
				<a href="checkout.php">
					<p style="margin-left: 3em; color: green;font-size: 1em">CART&nbsp;<img src="images/bag.png" alt="" /></p>
					<div class="total">₹
					 <?php 
					 	include 'carttotal.php';
					  ?>
					( 
					<?php 
					 	include 'cartno.php';
					  ?>
				items)</div>
					
				</a><br>
				<div class="clearfix"> </div>
			</div>	<?php  
				$user=$_SESSION['loginuser'];
				if($user=='unknown'){
					echo '<a style="position: absolute;margin-left: 17em;margin-top: 2em;padding:0.2em 0.7em;float: right;border:0.2em solid #ff9b05;color: black;" href="index.php"> LOG IN </a>';
				}else{
					echo '<a style="position: absolute;margin-left: 17em;margin-top: 1em;padding:0.2em;float: right;border:0.2em solid #ff9b05;color: black;" href="logout.php">LOG OUT</a><br><a style="position: absolute;margin-left: 15em;margin-top: 2em;padding:0.2em;float: right;color: #ff9b05;font-size:1em"> '.$user.' </a>';
				}

				?>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index2.php">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Main</h6>
											<li><a href="GPSC.php">G.P.S.C</a></li>
											<li><a href="High Court.php">High Court</a></li>
											<li><a href="Panchayat.php">Panchayat</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Others</h6>
											<li><a href="Other.php">Other EXAM</a></li>
											
										</ul>
									</div>
								</div>
							</ul>
						</li>
						<li><a href="Quiz.php">QUIZ</a></li>
						<li><a href="about.php">About Us</a></li>
						
						<li><a href="mail.php">Mail Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Checkout</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index2.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Checkout</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h3>Your shopping cart contains: <span><?php 

				$conn = new mysqli('localhost','root','','project');
					if($conn->connect_error)
						{
							echo 'Failed to connect';
						}
					else
						{
							$email=$_SESSION['loginuser'];
							//$sql="SELECT * from cart";
							$sql= "SELECT book_title,category,price FROM cart,books WHERE product_id=book_id AND user_id='$email'";
							$result = $conn->query($sql);
							$count=0;
							if ($result->num_rows > 0) {
							  echo $result->num_rows;
							 
							} else {
							  echo " 0 ";
							}

							$conn->close();
						}
			;?> Products</span></h3>

			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quantity</th>
							<th>Product Name</th>
							<th>Service Charges</th>
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<?php 

					$conn = new mysqli('localhost','root','','project');
					if($conn->connect_error)
						{
							echo 'Failed to connect';
						}
					else
						{
							$email=$_SESSION['loginuser'];
							//$sql="SELECT * from cart";
							$sql= "SELECT book_title,category,price,quantity,product_id FROM cart,books WHERE product_id=book_id AND user_id='$email'";
							$result = $conn->query($sql);
							$count=0;
							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							    $count++;
							    

							    		echo '<tr class="rem1">';
										echo'<td class="invert" style="padding: 25px">'.$count.'</td>';
										echo '<td class="invert">'.$row["book_title"].'</td>';
										echo '<td class="invert">1</td>';
											
										echo '<td class="invert">'.$row["category"].'</td>';
										echo '<td class="invert">₹50</td>';
										echo '<td class="invert">'.$row["price"].'</td>';
										echo '<td class="invert">';
											echo '<div>';
												echo '<a style="font-size:2em; border-radius:50%;border: 0.1em solid black;color:black;padding:0 0.4em;" href="cartitems.php?data='.$row["product_id"].'">x</a>';
											echo '<div>';
											echo '';
										echo '</td>';
									echo '</tr>';




							  }
							} else {
							  echo "0 items";
							}

							$conn->close();
						}

					


					?>
					
					<!-- <tr class="rem2">
						<td class="invert">2</td>
						<td class="invert-image"><img src="images/8.jpg" alt=" " class="img-responsive" height="120px" width="120px"/></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Railway</td>
						<td class="invert">₹50</td>
						<td class="invert">₹250.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close2"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr> -->
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){

									// <?php 
									// $conn = new mysqli('localhost','root','','project');
									// if($conn->connect_error)
									// 	{
									// 		echo 'Failed to connect';
									// 	}
									// else
									// 	{
									// 	$email=$_SESSION['loginuser'];
									// 	$sql= "UPDATE cart SET quantity=newVal WHERE user_id='$email' AND product_id=''";
									// 	$conn->query($sql)
									// ?>
										
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</table>
			</div>
			<br>
			<div class="checkout-left">	
				<div class="checkout-left-basket" style="width: 40%;">
					<h4>Continue to basket</h4>
					<ul>
				<?php 

					$conn = new mysqli('localhost','root','','project');
					if($conn->connect_error)
						{
							echo 'Failed to connect';
						}
					else
						{
							$email=$_SESSION['loginuser'];
							//$sql="SELECT * from cart";
							$sql= "SELECT book_title,price FROM cart,books WHERE product_id=book_id AND user_id='$email'";
							$result = $conn->query($sql);
							$count=0;$amount=0;
							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							    $count++;
							    	$amount+=$row["price"];
									echo '<li style="font-weight:400; font-size:0.9em; color:#696969; border:none;padding:0.3em;margin:1em 0;">'.$row["book_title"].'<i> - </i> <span>'.$row["price"].' </span></li>';
									
							  }

							  $charge=$count*50;

							 echo '<li style="font-weight:600; font-size:0.9em; color:#303030; border:none;padding:0.3em;margin:1em 0;">Total Service Charges <i>-</i> <span>'.$charge.'</span></li>';
							 $charge+=$amount;
							 echo '<li style="font-weight:900; font-size:0.9em; color:#000000; border-top:2px solid black;border-bottom:2px solid black;padding:1em 0.3em;margin:0.5em 0;">Total <i>-</i> <span>'.$charge.'</span></li>';

							} else {
							  echo "0 items";
							}

							$conn->close();
						}

					


					?>

						
					</ul>
				</div>
				<div class="checkout-right-basket">
					<a href="Other.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="w3l_related_products">
		<div class="container">
			<h3>Related Products</h3>
			<ul id="flexiselDemo2">			
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/39.jpg" alt=" " class="img-responsive">
								
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										
									</div>
								</div>
							</div>
							<h5>TET</h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><i class="item_price">₹350</i></p>
								<p><a class="item_add" href="cart.php?data=bk0023">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/42.jpg" alt=" " class="img-responsive">
								
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										
									</div>
								</div>
							</div>
							<h5>Bank</h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><i class="item_price">₹220</i></p>
								<p><a class="item_add" href="cart.php?data=bk0033">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/35.jpg" alt=" " class="img-responsive">
								
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										
									</div>
								</div>
							</div>
							<h5>Police</h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><i class="item_price">₹460</i></p>
								<p><a class="item_add" href="cart.php?data=bk0019">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/32.jpg" alt=" " class="img-responsive">
								
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										
									</div>
								</div>
							</div>
							<h5>Nurse</h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><i class="item_price">₹350</i></p>
								<p><a class="item_add" href="cart.php?data=bk0031">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
			</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>

<!-- //checkout -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p></p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="connect_newsletter.php" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p></p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>CHARUSAT, Changa <span>Anand City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 9988776655</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="mail.php">Contact Us</a></li>
						

						<li><a href="faq.php">FAQ's</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="GPSC.php">G.P.S.C</a></li>
						<li><a href="High Court.php">High Court</a></li>
						<li><a href="Panchayat.php">Panchayat</a></li>
						<li><a href="Other.php">Other</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						
						<li><a href="checkout.php">My Cart</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2020 Bharat Publications. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>