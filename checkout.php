
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
</br></br>
  <div class="contact-top">
				<h3>Checkout</h3>
				
			</div>
			
<?php
ob_start();
session_start();
?>
<?php
$user=$_SESSION['user'];
$total=0;
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("toursim")or die(mysql_error());
$r1=mysql_query("select * from demo where email='$user'")or die(mysql_error());
if(mysql_num_rows($r1)>0){
	while($s=mysql_fetch_array($r1)){
		$pid=$s['pid'];
		$room=$s['room'];
		$sday=$s['sday'];
		$eday=$s['eday'];
		$email=$s['email'];
		$r2=mysql_query("select * from addtour where id='$pid'")or die(mysql_error());
			while($s2=mysql_fetch_array($r2)){
			$placename=$s2['placename'];
			$price=$s2['price'];

				  $price=str_replace(",","",$price);
                   $price=$price * $room;
			$days=$s2['days'];
			$vec=$s2['vec'];
	mysql_query("insert into checkout values('','$placename','$days','$vec','$room','$sday','$eday','$price','$email')")or die(mysql_error());
	mysql_query("delete from demo where pid='$pid'")or die(mysql_error());
	}
	}
	$r3=mysql_query("select * from checkout where email='$user'")or die(mysql_error());
      if(mysql_num_rows($r3)>0){
	echo"<table  align='center'border='2' width='500px' height='500px' cellspacing='10'>
			";
			?>
            <script>
			function val(){
				alert("your booking  is not conformed plz pay");
			}
			</script>
            <div class="aa">
            <tr><th><h3>Email-Id :- <?php echo $email?></h3></th></tr>
    	<tr><th><h3>Placename :- <?php echo $placename?></h3></th></tr>
        <tr><th><h3>Day:- <?php echo $days?></h3></th> </tr>
    <tr><th><h3>Vec :- <?php echo $vec?></h3></th></tr>
    <tr><th><h3>No of person :- <?php echo $room ?></h3></th></tr>
     <tr><th><h3>starting Day  :- <?php echo $sday ?></h3></th></tr>
      <tr><th> <h3>Ending Day  :- <?php echo $eday?></h3></th></tr>
       <tr> <th width="50%"><h3>Price  :- <?php echo $price ?></h3></th></tr>
        <tr><th><h3>Total-Price :- <?php 
				  $price=str_replace(",","",$price);
				  echo $price;
				  $total+=$price; ?> </h3></th>
    </tr>
   <tr><th><h1><center><a onClick="val()" style="cursor:pointer; width:120px; display:block;
    height:50px; line-height:50px; text-align:center; background: #66CCFF;">
    Print</a></center></h1></th></tr>
    </div>
   <?php
   echo"</table>";
	}
}

else
{
	
}

?>

 
       


<!--footer star here--> 
</br></br>

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