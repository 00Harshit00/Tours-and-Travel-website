<form action="" method="post" enctype="multipart/form-data">
Image's<input type="file" name="f1[]" multiple>
<input type="hidden" name="t1" value="<?php echo $a=$_REQUEST['a'];?>" />
<input type="submit"value="Upload multiple" name="action" >
</form>
<?php
 if(isset($_POST['action'])){
 $count=count($_FILES['f1']['name']);
 echo $a=$_POST['t1'];
 
 for($i=0; $i<$count; $i++){
 $name=$_FILES['f1']['name'][$i];
$type=$_FILES['f1']['type'][$i];
$size=$_FILES['f1']['size'][$i];
$location=$_FILES['f1']['tmp_name'][$i];
$error=$_FILES['f1']['error'][$i];

$name=str_replace(" ","",$name); 
   if($error>0){
   }
   else{
   if(file_exists($a)){}
   else{
   mkdir($a);
	}
	move_uploaded_file($location,$a."/".$name);
	$path=$a."/".$name;
	mysql_connect("localhost","root","") or die (mysql_error());
    mysql_select_db("toursim")or die (mysql_error());
	$r=mysql_query("insert into images value('','$a','$path')")or die (mysql_error());
	}
	}
	
	header("location:admin.php");
}	
	?>
		
	



