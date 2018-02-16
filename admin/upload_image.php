<?php
$fname=$_FILES['image']['name'];
$fsize=$_FILES['image']['size'];
$ftype=$_FILES['image']['type'];
$ftmp=$_FILES['image']['tmp_name'];
$path="image/".$fname;
require("connection.php");
$sql="insert into images(image) values('$path')";
mysql_query($sql);
move_uploaded_file($ftmp,$path);

header("location:image_event.php");
?>