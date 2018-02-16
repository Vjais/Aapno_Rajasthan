<?php
 require("connection.php");

$eventName=$_REQUEST['event'];
$eventDesc=$_REQUEST['event_description'];


$sql= "insert into event_table(event_name,description) values('$eventName','$eventDesc')";
 
mysql_query($sql) or die(mysql_error());
 
 
 
header("location:adminevent.php");

?>
