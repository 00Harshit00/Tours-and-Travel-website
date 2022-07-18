<?php
   $a=$_REQUEST['a'];

include_once("connection.php");
   
	
	mysql_query("delete from hotel where id='$a'") or die(mysql_error());
	header("location:showhotel.php");
	?>
	