<?php
session_start();
if(!(isset($_SESSION['user'])))
{
header("location:login.php");
}
?>

<style>
.top-nav ul li {
    display: inline-block;
    float: left;
    width: 14.2% !important;
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
         
				<div class="logo">
                
					<h1><a href="user.php">Himachal Tourism</a></h1>
				</div>
				<div class="header-right">
                
					<div class="head-top">
                    
					<div class="top-nav-right">
                    
						
			         <div class="clearfix"> </div>
				   </div>
				  
				 </div>
			<div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
						<ul class="res" >
					   <li><a href="usertour.php" class="active hvr-sweep-to-bottom">Show Tour</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="userplace.php">Show Place</a></li>
                     <li><a class="hvr-sweep-to-bottom" href="userhotel.php">Show Hotel</a></li>
                     
					 
						<li><a  class="hvr-sweep-to-bottom"href="usermessage.php">Show Booking</a></li> 
                        <li><a  class="hvr-sweep-to-bottom"href="contact.php">Add Message</a></li>
                        <li><a  class="hvr-sweep-to-bottom"href="editprofil.php">Edit Profile </a></li>
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
        <div id="tooplate_bottom_wrapper">
	<div id="tooplate_bottom">
    	<div class="col col_4">
        <div class="left">
        <h4 align="left">Information</h4>
			
      		 <ul class="list_bullet">
                <li><a href="login.php">About Himachal</a></li>
                <li><a href="login.php">About Tour</a></li>
                <li><a href="login.php">About Places</a></li>
                <li><a href="login.php">About latest package</a></li>
                <li><a href="login.php">About Himachal Road</a></li>
                <li><a href="login.php">About Temples</a></li>
            </ul>
            </div>
        </div>
        
        <div class="col col_4">
        <div class="right">
        	<h4>Services &amp; Support</h4>
      		<ul class="list_bullet">
                <li><a href="login.php">Custom Mapping</a></li>
                <li><a href="login.php">GIS Services</a></li>
                <li><a href="login.php">On thid Day in History</a></li>
                <li><a href="login.php">Himachal Events</a></li>
                <li><a href="login.php">Current Events</a></li>
                <li><a href="login.php"> Map Games</a></li>
            </ul>
        </div></div>
        
        <div class="col col_4 twitter">
        	<h4>Pages</h4>
      		<ul class="list_bullet">
                <li><a href="home.php">Home</a></li>
                <li><a href="hgallery.php">Gallery</a></li>
                <li><a href="about.php" class="selected">About</a></li>
                <li><a href="login.php">Booking</a></li>
                <li><a href="contactus.php" class="last">Contact</a></li>
            </ul> 
             
            
            
        
           
        <div class="clear"></div>
		</div>
	</div>
</div>
<!--footer end here-->

</body>
</html>