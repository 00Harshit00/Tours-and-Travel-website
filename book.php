<?php
session_start();
if(!(isset($_SESSION['user'])))
{
	header("location:login.php");
}
$user=$_SESSION['user'];
$id=$_POST['t11']; /* Product id */
$room=$_POST['t1']; /* person */
$sday=$_POST['t2']; /* Starting date */
/*$eday=$_POST['t3'];  */


include_once("connection.php");
$r=mysql_query("select * from addtour where Id='$id'")or die(mysql_error());
if($s=mysql_fetch_array($r)){

}
$r1=mysql_query("select * from demo where pid='$id' and email='$user'")or die(mysql_error());
if(mysql_num_rows($r1)>0){

}
else{
	mysql_query("insert into demo values('','$room','$sday','','$id','$user')")or die(mysql_error());
}
header("location:booking1.php");

?>