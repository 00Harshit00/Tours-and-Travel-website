
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
</div>
  
     </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->
        
        
    </div> <!-- END of header -->
    
    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
   
    <div id="content">
    	<div class="pack-top">
			 	<h3> Show Booking</h3>
			 </div></br>
    	        <table align="center"width="890px" cols="0" cellspacing="0" cellpadding="5">
          <tr bgcolor="#ddd">
          	
                <th width="200">Place Name </th>
                <th width="200">Days</th>
                <th width="200">Vec</th>
                <th width="200">Room</th>
                <th width="300">Starting Day</th> 
                <th width="300">Ending Day</th>
                <th width="300">Price</th>
                <th width="300">Email</th>
                <th width="300">Remove</th> 
                
                
          </tr>
           <?php
	 
     include_once("connection.php");
mysql_select_db("toursim")or die (mysql_error());
$r=mysql_query("select * from checkout") or die(mysql_error());
	while($s=mysql_fetch_array($r)){
			$placename=$s['placename'];
			$days=$s['days'];
			$vec=$s['vec'];
			$room=$s['room'];
			$sday=$s['sday'];
			$eday=$s['eday'];
			$price=$s['price'];
			$email=$s['email'];
			
			
		
				
	?>
            <tr>
        
                <td  width="200"><?php echo $placename ?></td>
               <td  width="200"><?php echo $days ?></td>
               <td  width="200"><?php echo $vec ?></td> 
               <td  width="200"><?php echo $room ?></td>
               <td  width="200"><?php echo $sday ?></td>
              <td  width="200"><?php echo $eday ?></td>
               <td  width="200"><?php echo $price ?></td>
                <td  width="200"><?php echo $email ?> </td>
                
               
                <td  width="200"> <a href="deletebook.php?a=<?php echo $s['id'] ?>"><img src="images/remove.png" alt="remove" /><br /></a> </td>
				
            </tr>
            <?php
		
	
	}
	?>
        
        </table>
        
        
        
        
        </div>
        <div class="clear"></div>
        </marquee>
    </div> <!-- END of main -->  
  
  <div class="cleaner h40"></div>
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