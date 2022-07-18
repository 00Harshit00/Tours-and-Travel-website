<?php
session_start();
if(!(isset($_SESSION['user'])))
{
	header("location:login.php");
}
$user=$_SESSION['user'];
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
include_once("connection.php");
$r=mysql_query("update reg set 

user='$a',email='$b',pwd='$c',mobileno='$e',address='$f' where email='$user'") or die(mysql_error());
header("location:login.php");
?>