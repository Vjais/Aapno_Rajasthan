
<?php
$id=$_GET['id'];
$fname=$_FILES['image']['name'];

$ftmp=$_FILES['image']['tmp_name'];
$oldimage=$_POST['old_image'];
$path="image/".$fname;
move_uploaded_file($ftmp,$path);
require("connection.php");
if($fname=="")
{
	
}

else
{
if(file_exists($oldimage))
{
unlink($oldimage);
}
$sql="update images set image='$path' where id=$id ";
$result=mysql_query($sql);

}

header("location:image_fetch.php");

?>