<?php
 require("connection.php");
$id=$_REQUEST['id'];
$eventName=$_REQUEST['event'];
$eventDesc=$_REQUEST['event_description'];


$sql="update event_table set event_name='$eventName',description='$eventDesc' where id=$id";


mysql_query($sql);
header("location:fetch_event.php");
?>