<?php
   $a=$_REQUEST['a'];

	include_once("connection.php");
    mysql_select_db("toursim")or die (mysql_error());
	
	mysql_query("delete from demo where id='$a'") or die(mysql_error());
	header("location:user.php");
	?>
	