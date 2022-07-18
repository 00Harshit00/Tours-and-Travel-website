<?php
session_start();
$user=$_SESSION['user'];
include_once("connection.php");
$r=mysql_query("select * from reg where email='$user'")
or die (mysql_error());
	while($s=mysql_fetch_array($r)){
		$name=$s['user'];
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
  <!-- END of slider -->
  
  <div class="package">
	<div class="container">
		<div class="package-main">
			 <div class="pack-top">
			 	<h3> Gallery</h3>
			 </div>
             
 <?php	
$a=$_REQUEST['a']; 
include_once("connection.php");

$r=mysql_query("select * from addplace where placename='$a'") or die(mysql_error());
	while($s=mysql_fetch_array($r))
	{
 ?>
 <div class="gallery-top">
<h4><p><?php echo $s['placedes']?></p></h4></br>
</div>
<?php
}
?>            
             
  <?php	
  $a=$_REQUEST['a'];
include_once("connection.php");

$r=mysql_query("select * from image where name='$a'") or die(mysql_error());
	while($s=mysql_fetch_array($r))
{
 ?>  
    
        	<div class="pack-bott">

            	<div class="col-md-3 package-grid">
                
 
 <a class="lightbox" href="<?php echo $s['image'] ?>">
	  
      <img src="<?php echo $s['image']?>" alt=""class="img-responsive"></br>
      </a>
      	
				</div>
                 
            </div>
             <?php
		}
        ?>
    </div></div>
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>Feedback</h3>
				
			</div>
		
			<div class="contact-bott">
			<style type="text/css">
				.my{
					font-size: 1em;
    color: #999;
    outline: none;
    width: 30%;
    margin: 0em 0em 0.6em 0em;
    border: 1px solid #999;
    padding: 0.4em 1em 0.4em 1em;
    border-radius: 3px;
    background: none;
    color: black;
				}
			</style>
			<form action="comment.php" method="post">
			   
               <input type="text" style="color: black;" value="<?php echo $name ?>" name="t1"/>
			   <input type="text" style="color: black;" value="<?php echo $user ?>" name="t2"/>
			   <input type="hidden" value="<?php echo $a ?>" name="t3"/>
			   <select name="t5" class="my">
			   	<option value="UNLIKE">LIKE/UNLIKE</option>
			   	<option value="LIKE">LIKE</option>
			   	<option value="UNLIKE">UNLIKE</option>
			   </select>
			   <textarea name="t4" style="color: black;" placeholder="Message"></textarea><span id="msg"></span>
			   
               <input type="submit" value="Send">
			</form>
         </div>
		<div class="clearfix"> </div>
	</div>
  </div>
</div>
	<?php 
	$r=mysql_query("select * from comment where p_name='$a'") 
	or die(mysql_error());
	while($s=mysql_fetch_array($r)){
	 ?>
  <div class="package">
	<div class="container">
		<div class="package-main">
			<h3 style="text-decoration: underline;"><?php echo $s['name'] ?>(<?php echo $s['like2'] ?>)</h3> 
			<p style="text-align: justify;"><?php echo $s['comment'] ?> </p>
		</div>

	</div>
	</div>	
	<?php } ?>		 
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