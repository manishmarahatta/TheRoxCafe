<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta name="description" content="Rox Cafe ">
	<meta name="author"      content="Gaurab Basnet(M)">
	<meta name="format-detection" content="telephone=no">

	<title>Rox Cafe </title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700italic,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/btsp-source/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/media.css">
	<link rel="stylesheet" type="text/css" href="assets/tooltip/css/tooltip-flip.css" />
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/menu/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/menu/css/default.css" />
	<link rel="stylesheet" type="text/css" href="assets/menu/css/dropdown.css" />


	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

 </head>
 <body>
<!-- head section -->
	<section>
			<div class="container" id="bgimg">
				<div class="row">
					<div class="col-md-4" id="text1">
						<p ><small>10770 Columbia Pike </small><br>SilverSpring MD 20901 </p>
					</div>
					<div class="col-md-4" id="logo">
						<a href="index.html"><img src="assets/image/logo.png"></a>
					</div>
					<div class="col-md-4" id="search">
						<div class="row">
							<ul>
								<li class="right">FAQ</li>
								<li  class="right">Direction</li>
								<li>Help</li>
							</ul>
						</div>
						 <form class="navbar-form" role="search">
					        <div class="input-group">
					            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term" >
					            <div class="input-group-btn">
					                <button class="btn btn-transparent" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					            </div>
					        </div>
		       			 </form>
					</div>
				</div>
			</div>
	</section>
	<!-- body section -->

<div class="container" style="background: #e0b8a2;padding: 0px 40px;min-height: 800px;">
<section>
	     <div class="row">
	              <div class="col-md-12 padding-zero">
	        				 <nav class="navbar navbar-default nav-all">
									    <!-- Brand and toggle get grouped for better mobile display -->
									    <div class="navbar-header">
									      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									        <span class="sr-only">Toggle navigation</span>
									        <span class="icon-bar"></span>
									        <span class="icon-bar"></span>
									        <span class="icon-bar"></span>
									      </button>

									    </div>

									    <!-- Collect the nav links, forms, and other content for toggling -->
									    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										      <ul class="nav navbar-nav">
										        <li><a href="index.php">HOME</a></li>
										        <li><a href="about.php">ABOUT US</a></li>
										        <li><a href="menu.php">MENU</a></li>
										        <li><a href="catering.php">ROX CATERING</a></li>
										        <li class="active all-active"><a href="special.php">SPECIALS</a></li>
										        <li><a href="contact.php">CONTACT US</a></li>

									               </ul>
										</div><!-- /.navbar-collapse -->
			                                 </nav>
			           </div>
		</div>
		<!-- Menu -->
		<section id="special-menu">
			<div class="container-fluid special-menu-container">
				<div class="row">
				<?php
				date_default_timezone_set('UTC');
				$format= 'l';
					$dateInfo = date ( $format ,time());
					switch ($dateInfo) {
				      case "Monday":
				      case "Sunday":
				      case "Wednesday":
				      case "Thursday":
				      case "Friday":

				         break;
				      case "Monday":
				         ?>
				         <div class="col-xs-12 col-sm-12 col-md-12 special-menu-div">
						<img src="assets/image/heading-back.png">
						<h2>Today's Special</h2>

						<div class="special-menu-item">
							<h3 class="special-menu-title">Stuffed French Toast</h3>
							<description>
								A loaf of bread, filled with thin slices of ham, Swiss cheese, and our own pineapple and cherry jam, dipped into egg batter and grilled golden
							</description>
							<price style="display: block; font-size: 24px;" >$7.50</price>
						</div>
						<div class="special-menu-item">
							<h3 class="special-menu-title">Huevos Rancheros</h3>
							<description>
								A crisp or soft tortilla topped with black bean chili, Mexican sauce, two eggs and bacon strips.

							</description>
							<price style="display: block; font-size: 24px;" >$7.25</price>
						</div>
						<div class="special-menu-item">
							<h3 class="special-menu-title">Stuffed French Toast</h3>
							<description>
								A loaf of bread, filled with thin slices of ham, Swiss cheese, and our own pineapple and cherry jam, dipped into egg batter and grilled golden
							</description>
							<price style="display: block; font-size: 24px;" >$7.50</price>
						</div>
						<div class="special-menu-item">
							<h3 class="special-menu-title">Stuffed French Toast</h3>
							<description>
								A loaf of bread, filled with thin slices of ham, Swiss cheese, and our own pineapple and cherry jam, dipped into egg batter and grilled golden
							</description>
							<price style="display: block; font-size: 24px;" >$7.50</price>
						</div>
						<div class="special-menu-item">
							<h3 class="special-menu-title">Stuffed French Toast</h3>
							<description>
								A loaf of bread, filled with thin slices of ham, Swiss cheese, and our own pineapple and cherry jam, dipped into egg batter and grilled golden
							</description>
							<price style="display: block; font-size: 24px;" >$7.50</price>
						</div>
					</div>
				         <?php
				         break;
				      case "Tuesday":
				        ?>
				         <div class="col-xs-12 col-sm-12 col-md-12 special-menu-div">
						<img src="assets/image/heading-back.png">
						<h2>Today's Special</h2>

						<div class="special-menu-item">
							<h3 class="special-menu-title">Stuffed French Toast Sunday</h3>
							<description>
								A loaf of bread, filled with thin slices of ham, Swiss cheese, and our own pineapple and cherry jam, dipped into egg batter and grilled golden
							</description>
							<price style="display: block; font-size: 24px;" >$7.50</price>
						</div>
						<div class="special-menu-item">
							<h3 class="special-menu-title">Huevos Rancheros Sunday</h3>
							<description>
								A crisp or soft tortilla topped with black bean chili, Mexican sauce, two eggs and bacon strips.

							</description>
							<price style="display: block; font-size: 24px;" >$7.25</price>
						</div>
						<div class="special-menu-item">
							<h3 class="special-menu-title">Stuffed French Toast</h3>
							<description>
								A loaf of bread, filled with thin slices of ham, Swiss cheese, and our own pineapple and cherry jam, dipped into egg batter and grilled golden
							</description>
							<price style="display: block; font-size: 24px;" >$7.50</price>
						</div>
						<div class="special-menu-item">
							<h3 class="special-menu-title">Stuffed French Toast</h3>
							<description>
								A loaf of bread, filled with thin slices of ham, Swiss cheese, and our own pineapple and cherry jam, dipped into egg batter and grilled golden
							</description>
							<price style="display: block; font-size: 24px;" >$7.50</price>
						</div>
						<div class="special-menu-item">
							<h3 class="special-menu-title">Stuffed French Toast</h3>
							<description>
								A loaf of bread, filled with thin slices of ham, Swiss cheese, and our own pineapple and cherry jam, dipped into egg batter and grilled golden
							</description>
							<price style="display: block; font-size: 24px;" >$7.50</price>
						</div>
					</div>
				         <?php
				         break;
				      default:

				   	}

				 ?>

				</div>
			</div>
		</section>
</section>

<!--social-box -->
 <section id="social">
 		<div class="row" id="social-box">
 			<div class="col-xs-12 col-sm-12 col-md-12 padding-zero">
 				<div class="line-one">
 				</div>
 				<div class="social-middle">
	 				   <ul class="list-inline sociallink">
	 				   		<li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
	 				   		<li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
	 				   		<li><a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
	 				   		<li><a href="http://mail.google.com"><i class="fa fa-envelope-o"></i></a></li>
	 				   </ul>
 				</div>
 				<div class="line-two">
 				</div>
 			</div>
 		</div>
 </section>
 <!--social-box -->

<!-- footer new -->
	<section id="footer-new">
		<div class="row" style="background: #9c6f56;">
				<div class="col-xs-12 col-sm-12 col-md-12 "style="background: #9c6f56;" >
					<ul class="list-inline menu-footer">
 						<li><a href="#">Home</a></li>
					        <li><a href="#">About Us</a></li>
					        <li><a href="#">Menu</a></li>
					        <li><a href="#">Lunch</a></li>
					        <li><a href="#">Specials</a></li>
					        <li><a href="#">Catering</a></li>
					        <li><a href="#">Contact Us</a></li>
				</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="footer-copyright">Copyright © 2016 Rox Cafe All Rights Reserved.</p>
				</div>
			</div>
	</section>

<!-- footer new -->
</div>
 </body>
 </html>
 <!-- javascript link -->
 <script src="assets/js/jquery.js"></script>
 <script src="assets/js/wow.min.js"></script>
 <script src="assets/btsp-source/dist/js/bootstrap.min.js"></script>
 <script src="assets/js/custom.js"></script>
  <script type="text/javascript" src="assets/menu/js/menu.js"></script>
  <script src="assets/js/dropdown.js"></script>
		<script type="text/javascript">
			$(function() {

				Menu.init();

			});
		</script>
    <script>
   $(document).ready(function(){
       $('.carousel').carousel({
       	interval: 3000
       });
   });
 </script>

              <script>
              new WOW().init();
             </script>
             <script type="text/javascript">

               	  $(".btn-animate").addClass("animated fadeInLeft");


             </script>
<script type="text/javascript">
	$('li.dropdown > a').click(function() {
	$(this).parent().siblings().find('ul').slideUp(300);
	$(this).next('ul').stop(true, false, true).slideToggle(300);
	return false;
});
</script>
