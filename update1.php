<?php
$heading=$_POST['t1'];
$placename=$_POST['t2'];
$price=$_POST['t3'];
$days=$_POST['t4'];
$vec=$_POST['t5'];
    include_once("connection.php");
    mysql_query("update addtour set
	heading='$heading',
	placename='$placename',
	price='$price',
	days='$days',
	vec='$vec'
	where id='$id'") or die(mysql_error());
	
	header("location:showuser.php");
	?>