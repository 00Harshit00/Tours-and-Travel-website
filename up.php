
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
  <div class="header">
	<div class="container">
		 <div class="header-main">
				<div class="logo">
					<h1><a href="user.php">Himachal Tourism</a></h1>
				</div>
				<div class="header-right">
					<div class="head-top">
					<div class="top-nav-right">
						<div id="loginContainer">
                        
                        </div>
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
                        <li><a  class="hvr-sweep-to-bottom"href="showmwssage.php">Show Message</a></li>
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
  	<h1 align="center" style="font-size:50px">Add Place</h1><br>
<div class="col_w410 rmb">
        	
			<div id="contact_form">
            
             
            
                <form method="post" name="contact" action="up1.php" enctype="multipart/form-data">
                <?php
			      $a=$_REQUEST['a'];;
            include_once("connection.php");

	        $r=mysql_query("select * from addplace where id='$a'")or die (mysql_error());
	        if(mysql_num_rows($r)>0)
			{
			if($s=mysql_fetch_array($r))
			{
			?>
                   

                
					 
                    <label for="subject">Place Name:</label>
                    <input type="text"  name="t1" class="input_field" value="<?php echo $s['placename']?>" />
                    
                    
                     <label for="email">Place Location:</label>
                    <input type="text" name="t2" class="input_field" value="<?php echo $s['placeloc']?>"/>

					<label for="email">Place Description:</label>
                    <input type="text"  name="t3" class="input_field" value="<?php echo $s['placedes']?>"/>
                    
                    
                     <label>image:</label>
                    <input type="file" name="t4"  class="input_field" value="<?php echo $s['image']?>"/>
                     
                    
                     <div class="cleaner"></div>
                    
                    
                    <input type="submit"value="Submit" class="submit_btn" value="final update"/>
                </form>
                <?php
				}
				}
				
				?>
				
			<div class="cleaner"></div>
        </div>

    <div class="cleaner"></div>
        
    </div>    


<!--footer star here-->
<div class="footer1">
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
</html>