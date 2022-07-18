<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
include_once("connection.php");
mysql_select_db("toursim")or die (mysql_error());
$r=mysql_query("insert into reg (user, email,pwd,gender,mobileno,address) values('$a','$b','$c','$d','$e','$f')") or die (mysql_error());
$_SESSION['user']=$a;
header("location:user.php");
?>