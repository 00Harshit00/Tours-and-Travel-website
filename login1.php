<?php
session_start();
include_once("connection.php");
mysql_select_db("toursim")or die (mysql_error());
$a=$_POST['t1'];
$b=$_POST['t2'];
if($a=="admin" && $b=="admin")
{
$_SESSION['admin']=$a;
header("location:admin.php");
}
else
{
$r=mysql_query("select * from reg where email='$a' and pwd='$b'")or die (mysql_error());
	if(mysql_num_rows($r)>0) 
	{
		$_SESSION['user']=$a;
		header("location:user.php");
	}
	else
	{
		header("location:login.php?a=1");
	}
}
?>