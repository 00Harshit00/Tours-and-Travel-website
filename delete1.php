<?php
   $a=$_REQUEST['a'];

include_once("connection.php");
   
	
	mysql_query("delete from addplace where id='$a'") or die(mysql_error());
	header("location:showplace.php");
	?>
	