<style>
.top-nav ul li {
    display: inline-block;
    float: left;
    width: 14.2% !important;
}

.left{
margin-left:100px;
height:auto;
width:30%;

float:left;
}
.left1{
margin-left:100px;
height:auto;
width:70%;

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
<div class="banner">
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
</br></br>
 
<div class="pack-top">
			 	<h3> Vacation Package deals</h3>
			 </div>
<div class="left1" style="margin-left:0%;">

<?php
$a=$_REQUEST['a'];
include_once("connection.php");
$r=mysql_query("select * from images where name='$a'") or die(mysql_error());
	
while($s=mysql_fetch_array($r))
{

?>

<div class="col-md-4 package-grid">

 <a class="lightbox" href="<?php echo $s['image'] ?>">
 
  <img src="<?php echo $s['image'] ?>"  alt="" class="img-responsive" style="border-radius:60%;">
  </a>
  
</div>
<?php 	
}
?>
                </div>
                <div class="right">


<div class="pack-top">
			 	<h3> About Tour</h3>
			 </div>
			<div class="sidebar_section sidebar_section_bg">
             <?php	
$a=$_REQUEST['a']; 
include_once("connection.php");
mysql_select_db("toursim")or die (mysql_error());
$r=mysql_query("select * from addtour where placename='$a'") or die(mysql_error());
	while($s=mysql_fetch_array($r))
	{
 ?>
<table border="3"   height='200%' width='90%' cellpadding="20" >
<tr class="text-center"><th>Price</th><th><?php echo $s['price']?></th></tr>
<tr class="text-center"><th>Day's</th><th><?php echo$s['days']?></th></tr>
<tr class="text-center" ><th >Vec</th><th><?php echo$s['vec']?></th></tr>
<tr class="text-center" ><th >Ratting</th>
<th>
	<?php 
			$ratting=$s['ratting'];
			$no_p=$s['no'];
			if($ratting==0){
				?>
				<img src="img/blank2.png" height="20" width="100">
				<?php 
			}
				else{
			$total=$ratting/$no_p;
		for($i=0;$i<$total;$i++){
			?>
	<img src="img/star2.png" height="20" width="20">
	<?php 	
		}
	}
	?>
</th></tr>
<tr>
<tr>
	<th class="text-center" colspan="2">
		<form action="ratting.php" method="post">
			<input type="hidden" name="t1" value="<?php echo $a ?>">
			<select name="t2">
				<option value="">Select Ratting</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<button type="submit">Send</button>
		</form>
	</th></tr>
<tr>
<th colspan="2" class="text-center">
	<a href="Booking.php?a=<?php echo$s['Id']?>"><h3>Booking</h3></a></th>
</tr></table>
<?php
}
?></br></br>
               <div class="pack-top">
			 	<h3> Populer Places</h3>
			 </div>
         		<marquee><ul class="sidebar_link_list popular_products">
                    <a href="#"><span><h2>Shimla</h2></span>
                    	<img src="images/ab.jpg"height="200" width="200"></a>
                      <span class="clear"></span>
					<a href="#"><span><h2>Kullu</h2></span>
                     <img src="images/g5.jpg" height="200" width="200" ></a>
						<span class="clear"></span>
				
             
            </div>
        </div>
        <div class="clear"></div>
        </marquee>
    </div> <!-- END of main -->  
  
</div>

			<div class="cleaner"></div>
            </div>
            	
<div class="cleaner"></div>
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