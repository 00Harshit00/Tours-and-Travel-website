<?php
$placename=$_POST['t1'];
$placeloc=$_POST['t2'];
$placedes=$_POST['t3'];
    include_once("connection.php");
	
	mysql_query("update addplace set
	
	placeloc='$placeloc',
	placedes='$placedes' where id='$id'") or die(mysql_error());
	
	header("location:showplace.php");
	?>