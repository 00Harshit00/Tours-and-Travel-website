<?php
   $a=$_REQUEST['a'];

	include_once("connection.php");
    
	
	mysql_query("delete from addtour where id='$a'") or die(mysql_error());
	header("location:showuser.php");
	?>
	