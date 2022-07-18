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
</style>
<html>
<head>
<title>Himachal tourism</title>
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
<!--script-->
<script src="js/menu_jquery.js"></script>
</head>
<body>
<!--banner start here-->
<div class="abc">
  <div class="header">
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
				   <div class="ph-numb"><h4>Ph:+917355931244</h4></div>
				 </div>
				 <div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
						<ul class="res" >
					   <li><a href="tour.php" class="active hvr-sweep-to-bottom">Add Tour</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="place.php">Add Place</a></li>
                     
						<li><a class="hvr-sweep-to-bottom" href="showuser.php">Show Tour</a></li>  
                        <li><a class="hvr-sweep-to-bottom" href="showplace.php">Show Place</a></li>  
						<li><a  class="hvr-sweep-to-bottom"href=".php">Show Booking</a></li> 
                        <li><a  class="hvr-sweep-to-bottom"href=".php">Show Message</a></li>
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
		 <div class="clearfix"> </div>
	  </div>
		 	 </div>
 </div>
</div>
  	<h1 align="center" style="font-size:50px">Show User</h1><br>
<div class="col_w410 rmb">        	
<style>
	*{
		margin:0px;
		padding:0px;
	}
	.box {
    height: 250px;
    width: 293px;
    float: left;
    margin: 15px;
	margin-left:190px;
	margin-right:-120px;
	}
	.image{
	height:100%;
	width:100%;
	background:#666;
	}
	.img{
		height:100% !important;
		width:100% !important;
	}
	</style>  <?php
	$ab=$_REQUEST['a'];
include_once("connection.php");

$r=mysql_query("select * from images where name='$ab'") or die(mysql_error());
	
while($s=mysql_fetch_array($r))
{
?>
            		<div class="box">
                    	<div class="image">
                        	<img src="<?php echo $s['image'] ?>" class="img" />
                    	</div>
                    </div>
			<?php 	
}
	?>
      <div class="clear" style="clear:both;width:100%;height:10px;"></div>          
                
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
		<div class="copyright">
				 <p><h4><a href="newuser.php" id="loginButton2"><span>New User</span></a>&nbsp;||&nbsp;<a href="login.php" id="loginButton2"><span>Login</span></a>&nbsp;||&nbsp;<a href="home.php" class="active hvr-sweep-to-bottom">Home</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="hgallery.php">Gallery</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="booking.php">Booking</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="about.php">About</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="contactus.php">Contact</a></h4></p>
                 
					 	
		</div>
	</div>

<!--footer end here-->