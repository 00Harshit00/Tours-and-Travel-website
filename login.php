<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
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
<script>
function val3(a)
{
document.getElementById(a).innerHTML="";
}
function validation4()
{
	var a=document.f1.t1.value;
	var b=document.f1.t2.value;
	flag=true;
	if(a=="" && b=="")
	{
		alert("full login form is empty");
		flag=false;
	}
	else
	{
		if(a=="")
		{
			document.getElementById('email1').innerHTML="email is blank";
			flag=false;
		}
	    if(b=="")
		{
			document.getElementById('pwd1').innerHTML="password is blank";
			flag=false;
		}
	}
return flag;
}
</script>
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
				   
				 </div>
				 <div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
					<ul class="res" >
					    <li><a href="home.php" class="active hvr-sweep-to-bottom">Home</a></li> 
                        <li><a class="hvr-sweep-to-bottom" href="hgallery.php">Gallery</a></li>
                        <li><a class="hvr-sweep-to-bottom" href="homebooking.php">Booking</a></li>
						<li><a class="hvr-sweep-to-bottom" href="about.php">About</a></li>  
						<li><a class="hvr-sweep-to-bottom" href="contactus.php">Contact</a></li> 
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
			 	<h3> Login</h3>
			 </div>
<div class="col_w410 rmb">
        	
			<div id="contact_form">
                
                <form name="f1"  method="post" action="login1.php" enctype="multipart/form-data" onSubmit="return validation4()">
                   

                    <label>Email Id:</label>
                    <input type="text" placeholder="Enter your Email"name="t1" class="input_field" id="email" onKeyUp="val3('email1')"><span id="email1"></span>

                    <label>Password:</label>
                    <input type="password" placeholder="Enter your Password" id="pwd" name="t2" class="input_field" onKeyUp="val3('pwd1')"><span id="pwd1"></span>
                    
                    <div class="cleaner"></div>
                    <input type="submit"value="Login" class="submit_btn" />
                </form>
                 <?php 
				   if(isset($_REQUEST['a'])){
				   	echo"<script> alert('Your Email or Password is not match.Plz try again')</script>";
				   }
				   ?>		
                
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
<style>
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
<!--footer end here-->

</body>
</html>