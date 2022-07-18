<?php
session_start();
if(!(isset($_SESSION['admin'])))
{
header("location:login.php");
}
?>
<style>
.top-nav ul li {
    display: inline-block;
    float: left;
    width: 10.2% !important;
}

.left{
margin-left:100px;
height:auto;
width:40%;

float:left;
}
.right{

float:right;
height:20%;
width:30%;
}
.normal{
height: 300px;
width: 92%;
position: absolute;
margin-top: -380px;
margin: -380px auto;
left: 0px;
right: 0px;
}

</style>
<!DOCTYPE HTML>
<html>
<head>
<title>Himachal Toursim</title>
<script src="jquery.js"></script>
<script src="slider.js"></script>
<link href="css/slider.css" type="text/css" rel="stylesheet">
<script>
	$(document).ready(function(){
		$(".slide").cycle({
			fx:"shuffle",
			next:".next",
			prev:".prev"
			
		});
	});
		
</script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Treks Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--script -->
<script src="js/menu_jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style7.css" />
</head>
<body>
<!--banner start here-->
<div class="banner1">


  <div class="header">
  <div class="container">
  
		 <div class="header-main">
         
				
				<div class="header-right" style="width: 100%;">
               <div class="head-top">
                   <div class="top-nav-right">
                    <div class="clearfix"> </div>
				   </div>
				  
				 </div>
			<div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
					<ul class="res" >
					   <li><a href="tour.php" class="active hvr-sweep-to-bottom">Add Tour</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="place.php">Add Place</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="hotel.php">Add Hotel</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="showuser.php">Show Tour</a></li>  
                        <li><a class="hvr-sweep-to-bottom" href="showplace.php">Show Place</a></li>  
                        <li><a class="hvr-sweep-to-bottom" href="showhotel.php">Show Hotel</a></li>  
						<li><a  class="hvr-sweep-to-bottom"href="adminbooking.php">Show Booking</a></li> 
                        <li><a  class="hvr-sweep-to-bottom"href="showmessage.php">Show Message</a></li>
                        <li><a class="hvr-sweep-to-bottom"href="logout.php">Logout</a></li>
					 </ul>
                        <div class="clearfix"> </div>
                     
					<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
		        <!-- /script-for-menu -->
                
							</div>
                            
                
    		</div>
           </div>
	<div class="clearfix"> </div>
	  </div>
		 	 </div>
             </div>
<div class="normal">
    <div class="slider">
    	<div class="next"> >>> </div>
        <div class="prev"> <<< </div>
        <div class="slide">
        <img src="images/s2.jpg" class="image">
        	<img src="images/s3.jpg" class="image">
            <img src="images/s4.jpg" class="image">
            <img src="images/s1.jpg" class="image">
        </div>
   </div>     
 </div> 	
</div>
</br>
	<!--gallery start here-->
<div class="gallery">
	<div class="container">
		<div class="gallery-main">
			<div class="gallery-top">
				<h3 align="center">Gallery</h3></br>
				<p>Himachal Pradesh, the home of ice and cool environment, is one of the smallest states in India in the northern part of the country. tourist destination for rejuvenating oneself amidst a peaceful and beautiful environment.</p>
			</div></dbr></br>
			<div class="gallery-bottom">
			   <div class="col-md-4 view view-seventh">
                    <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g1.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                        <span class="gall">More</span>
                    </div></a>
                </div>
               <div class="col-md-4 view view-seventh">
                     <a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g2.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                         <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="col-md-4 view view-seventh">
                     <a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g3.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                         <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="col-md-4 view view-seventh">
                     <a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g4.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                         <span class="gall">More</span>
                    </div></a>
                </div>
               <div class="col-md-4 view view-seventh">
                      <a href="images/g5.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g5.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                         <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="col-md-4 view view-seventh">
                    <a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g6.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                        <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="col-md-4 view view-seventh">
                    <a href="images/g.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                        <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="col-md-4 view view-seventh">

                    <a href="images/gg.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/gg.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                        <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="col-md-4 view view-seventh">
                    <a href="images/ggg.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/ggg.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h2>Travel</h2>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                        <span class="gall">More</span>
                    </div></a>
                </div>
             <div class="clearfix"> </div>
             </div>
		</div>
</div></div>




<!--footer star here-->
<div class="footer">
  <div class="container">
	  <div class="footer-main">
		<div class="footer-top">
			
			<div class="clearfix"> </div>
		</div>
	  <div class="clearfix"> </div>
		</div>
		<div class="copyright">
				 <p><h4><a href="newuser.php" id="loginButton2"><span>New User</span></a>&nbsp;||&nbsp;<a href="login.php" id="loginButton2"><span>Login</span></a>&nbsp;||&nbsp;<a href="home.php" class="active hvr-sweep-to-bottom">Home</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="hgallery.php">Gallery</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="booking.php">Booking</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="about.php">About</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="contactus.php">Contact</a></h4></p>
                 
					 	
		</div>
	</div>

<!--footer end here-->