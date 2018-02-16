<?php
 require("connection.php");
$id=$_GET['id'];


$sql="update events set status='1' where id=$id";

mysql_query($sql);
header("location:my_event.php");
?>