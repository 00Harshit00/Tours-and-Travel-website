


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
<link href="css/tooplate.css" rel="stylesheet" type="text/css" />
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
<div class="banner">
  <div class="header">
	<div class="container">
		 <div class="header-main">
				<div class="logo">
					<h1><a href="admin.php">Himachal Tourism</a></h1>
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
					   <li><a href="usertour.php" class="active hvr-sweep-to-bottom">Show Tour</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="userplace.php">Show Place</a></li>
                     
					 
						<li><a  class="hvr-sweep-to-bottom"href="userbooking.php">Show Booking</a></li> 
                        <li><a  class="hvr-sweep-to-bottom"href="usermessage.php">Add Message</a></li>
                        <li><a  class="hvr-sweep-to-bottom"href=".php">Edit Password</a></li>
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

             
  <?php	
 
include_once("connection.php");
mysql_select_db("toursim")or die (mysql_error());
$r=mysql_query("select * from addtour") or die(mysql_error());
	while($s=mysql_fetch_array($r))
{
 ?>
				
   
  <?php          	
    echo"<center><table border='10'  height='300' width='250'></center>
	
	
<tr><th>Price</th><th>".$s['price']."</th></tr>
<tr><th>Day's</th><th>".$s['days']."</th></tr>
<tr><th>Vec</th><th>".$s['vec']."</th></tr>";
}
echo"</table>";
?>
			<div class="cleaner"></div>
            </div> 
<div class="col_w410 rmb">
    
      <div class="clear" style="clear:both;width:100%;height:10px;"></div>          
                
				<div class="cleaner h40"></div>
            </div>
			<div class="cleaner"></div>
        </div>

    <div class="cleaner"></div>
        
    </div>    

</div>
        

<!--welcome start here-->
<div class="welcome">
	<div class="welcome-main">
		<div class="col-md-6 welcome-left">
			 <div class="wel-text">
			   	<h3>WELCOME</h3>
			   	<p>If you like anything and everything about snow, you may be inspired by the meaning of the word Himachal. ‘The land of snows’, the meaning, is adequate to give you an idea of what to expect here. Himachal Pradesh is located in the western Himalayas. Surrounded by majestic mountains, out of which some still challenge mankind to conquer them, the beauty of the land is beyond imagination. Simla, one of the most captivating hill stations, is the capital of the state. </p>
			 </div>
		</div>
		<div class="col-md-6 welcome-right">
			   	
		</div>
	 <div class="clearfix"> </div>
	</div>
</div>
<!--welcome end here-->
<!--trip grig start here-->
<div class="trip">
	<div class="trip-main">
			   <div class="col-md-6 trip-left">
			   	  
			   </div>
			   <div class="col-md-6 trip-right">
			   	 <h3>Visit Places</h3>
			   	<p>Himachal Pradesh, a northern Indian state in the Himalayas, is known for its trekking, climbing and skiing, and scenic mountain towns and resorts such as Dalhousie. Host to the Dalai Lama, Himachal Pradesh also has a strong Tibetan presence, reflected in its Buddhist temples and monasteries, cuisine heavy on noodles and dumplings, and vibrant Tibetan New Year celebrations.</p>
			   </div>
			<div class="clearfix"> </div>
	</div>
</div>	
<!--trip end here-->


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
				 <p><h4><a href="newuser.php" id="loginButton2"><span>New User</span></a>&nbsp;||&nbsp;<a href="login.php" id="loginButton2"><span>Login</span></a>&nbsp;||&nbsp;<a href="home.php" class="active hvr-sweep-to-bottom">Home</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="gallery.php">Gallery</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="booking.php">Booking</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="about.php">About</a>&nbsp;||&nbsp;<a class="hvr-sweep-to-bottom" href="contact.php">Contact</a></h4></p>
                 <p><h4><a href="kullu.php">Kullu</a>&nbsp;||&nbsp;<a href="shimla.php">Shimla</a>&nbsp;||&nbsp;<a href="dharm.php">Dharmasala</a>&nbsp;||&nbsp;<a href="dal.php">Dalhousie</a>&nbsp;||&nbsp;<a href="kangra.php">Kangra</a>&nbsp;||&nbsp;<a href="solan.php">Solan</a>&nbsp;||&nbsp;<a href="kasauli.php">Kasauli </a>&nbsp;||&nbsp;<a href="temple.php">Temple In Himachal</a></h4></p>
					 	
		</div>
	</div>
</div>
<!--footer end here-->

</body>
</html>