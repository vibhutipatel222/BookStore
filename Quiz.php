<?php
session_start();
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Online Book Shop | Quiz :: w3layouts</title>
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
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
					<p style="margin-left: 2em; color: green;font-size: 1em">CART&nbsp;<img src="images/bag.png" alt="" /></p>
					<div class="total">₹
					 <?php 
					 	include 'carttotal.php';
					  ?>
					[ 
					<?php 
					 	include 'cartno.php';
					  ?>
				items ]</div>
					
				</a><br>
				<div class="clearfix"> </div>
			</div>	<?php  
				$user=$_SESSION['loginuser'];
				if($user=='unknown'){
					echo '<a style="position: absolute;margin-left: 10em;margin-top: 2em;padding:0.2em 0.7em;float: right;border:0.2em solid #ff9b05;color: black;" href="index.php"> LOG IN </a>';
				}else{
					echo '<a style="position: absolute;margin-left: 10em;margin-top: 1em;padding:0.2em;float: right;border:0.2em solid #ff9b05;color: black;" href="logout.php">LOG OUT</a><br><a style="position: absolute;margin-left: 10em;margin-top: 2em;padding:0.2em;float: right;color: #ff9b05;font-size:0.9em"> '.$user.' </a>';
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
							<a href="#" class="dropdown-toggle act" data-toggle="dropdown">Products <b class="caret"></b></a>
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
						<li><a href="Quiz.php">Quiz</a></li>
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
		<h2>Quiz</h2>
	</div>
</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index2.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Quiz</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->



   <div id="dvv">
    <script type="text/javascript" async="" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML"></script> <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      tex2jax: {inlineMath: [['$','$'], ['\(','\)']]}
    });
    </script>
    <div id="quiz"> </div>
    <button id="submit">Submit Quiz</button>
    <div id="results" style="text-align: center; font-size: 6em;color: white;margin:0.2em 0.5em 0.5em 0;font-weight: 600;"> </div>
    <script type="text/javascript"> 
    (function() {
      function buildQuiz() {
        // we'll need a place to store the HTML output
        const output = [];
        // for each question...
        myQuestions.forEach((currentQuestion, questionNumber) => {
          // we'll want to store the list of answer choices
          const answers = [];
          // and for each available answer...
          for (letter in currentQuestion.answers) {
            // ...add an HTML radio button
            answers.push(
              `<label>
                <input type="radio" name="question${questionNumber}" value="${letter}">
                ${letter} :
                ${currentQuestion.answers[letter]}
              </label>`
            );
          }
          // add this question and its answers to the output
          output.push(
            `<div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>`
          );
        });
        // finally combine our output list into one string of HTML and put it on the page
        quizContainer.innerHTML = output.join("");
      }
      function showResults() {
        // gather answer containers from our quiz
        const answerContainers = quizContainer.querySelectorAll(".answers");
        // keep track of user's answers
        let numCorrect = 0;
        // for each question...
        myQuestions.forEach((currentQuestion, questionNumber) => {
          // find selected answer
          const answerContainer = answerContainers[questionNumber];
          const selector = `input[name=question${questionNumber}]:checked`;
          const userAnswer = (answerContainer.querySelector(selector) || {}).value;
          // if answer is correct
          if (userAnswer === currentQuestion.correctAnswer) {
            // add to the number of correct answers
            numCorrect++;
            // color the answers green
            answerContainers[questionNumber].style.color = "lightgreen";
          } else {
            // if answer is wrong or blank
            // color the answers red
            answerContainers[questionNumber].style.color = "red";
          }
        });
        // show number of correct answers out of total
        resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
        resultsContainer.style.backgroundColor="#8EBF29";
      }
      const quizContainer = document.getElementById("quiz");
      const resultsContainer = document.getElementById("results");
      const submitButton = document.getElementById("submit");
      const myQuestions = [
    <!-- QUESTIONS & OPTIONS -->
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #1 &nbsp;&nbsp;&nbsp;[NURSE]&nbsp;&nbsp;[EASY]</strong></h6>What is the term for a device used to take the place of a missing body part?",
          answers: {
            A: "Pronation",
            B: "Abduction",
            C: "Externalrotation",
            D: "Prosthesis"
          },
          correctAnswer: "D"
        },
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #2 &nbsp;&nbsp;&nbsp;[Panchayat]&nbsp;&nbsp;[MEDIUM]</strong></h6>How many years of work experience in High Court is required to become Justice of the Supreme Court ? ",
          answers: {
            A: "8 years",
            B: "10 years",
            C: "12 years",
            D: "15 years"
          },
          correctAnswer: "B"
        },
    <!-- ONE UNIT QUESTION -->
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #3 &nbsp;&nbsp;&nbsp;[SSC]&nbsp;&nbsp;[MEDIUM]</strong></h6>A can complete a piece of work in 20 days and B can complete 20% of the work in 6 days. If they work together in how many days can they finish 50% of the work, if they work together?",
          answers: {
            A: "6",
            B: "8",
            C: "9",
            D: "12"
          },
          correctAnswer: "A"
        },
    <!-- ONE UNIT QUESTION ENDS -->
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #4 &nbsp;&nbsp;&nbsp;[TALATI]&nbsp;&nbsp;[EASY]</strong></h6>Who is known as the india napoleon?",
          answers: {
            A: "Samudragupt",
            B: "Ashoka ",
            C: "Vikramaditya",
            D: "Chandragupt maurya"
          },
          correctAnswer: "A"
        },
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #5 &nbsp;&nbsp;&nbsp;[RAILWAY]&nbsp;&nbsp;[MEDIUM]</strong></h6>A train crowed a 110 m long platform in 13.5 teconds and a 205 m long platform in 18.25 wood:. What was the tined of the train?",
          answers: {
            A: "66 km/h",
            B: "69 km/h",
            C: "72 km/h",
            D: "75 km/h"
          },
          correctAnswer: "C"
        },
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #6 &nbsp;&nbsp;&nbsp;[POST]&nbsp;&nbsp;[EASY]</strong></h6>Which of the following newspapers was Jawaharlal Nehru associated?",
          answers: {
            A: "The Leader",
            B: "Amrita Bazar Patrika",
            C: "The Tribune",
            D: "National Herald"
          },
          correctAnswer: "D"
        },
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #7 &nbsp;&nbsp;&nbsp;[SSC]&nbsp;&nbsp;[MEDIUM]</strong></h6>A certain sum was invested on simple interest. The amount to which it had grown in five years was 5/4 times the amount to which it had grown in three years. The percentage rate of interest was:",
          answers: {
            A: "15",
            B: "25",
            C: "20",
            D: "10"
          },
          correctAnswer: "C"
        },
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #8 &nbsp;&nbsp;&nbsp;[High Court]&nbsp;&nbsp;[MEDIUM]</strong></h6>Who appoints the Chief Justice and other judges of the High Courts in India?",
          answers: {
            A: "President",
            B: "Chief Minister",
            C: "Prime Minister",
            D: "Governor"
          },
          correctAnswer: "D"
        },


     {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #9 &nbsp;&nbsp;&nbsp;[GPSC]&nbsp;&nbsp;[EASY]</strong></h6>The smallest number of 6 digits which is exactly divisible by 10, 12 & 25 is:",
          answers: {
            A: "100100",
            B: "100200",
            C: "100300",
            D: "120000"
          },
          correctAnswer: "B"
        },
    {
          question: "<hr><h6 style=\"color:blue;font-size:1.5em\"><strong>QUESTION #10 &nbsp;&nbsp;&nbsp;[GSRTC]&nbsp;&nbsp;[EASY]</strong></h6>When did the motor vehicle act come into force?",
          answers: {
            A: "1 July 1989",
            B: "1 July 1988",
            C: "1 January 1988",
            D: "1 March 1989"
          },
          correctAnswer: "A"
        }
    ];
    <!-- QUESTIONS & OPTIONS END -->
      // display quiz right away
      buildQuiz();
      // on submit, show results
      submitButton.addEventListener("click", showResults);
    })();
	</script>
	</div>
<!-- onload function is evoke when page is load --><!--countdown function is called when page is loaded -->

<style>
body{
    font-size: 18px;
    font-family: sans-serif;
    color: #333;
}
#dvv{
	margin-left: 50px;
}
.question{
    font-weight: 400;
}
.answers {
  margin-bottom: 50px;
}
.answers label{
  display: block;
}
#submit{
    font-family: sans-serif;
    font-size: 20px;
    background-color: #279;
    color: #fff;
    border: 0px;
    border-radius: 3px;
    padding: 5px;
    cursor: pointer;
    margin-bottom: 20px;
}
#submit:hover{
    background-color: #38a;
}
</style>
</body>
</head>
</html>


<!-- //dresses -->
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