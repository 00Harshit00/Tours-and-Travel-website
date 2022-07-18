<?php
session_start();
if(!(isset($_SESSION['user'])))
{
	header("location:login.php");
}
$user=$_SESSION['user'];
include_once("connection.php");
	$r=mysql_query("select * from demo where email='$user'")or die(mysql_error());
	if(mysql_num_rows($r)>0){
		$no=mysql_num_rows($r);
		while($s=mysql_fetch_array($r)){
			$room=$s['room'];
			$sday=$s['sday'];
			$eday=$s['eday'];
			$pid=$s['pid'];
		$r1=mysql_query("select * from addtour where Id='$pid'")or die(mysql_error());
			if($s1=mysql_fetch_array($r1)){}	
		}		
	}
	else{}
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
  
     </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->
        
        
    </div> <!-- END of header -->
    
    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    </br></br></br>
    <div id="content">
    	<h1>Show Booking</h1></br></br>
    	        <table width="890px" cols="0" cellspacing="0" cellpadding="5" border="2">
          <tr bgcolor="#ddd">
          	
                <th width="500">Image </th>
                <th width="200">Place Name</th>
                <th width="200">Day </th>
                <th width="220">Vec </th> 
                <th width="200"> No of Person </th> 
                <th width="200">Starting Day </th> 
                <th width="200">Ending Day </th> 
                <th width="200">Price </th> 
                <th width="200">Remove </th>
                  
                
          </tr>
           <?php
	 $total=0;
     $r=mysql_query("select * from demo where email='$user'")or die(mysql_error());
	if(mysql_num_rows($r)>0){
		$no=mysql_num_rows($r);
		while($s=mysql_fetch_array($r)){
			$room=$s['room'];
			$sday=$s['sday'];
			$eday=$s['eday'];
			$pid=$s['pid'];
			
		$r1=mysql_query("select * from addtour where Id='$pid'")or die(mysql_error());
			if($s1=mysql_fetch_array($r1)){
				$image=$s1['image'];
				$placename=$s1['placename'];
				$price=$s1['price'];
				$days=$s1['days'];
				$vec=$s1['vec'];
				
				
	?>
            <tr>
                <td  width="500"><img src="<?php echo $s1['image']?>" alt="image" height="100" width="100%" ></td> 
                <td  width="200"><?php echo $placename ?></td> 
                <td  width="200"><?php echo $days ?></td> 
                <td  width="200"><?php echo $vec ?> </td>
                <td  width="200"><?php echo $room ?> </td>
                <td  width="200"><?php echo $sday ?> </td>
                <td  width="200"><?php echo $eday ?> </td>
                  <td  width="200"><?php 
				  $price=str_replace(",","",$price);
                  echo $price=$price * $room;
				  $total+=$price; ?> 
                  </td>
                
                <td  width="200"> <a href="remove.php?a=<?php echo $s['id'] ?>"><img src="images/remove.png" alt="remove" /><br />Remove</a> </td>
				
            </tr>
            <?php
				}	
		}		
	}
	else{
	
	}
	?>    
        </table></br></br>
        <table border="10" width="900">    
            <tr>
                
                <td  align="center" style="font-weight:bold"> Total </td>
                <td align="right" style="font-weight:bold"><?php echo $total ?></td>
            </tr>
        </table></br></br>
        <p class="right"><a href="checkout.php" class="button">checkout</a></p>
            
        
		</div>
        </div>
        <div id="sidebar">
        <h1 align="center">Popular Place</h1>
			<div class="sidebar_section sidebar_section_bg">
                
         		<marquee><ul class="sidebar_link_list popular_products">
                    <li>
                    	<img src="images/ab.jpg"height="200" width="200">
                    	<span class="title">shimla</span>
                      
                        <span class="clear"></span>
					</li>
                    <li>
                        <img src="images/g5.jpg" height="200" width="200" >
                        <span class="title">Kullu</span>
						
                        <span class="clear"></span>
					</li>
                    <li>
                        <img src="images/g3.jpg" height="200" width="200" >
                        <span class="title">Manali</span>
						
                        <span class="clear"></span>
					</li>
                    
                    
              </ul>
              </div>
            </div>
        </div>
        <div class="clear"></div>
        </marquee>
    </div> <!-- END of main -->  
  
  
  
			
	
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