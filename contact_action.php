<?php
session_start();
$ename=$_REQUEST['name'];
$dname=$_REQUEST['dname'];
$phone=$_REQUEST['pnumber'];
$email=$_REQUEST['emailid'];
$etype=($_REQUEST['etype']);
$nattendees=($_REQUEST['eattendees']);
$date=$_REQUEST['date_allow_empty'];
$dvenue=$_REQUEST['dvenue'];
$price=$_REQUEST['price'];
$des=$_REQUEST['submitted'];
require("connection.php");

$sql="insert into events(userid,name,dname,pnumber,emailid,etype,eattendees,date,dvenue,price,description) values(".$_SESSION['id'].",'$ename','$dname','$phone','$email','$etype','$nattendees','$date','$dvenue','$price','$des')";


mysql_query($sql) or die(mysql_error());
header("location:contact.php");
?>