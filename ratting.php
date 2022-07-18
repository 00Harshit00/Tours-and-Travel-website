 <?php
 session_start();	
$user=$_SESSION['user'];
$a=$_POST['t1'];
$b=$_POST['t2'];
$no=0;
$ratting=0;
include_once("connection.php");
$r=mysql_query("select * from addtour where placename='$a'") or die(mysql_error());
	while($s=mysql_fetch_array($r)){
		$ratting=$s['ratting'];
		$no=$s['no'];
		$t_id=$s['Id'];
	}
$r1=mysql_query("select * from ratting_tour where t_id='$t_id' and email='$user'")
or die(mysql_error());
if(mysql_num_rows($r1)>0){
	header("location:fulldetail.php?a=".$a);
}
else{
	mysql_query("insert into ratting_tour(t_id,email,ratting) values('$t_id','$user','$b')")
	or die(mysql_error());
	$ratting=$ratting+$b;
	$no=$no+1;
	mysql_query("update addtour set ratting='$ratting',no='$no' where Id='$t_id'")
	or die(mysql_error());
}
header("location:fulldetail.php?a=".$a);
?>