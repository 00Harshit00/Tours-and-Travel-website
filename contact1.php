<?php
ob_start();
session_start();
$a=$_POST['t'];
$b=$_POST['t1'];
$c=$_POST['t2'];
$d=$_POST['t3'];
include_once("connection.php");
mysql_select_db("toursim")or die (mysql_error());
$r=mysql_query("insert into contact (id,name,placename,email,message)values('','$a','$b','$c','$d')") or die(mysql_error());
$_SESSION['name']=$a;
header("location:contact.php?a=1");
?>
	
