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
</style>
<html>


<head>
<title>Himachal tourism</title>
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
<script src="validation.js"></script>
</head>
<body>
<!--banner start here-->
<div class="abc">
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
		 <div class="clearfix"> </div>
	  </div>
		 	 </div>
 </div>
</div>
  	<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>Feedback</h3>
				
			</div>
		
			<div class="contact-bott">
			<form name="f" action="contact1.php" method="post" enctype="multipart/form-data" onSubmit="return validation2()">
			   
               <input type="text" placeholder="name" value="" name="t" onKeyUp="val1('name')"><span id="name"></span>
			   
               
                <input type="text"placeholder="Placename" value="" name="t1"onKeyUp="val1('placename')"><span id="placename"></span>
                
                <input type="text"placeholder="Email" value="" name="t2"onKeyUp="val1('id')"  class="email"><span id="id"></span>
               <textarea name="t3" placeholder="Message"></textarea><span id="msg"></span>
			   
               <input type="submit" value="Send">
			</form>
            <?php 
				   if(isset($_REQUEST['a'])){
				   	echo"<script> alert('send Message')</script>";
				   }
				   ?> 
		 </div>
		<div class="clearfix"> </div>
	</div>
  </div>
</div>
<!--contact end here-->


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