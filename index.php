<?php
session_start();
$_SESSION['loginuser'] = 'unknown';

$conn = new mysqli('localhost','root','','project');
if($conn->connect_error)
{
	echo 'Failed to connect';
}
else
{
	$sql = "DELETE FROM cart WHERE user_id='unknown'";
	$conn->query($sql);
	$conn->close();
}

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
<title>Online Book Shop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Book Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
<!-- countdown -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //countdown -->
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
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
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
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="connect_signin.php" method="post"><!-- DB ADDED -->			
													<input name="Email" placeholder="Email Address" type="text" required>						
													<input name="Password" placeholder="Password" type="password" required>
														<input type="submit" value="Sign in"/>
												</form>
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="connect_signup.php" method="post"><!-- DB ADDED -->		
													<input placeholder="Name" name="Name" type="text" required>
													<input placeholder="Email Address" name="Email" type="email" required>	
													<input placeholder="Password" name="Password" type="password" required>	
													<input placeholder="Confirm Password" name="Password" type="password" required>
														<input type="submit" value="Create Account"/>
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
	<script>
		$('#myModal88').modal('show');
	</script>
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
						<li class="active"><a href="index2.php" class="act">Home</a></li>	
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
	<div class="banner" id="home1">
		<div class="container">
			<h3>Read It, <span>Creat Way To Success</span></h3>
		</div>
	</div>
<!-- //banner -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div >
					<img src="images/vid.jpg" alt="" hight="300px">
				</div>
				
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">G.P.S.C</a></li>
						<li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Railway</a></li>
						<li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">High Court</a></li>
						<li role="presentation"><a href="#sandals" role="tab" id="sandals-tab" data-toggle="tab" aria-controls="sandals">Panchayat</a></li>
						<li role="presentation"><a href="#jewellery" role="tab" id="jewellery-tab" data-toggle="tab" aria-controls="jewellery">Talati</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/3.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>G.P.S.C</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹600</i></p>
										<p><a class="item_add" value="bk0001" href="cart.php?data=bk0001">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/4.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>G.P.S.C</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹350</i></p>
										<p><a class="item_add" href="cart.php?data=bk0027">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/5.jpg" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>G.P.S.C</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹300</i></p>
										<p><a class="item_add" href="cart.php?data=bk0038">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="skirts" aria-labelledby="skirts-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/22.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Railway</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹250</i></p>
										<p><a class="item_add" href="cart.php?data=bk0012">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/23.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Railway</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹250</i></p>
										<p><a class="item_add" href="cart.php?data=bk0026">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/24.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Railway</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹220</i></p>
										<p><a class="item_add" href="cart.php?data=bk0035">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/11.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>High Court</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹240</i></p>
										<p><a class="item_add" href="cart.php?data=bk0038">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/12.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>High Court</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹170</i></p>
										<p><a class="item_add" href="cart.php?data=bk0022">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/13.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>High Court</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹240</i></p>
										<p><a class="item_add" href="cart.php?data=bk0039">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="sandals" aria-labelledby="sandals-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										
										<img src="images/15.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Panchayat</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹240</i></p>
										<p><a class="item_add" href="cart.php?data=bk0017">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/16.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Panchayat</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹240</i></p>
										<p><a class="item_add" href="cart.php?data=bk0008">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/17.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Panchayat</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹350</i></p>
										<p><a class="item_add" href="cart.php?data=bk0034">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="jewellery" aria-labelledby="jewellery-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/31.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Nurse</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹240</i></p>
										<p><a class="item_add" href="cart.php?data=bk0016">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/32.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Nurse</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹350</i></p>
										<p><a class="item_add" href="cart.php?data=bk0031">Add to cart</a></p>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="images/33.jpg" alt=" " class="img-responsive" />
										
										<div class="w3_hs_bottom">
											<ul>
												<li>
													
												</li>
											</ul>
										</div>
									</div>
									<h5>Nurse</h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">₹250</i></p>
										<p><a class="item_add" href="cart.php?data=bk0042">Add to cart</a></p>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->



<!-- special-deals -->
<!--	<div class="special-deals">
		<div class="container">
			<h2>Special Deals</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="images/26.jpg" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off/-</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/1.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Laura</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/2.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Michael</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/3.png" alt=" " class="img-responsive" />
										<p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
											velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
											eum fugiat quo voluptas nulla pariatur</p>
										<h4>Rosy</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
						<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="images/25.jpg" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Women's <span>Special</span></h4>
						<h5>save up <span>to</span> 30%</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>!-->
<!-- //special-deals -->
<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Books</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">G.P.S.C</a></h5>
						<div class="simpleCart_shelfItem">
							<p><i class="item_price">₹600</i></p>
							<p><a class="item_add" href="cart.php?data=bk0001">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/8.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Railway</a></h5>
						<div class="simpleCart_shelfItem">
							<p><i class="item_price">₹250</i></p>
							<p><a class="item_add" href="cart.php?data=bk0012">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/14.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">High Court</a></h5>
						<div class="simpleCart_shelfItem">
							<p><i class="item_price">₹220</i></p>
							<p><a class="item_add" href="cart.php?data=bk0036">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/17.jpg" alt=" " class="img-responsive" />
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Panchayat</a></h5>
						<div class="simpleCart_shelfItem">
							<p><i class="item_price">₹350</i></p>
							<p><a class="item_add" href="cart.php?data=bk0034">Add to cart</a></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //new-products -->
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Exams</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/4.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/5.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/6.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/7.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/46.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
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
<!-- //top-brands -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p></p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="connect_newsletter.php" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
					<input type="submit" value="" />
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
				<p>&copy; 2020 Bharat Publications. All rights reserved | Design by <a href="18dce085@charusat.edu.in">Purvi Patel</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>