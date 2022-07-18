<?php
$placename=$_POST['t1'];
$placeloc=$_POST['t2'];
$placedes=$_POST['t3'];

$a="gallery";
echo $name=$_FILES['t4']['name'];
$type=$_FILES['t4']['type'];
$size=$_FILES['t4']['size'];
$location=$_FILES['t4']['tmp_name'];
$error=$_FILES['t4']['error'];

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
	$r=mysql_query("select * from addplace where placename='$placename'")or die (mysql_error());
	if(mysql_num_rows($r)) 
	{
	echo"Place already existing";
	}
	else
	{
	mysql_query("insert into addplace (placename,placeloc,placedes,image)             		         		
	values('$placename','$placeloc','$placedes','$path')")or die (mysql_error());
	header("location:upload1.php?a=".$placename);
	}
	?>
		
	



