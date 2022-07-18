<?php 
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];

include_once("connection.php");
mysql_query("insert into comment(name,email,p_name,comment,like2) 
	values('$a','$b','$c','$d','$e')")or die(mysql_error());
header("location:fullplace.php?a=".$c);
?>
