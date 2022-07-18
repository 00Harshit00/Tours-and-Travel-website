<?php
if(!(isset($_REQUEST['a']))){
	header("location:login.php");
}
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
 
	
</style>
<!DOCTYPE HTML>
<html>
<head>
<title>Himachal tourism</title>
<link href="css/styleb.css" rel="stylesheet" type="text/css" media="all" />
		<link href="/bootstra.css" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
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
<!--script-->
<script src="js/menu_jquery.js"></script>
</head>
<body>
<!--banner start here-->
<div class="abc">
  <div class="header1">
	<div class="container">
		 <div class="header-main">
				<div class="logo">
					<h1><a href="home.php">Himachal Tourism</a></h1>
				</div>
				<div class="header-right">
                
					<div class="head-top">
                    
					<div class="top-nav-right">
                    
						<div id="loginContainer">
                        <a href="newuser.php" id="loginButton2"><span>New User</span></a>
						<a href="login.php" id="loginButton2"><span>Login</span></a>
                        </div>
			         <div class="clearfix"> </div>
				   </div>
			
				 </div>
				 <div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
                    
					<ul class="res" >
					    <li><a href="home.php" class="active hvr-sweep-to-bottom">Home</a></li> 
                        <li><a class="hvr-sweep-to-bottom" href="hgallery.php">Gallery</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="homebooking.php">Booking</a></li>
						<li><a class="hvr-sweep-to-bottom" href="about.php">About</a></li>  
						<li><a class="hvr-sweep-to-bottom" href="contactus.php">Contact</a></li> 
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
		 <div class="clearfix"> </div>
	  </div>
		 	 </div>
 </div>
</div>
  	<!-- booking -->
		<div class="booking">
			<!-- container -->
			<div class="container">
				<div class="pack-top">
			 	<h3> Booking</h3>
			 </div>
				<div class="booking-form">
					<!---strat-date-piker---->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
			
	<div class="online_reservation">
	<div class="b_room">
	<div class="booking_room">
	<div class="reservation">
     <form action="homebooking1.php" method="post">
	<ul>		
		<li  class="span1_of_1 left">
          <h5>No Of Rooms</h5>
			<div class="book_date">
									
	<input type="text" placeholder="Rooms" required="" name="t1">
	<input type="hidden" placeholder="Rooms" required="" name="t11" 
    value="<?php echo $_REQUEST['a']; ?>">
													 
</div>					
 </li>
											 
<li  class="span1_of_1 left">
 <h5>Starting Day</h5>
<div class="book_date">
													
<input class="date" id="datepicker" type="text" name="t2" placeholder="4/22/2016" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '2/08/2013';}" required=>
													 
 </div>					
</li>
 <li  class="span1_of_1 left">
 <h5>Ending Day</h5>
 <div class="book_date">
												 
<input class="date" id="datepicker1" type="text" name="t3" placeholder="4/22/2016" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '22/08/2013';}" required=>
 
<input type="submit"value="Booking" class="submit_btn" />

 </form>
 </div>		
	</li>
											 
 <div class="clearfix"></div>
</ul>
 </div>
</div>
<div class="clearfix"></div>
</div>
</div>
					<!---->
				</div>
				<div class="clearfix"></div>
				<div class="booking-grids">
					<h3>WE ARE PROVIDE</h3>
					<div class="col-md-7 booking-grid-left">
						<h4>QUISQUE LECTUS IPSUM, FERMENTUM EU SODALES NON, AUCTOR IN MAURIS. NULLA PRETIUM CURSUS NULLA, AC RUTRUM MAGNA LAOREET EU.</h4>
						<p>Maecenas ultricies molestie efficitur. Maecenas bibendum tincidunt nulla at scelerisque. Fusce sodales nibh ex. Proin vel commodo neque. In congue neque ac venenatis aliquam. Sed vestibulum cursus velit faucibus tempor. Maecenas posuere pellentesque erat, vel auctor mauris fringilla ac. Proin euismod orci nec felis efficitur, a pulvinar nisl viverra. Etiam eu finibus ipsum, id molestie nunc</p>
						<p>Maecenas ultricies molestie efficitur. Maecenas bibendum tincidunt nulla at scelerisque. Fusce sodales nibh ex. Proin vel commodo neque. In congue neque ac venenatis aliquam.Maecenas bibendum tincidunt nulla at scelerisque.</p>
						<div class="read-more red">
						
						</div>
					</div>
					<div class="col-md-5 booking-grid-right">
						<marquee><img src="images/2.jpg" alt="" height="400" width="400"></marquee>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
			
	
				<div class="cleaner h40"></div>
            </div>
			<div class="cleaner"></div>
        </div>

    <div class="cleaner"></div>
        
    </div>    


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