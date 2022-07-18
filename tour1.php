<?php
$heading=$_POST['t1'];
$placename=$_POST['t2'];
$price=$_POST['t3'];
$days=$_POST['t4'];
$vec=$_POST['t5'];
$a="gallery";
$name=$_FILES['t6']['name'];
$type=$_FILES['t6']['type'];
$size=$_FILES['t6']['size'];
$location=$_FILES['t6']['tmp_name'];
$error=$_FILES['t6']['error'];
$name=str_replace(" ","",$name);
if($error>0)
{
	echo"some error";
}
	else
	{
	if(file_exists($a))
	{
	}
	else 
	{
	mkdir($a);
	}
	move_uploaded_file($location,$a."/".$name);
	$path=$a."/".$name;
	}
	mysql_connect("localhost","root","") or die (mysql_error());
    mysql_select_db("toursim")or die (mysql_error());
	$r=mysql_query("select * from addtour where placename='$placename'")or die (mysql_error());
	if(mysql_num_rows($r)) 
	{
	echo"Place already existing";
	}
	else
	{
	mysql_query("insert into addtour (heading,placename,price,days,vec,image)             		         		
	values(	'$heading','$placename','$price','$days','$vec','$path')")or die (mysql_error());
	header("location:upload.php?a=".$placename);
	}
	?>
		
	



