<?php

include 'conn.php';
session_start();

//echo $_SESSION['name'];
if(!$_SESSION['name'])
{
header("location:login.php");
}


$dataPoints = array(
	array("label"=> "Food + Drinks", "y"=> 590),
	array("label"=> "Activities and Entertainments", "y"=> 261),
	array("label"=> "Health and Fitness", "y"=> 158),
	array("label"=> "Shopping & Misc", "y"=> 72),
	array("label"=> "Transportation", "y"=> 191),
	array("label"=> "Rent", "y"=> 573),
	array("label"=> "Travel Insurance", "y"=> 126)
);

?>
<?php

$dataPoints1 = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
	array("y" => 5, "label" => "Wednesday"),
	array("y" => 10, "label" => "Thursday"),
	array("y" => 0, "label" => "Friday"),
	array("y" => 20, "label" => "Saturday")
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
	<link rel="shortcut icon" href="images/logo.ico">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
  <script>
    /*window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
	   animationEnabled: true,
	    exportEnabled: true,
	     title:{
		     text: "Average Expense Per Day  in Thai Baht"
	      },
	       subtitles: [{
		       text: "Currency Used: Thai Baht (฿)"
	        }],
	         data: [{
		         type: "pie",
		           showInLegend: "true",
		             legendText: "{label}",
		               indexLabelFontSize: 16,
		                 indexLabel: "{label} - #percent%",
		                   yValueFormatString: "฿#,##0",
		                     dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
           var chart1 = new CanvasJS.Chart("chartContainer1", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
}*/
  </script>
	<style>
	/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

	</style>

</head>
<body>
   <header class="site-header">


    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="site-branding d-flex align-items-center">
                        <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                            <li class="current-menu-item"><a href="index.php">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="all_activity.php">Activity</a></li>
                            <li><a href="signup.php">signup</a></li>
                            
                        </ul>
                    </nav><!-- .site-navigation -->

                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->
</header><!-- .site-header -->

    <!--<div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap" class="mySlides">
                <img src="images/prod.jpg" alt="" class="img-responsive">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <!--<header class="entry-header">
                                    <h1>Donate</h1>
                                    <h4>4 a better world</h4>
                                </header><!-- .entry-header -->

                               <!-- <div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content --

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                   <!-- <a href="#" class="btn gradient-bg mr-2">Donate Now</a>--
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer --
                            </div><!-- .col --
                        </div><!-- .row --
                    </div><!-- .container --
                </div><!-- .hero-content-overlay --
            </div><!-- .hero-content-wrap --

            <div class="swiper-slide hero-content-wrap" class="mySlides">
                <img src="images/work.jpg" alt="" class="img-responsive">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <!--<h1>Donate</h1>
                                    <h4>4 a better world</h4>
                                </header><!-- .entry-header -->

                                <!--<div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content --

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <!--<a href="#" class="btn gradient-bg mr-2">Donate Now</a>--
                                    <a href="#" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer --
                            </div><!-- .col --
                        </div><!-- .row --
                    </div><!-- .container --
                </div><!-- .hero-content-overlay --
            </div><!-- .hero-content-wrap --

            <div class="swiper-slide hero-content-wrap" class="mySlides">
                <img src="images/hero.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                               <!-- <header class="entry-header">
                                    <h1>Donate</h1>
                                    <h4>4 a better world</h4>
                                </header><!-- .entry-header --

                                <!--<div class="entry-content mt-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                                </div><!-- .entry-content --

                                <!--<footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                   <!-- <a href="#" class="btn gradient-bg mr-2">Donate Now</a>-->
                                    <!--<a href="#" class="btn orange-border">Read More</a>->
                                </footer><!-- .entry-footer --s
                            </div><!-- .col --
                        </div><!-- .row --
                    </div><!-- .container --
                </div><!-- .hero-content-overlay --
            </div><!-- .hero-content-wrap --
        </div><!-- .swiper-wrapper --

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container --
        </div><!-- .pagination-wrap --

        <!-- Add Arrows --
        <div class="swiper-button-next flex justify-content-center align-items-center color-blue" style="color:#fe45e5">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->
	<div class="slideshow-container">
		<div class="mySlides fade">
  		<div class="numbertext">1 / 3</div>
  		<img src="images/prod.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
  		<div class="numbertext">2 / 3</div>
  		<img src="images/hero.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
  		<div class="numbertext">3 / 3</div>
  		<img src="images/work.jpg" style="width:100%">
		</div>

	</div>

	<div style="text-align:center">
  	<span class="dot"></span>
  	<span class="dot"></span>
  	<span class="dot"></span>
	</div>

	<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    <div class="home-page-icon-boxes">
        <div class="container" >
            <div class="row" >
                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <a href="login.php"><div class="icon-box" style="height:200px;">
                        <figure class="d-flex justify-content-center">
                            <img src="images/bangalore1.jpg" width="80px" height="80px">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Banglore</h3>
                        </header>

                        <div class="entry-content">

                        </div>
                        </div></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <a href="login.php"><div class="icon-box" style="height:200px;">
                        <figure class="d-flex justify-content-center">
                            <img src="images/chennai.gif" width="80px" height="80px">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Chennai</h3>
                        </header>

                        <div class="entry-content">

                        </div>
                        </div></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0" class="responsive">
                   <a href="delhi.php"> <div class="icon-box" style="height:200px;">
                        <figure class="d-flex justify-content-center">
                          <img src="images/delhi.jpg" width="80px" height="80px">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Delhi</h3>
                        </header>

                        <div class="entry-content">

                        </div>
                    </div></a>
                </div>
				<div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <a href="login.php">
                        <div class="icon-box" style="height:200px;">
                            <figure class="d-flex justify-content-center">
                              <img src="images/Hyderabad.jpg" width="80px" height="80px">
                            </figure>

                            <header class="entry-header" >
                                <h3 class="entry-title" >Hyderabad</h3>
                            </header>

                            <div class="entry-content">

                            </div>
                        </div>
                    </a>
                </div>
            </div><!-- .row -->
			<div class="row" style="padding-top:20px;">
                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <a href="login.php"><div class="icon-box " style="height:200px;">
                        <figure class="d-flex justify-content-center">
                          <img src="images/kolkata.jpg" width="80px" height="80px">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Kolkata</h3>
                        </header>

                        <div class="entry-content">

                        </div>
                        </div></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <a href="login.php"><div class="icon-box" style="height:200px;">
                        <figure class="d-flex justify-content-center">
                          <img src="images/mumbai.jpg" width="80px" height="80px">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Mumbai</h3>
                        </header>

                        <div class="entry-content">

                        </div>
                        </div></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <a href="login.php"><div class="icon-box" style="height:200px;">
                        <figure class="d-flex justify-content-center">
                          <img src="images/patna.jpg" width="80px" height="80px">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Patna</h3>
                        </header>

                        <div class="entry-content">

                        </div>
                        </div></a>
                </div>
				<div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <a href="login.php"><div class="icon-box" style="height:200px;">
                        <figure class="d-flex justify-content-center">
                          <img src="images/rishikesh.jpg" width="80px" height="80px">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Rishikesh</h3>
                        </header>

                        <div class="entry-content">

                        </div>
                        </div></a>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Welcome to Goonj</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <p>Goonj uses the under-utilized and excess urban household material as a tool for rural development across 23 states in the country. It thus aims to bring an equitable relationship of strength, sustenance and dignity between the cities and villages.</p>
                        </div><!-- .entry-content --

                        <div class="entry-footer mt-5">
                            <a href="#" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-3 mt-4 order-1 order-lg-2">
                    <img src="images/welcome.jpg" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

   <!-- <div class="home-page-events">
        <div class="container">
            <div class="row" >
                <div class="col-12 col-lg-6" >
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title">yearly report</h2>

                        </div><!-- .section-heading -->
				<!--		<div style="height:300px;">
                            <div id="chartContainer" style="height: 320px; width: 80%;"></div>
                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
						</div>


                        <!--<div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/event-1.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date ->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links ->
                                </header><!-- .entry-header ->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content ->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer->
                            </div><!-- .event-content-wrap ->
                        </div><!-- .event-wrap ->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/event-2.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date ->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links ->
                                </header><!-- .entry-header ->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content ->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer ->
                            </div><!-- .event-content-wrap ->
                        </div><!-- .event-wrap ->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/event-3.jpg" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date ->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links ->
                                </header><!-- .entry-header ->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content ->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer ->
                            </div><!-- .event-content-wrap ->
                        </div><!-- .event-wrap -->
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->


 <!-- <div class="col-12 col-lg-6" >
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Featured Cause</h2>
                        </div><!-- .section-heading ->
						<div style="height:300px;">
                            <div id="chartContainer1" style="height: 320px; width: 80%;"></div>
                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
						</div>


                       <!-- <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="images/featured-causes.jpg" alt="">
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date ->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links ->
                                </header><!-- .entry-header ->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div><!-- .entry-content ->

                                <div class="entry-footer mt-5">
                                    <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                </div><!-- .entry-footer ->
                            </div><!-- .cause-content-wrap ->

                            <div class="fund-raised w-100">
                                <div class="featured-fund-raised-bar barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap ->

                                    <span class="fill" data-percentage="83"></span>
                                </div><!-- .fund-raised-bar ->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total ->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal ->
                                </div><!-- .fund-raised-details->
                            </div><!-- .fund-raised ->
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

    <!--<div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="coL-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Our Activities</h2>
                    </div><!-- .section-heading --
                </div><!-- .col --
            </div><!-- .row --

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/cause-1.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                        </div><!-- .figure-overlay --
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                        </header><!-- .entry-header --

                                        <div class="entry-content">
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                        </div><!-- .entry-content --

                                        <div class="fund-raised w-100">
                                            <div class="fund-raised-bar-1 barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div><!-- .tipWrap --

                                                <span class="fill" data-percentage="83"></span>
                                            </div><!-- .fund-raised-bar --

                                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="fund-raised-total mt-4">
                                                    Raised: $56 880
                                                </div><!-- .fund-raised-total --

                                                <div class="fund-raised-goal mt-4">
                                                    Goal: $70 000
                                                </div><!-- .fund-raised-goal --
                                            </div><!-- .fund-raised-details --
                                        </div><!-- .fund-raised --
                                    </div><!-- .cause-content-wrap --
                                </div><!-- .cause-wrap --
                            </div><!-- .swiper-slide --

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/cause-2.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                        </div><!-- .figure-overlay --
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">Education for all</a></h3>
                                        </header><!-- .entry-header --

                                        <div class="entry-content">
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                        </div><!-- .entry-content --

                                        <div class="fund-raised w-100">
                                            <div class="fund-raised-bar-2 barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div><!-- .tipWrap --

                                                <span class="fill" data-percentage="70"></span>
                                            </div><!-- .fund-raised-bar --

                                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="fund-raised-total mt-4">
                                                    Raised: $56 880
                                                </div><!-- .fund-raised-total --

                                                <div class="fund-raised-goal mt-4">
                                                    Goal: $70 000
                                                </div><!-- .fund-raised-goal --
                                            </div><!-- .fund-raised-details --
                                        </div><!-- .fund-raised --
                                    </div><!-- .cause-content-wrap --
                                </div><!-- .cause-wrap --
                            </div><!-- .swiper-slide --

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/cause-3.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                        </div><!-- .figure-overlay --
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                        </header><!-- .entry-header --

                                        <div class="entry-content">
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                        </div><!-- .entry-content --

                                        <div class="fund-raised w-100">
                                            <div class="fund-raised-bar-3 barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div><!-- .tipWrap --

                                                <span class="fill" data-percentage="83"></span>
                                            </div><!-- .fund-raised-bar --

                                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="fund-raised-total mt-4">
                                                    Raised: $56 880
                                                </div><!-- .fund-raised-total --

                                                <div class="fund-raised-goal mt-4">
                                                    Goal: $70 000
                                                </div><!-- .fund-raised-goal --
                                            </div><!-- .fund-raised-details --
                                        </div><!-- .fund-raised --
                                    </div><!-- .cause-content-wrap --
                                </div><!-- .cause-wrap --
                            </div><!-- .swiper-slide --

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/cause-1.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                        </div><!-- .figure-overlay --
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                        </header><!-- .entry-header --

                                        <div class="entry-content">
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                        </div><!-- .entry-content --

                                        <div class="fund-raised w-100">
                                            <div class="fund-raised-bar-4 barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div><!-- .tipWrap --

                                                <span class="fill" data-percentage="83"></span>
                                            </div><!-- .fund-raised-bar --

                                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="fund-raised-total mt-4">
                                                    Raised: $56 880
                                                </div><!-- .fund-raised-total --

                                                <div class="fund-raised-goal mt-4">
                                                    Goal: $70 000
                                                </div><!-- .fund-raised-goal --
                                            </div><!-- .fund-raised-details --
                                        </div><!-- .fund-raised --
                                    </div><!-- .cause-content-wrap --
                                </div><!-- .cause-wrap --
                            </div><!-- .swiper-slide --

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/cause-2.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                        </div><!-- .figure-overlay --
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">Education for all</a></h3>
                                        </header><!-- .entry-header --

                                        <div class="entry-content">
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                        </div><!-- .entry-content --

                                        <div class="fund-raised w-100">
                                            <div class="fund-raised-bar-5 barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>

                                                  </div><!-- .tipWrap --
                                                <span class="fill" data-percentage="70"></span>
                                            </div><!-- .fund-raised-bar --

                                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="fund-raised-total mt-4">
                                                    Raised: $56 880
                                                </div><!-- .fund-raised-total --

                                                <div class="fund-raised-goal mt-4">
                                                    Goal: $70 000
                                                </div><!-- .fund-raised-goal --
                                            </div><!-- .fund-raised-details --
                                        </div><!-- .fund-raised --
                                    </div><!-- .cause-content-wrap --
                                </div><!-- .cause-wrap --
                            </div><!-- .swiper-slide --

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/cause-3.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                                        </div><!-- .figure-overlay --
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                                        </header><!-- .entry-header --

                                        <div class="entry-content">
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                        </div><!-- .entry-content --

                                        <div class="fund-raised w-100">
                                            <div class="fund-raised-bar-6 barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>

                                                  </div><!-- .tipWrap --
                                                <span class="fill" data-percentage="83"></span>
                                            </div><!-- .fund-raised-bar --

                                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="fund-raised-total mt-4">
                                                    Raised: $56 880
                                                </div><!-- .fund-raised-total --

                                                <div class="fund-raised-goal mt-4">
                                                    Goal: $70 000
                                                </div><!-- .fund-raised-goal --
                                            </div><!-- .fund-raised-details --
                                        </div><!-- .fund-raised --
                                    </div><!-- .cause-content-wrap --
                                </div><!-- .cause-wrap --
                            </div><!-- .swiper-slide --
                        </div><!-- .swiper-wrapper --

                    </div><!-- .swiper-container --

                    <!-- Add Arrows --
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col --
            </div><!-- .row --
        </div><!-- .container --
    </div><!-- .our-causes -->

   <!-- <div class="home-page-limestone">
        <div class="container">
            <div class="row align-items-end">
                <div class="coL-12 col-lg-6">
                    <div class="section-heading">
                        <h2 class="entry-title">We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</h2>

                        <p class="mt-5">Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                    </div><!-- .section-heading ->
                </div><!-- .col ->

                <div class="col-12 col-lg-6">
                    <div class="milestones d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/teamwork.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="120" data-speed="2000"></div>
                                    <div class="counter-k">K</div>
                                </div>

                                <h3 class="entry-title">Children helped</h3><!-- entry-title ->
                            </div><!-- counter-box ->
                        </div><!-- .col ->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/donation.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="79" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Water wells</h3><!-- entry-title ->
                            </div><!-- counter-box ->
                        </div><!-- .col ->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/dove.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="253" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Volunteeres</h3><!-- entry-title ->
                            </div><!-- counter-box ->
                        </div><!-- .col ->
                    </div><!-- .milestones ->
                </div><!-- .col ->
            </div><!-- .row ->
        </div><!-- .container ->
    </div><!-- .our-causes -->

   <footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="foot-about">
                        <h2><a class="foot-logo" href="#"><img class="header-logo" src="images/Glogo.png" alt=""></a></h2>

                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Mauris temp us vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolo.</p>

                        <ul class="d-flex flex-wrap align-items-center">
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div><!-- .foot-about -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0" style="padding-left:90px;">
                    <h2>Useful Links</h2>

                    <ul>
                        <li><a href="#">Privacy Polticy</a></li>
                        <li><a href="#">Become  a Volunteer</a></li>
                        <li><a href="#">Donate</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Causes</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div><!-- .col -->

                <div class="col-12 col-md-7 col-lg-3 mt-5 mt-md-0">
                    <div class="foot-contact">
                        <h2>Contact</h2>

                        <ul>
                            <li><i class="fa fa-phone"></i><span>Call Us: 011-26972351, 41401216</span></li>
                            <li><i class="fa fa-envelope"></i><span>mail@goonj.org</span></li>
                            <li><i class="fa fa-map-marker"></i><span>J-93, Sarita Vihar, New Delhi-110076</span></li>
                        </ul>
                    </div><!-- .foot-contact -->

                    <div class="subscribe-form">
                        <form class="d-flex flex-wrap align-items-center">
                            <input type="email" placeholder="Your email">
                            <input type="submit" value="send">
                        </form><!-- .flex -->
                    </div><!-- .search-widget -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-widgets -->

  </footer><!-- .site-footer -->


    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
