<?php
   $a=$_REQUEST['a'];

	include_once("connection.php");
    mysql_select_db("toursim")or die (mysql_error());
	
	mysql_query("delete from contact where id='$a'") or die(mysql_error());
	header("location:showmessage.php");
	?>
	