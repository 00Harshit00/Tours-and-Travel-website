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

<link href="css/tooplate_book.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>
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
					<h1><a href="admin.php">Himachal Tourism</a></h1>
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
					   <li><a href="tour.php" class="active hvr-sweep-to-bottom">Add Tour</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="place.php">Add Place</a></li>
                     
						<li><a class="hvr-sweep-to-bottom" href="showuser.php">Show Tour</a></li>  
                        <li><a class="hvr-sweep-to-bottom" href="showplace.php">Show Place</a></li>  
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
		 <div class="clearfix"> </div>
	  </div>
		 	 </div>
 </div>
</div></br>
  	<div class="pack-top">
			 	<h3> Show Tour</h3>
			 </div>
<div class="col_w410 rmb">
        	
	
  <?php

include_once("connection.php");

$r=mysql_query("select * from addtour") or die(mysql_error());

echo"<center><table border='5' height='300' width='1000'>
<h3><th>Heading</th>
<th>Place Name</th>
<th>Price</th>
<th>Day's</th>
<th>Vec</th>
<th>Image</th>
<th>Update</th>
<th>Delete</th></tr>";
while($s=mysql_fetch_array($r))
{
echo"<tr><th>".$s['heading']."</th>
<th>".$s['placename']."</th>
<th>".$s['price']."</th>
<th>".$s['days']."</th>
<th>".$s['vec']."</th>
<th><center><img src=".$s['image']." height='100' width='100' ></center>
<center>"."<a href=gallery.php?a=".$s['placename'].">All Images</a>"."</center></th>
<th>"."<a href=update.php?a=".$s['Id'].">Update</a>"."</th>

<th>"."<a href=delete.php?a=".$s['Id'].">Delete</a>"."</th>
</tr>";
}
echo"<table></center>";
?>  </br></br>
                
                
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

</body>