<?php
$ename=$_REQUEST['name'];
$dname=$_REQUEST['dname'];
$phone=$_REQUEST['pnumber'];
$email=$_REQUEST['emailid'];
$etype=$_REQUEST['etype'];
$nattendees=$_REQUEST['eattendees'];
$date=$_REQUEST['date_allow_empty'];
$dvenue=$_REQUEST['dvenue'];
$price=$_REQUEST['price'];
$status=$_REQUEST['status'];
$des=$_REQUEST['submitted'];
require("connection.php");

$sql="insert into events(name,dname,pnumber,emailid,etype,eattendees,date,dvenue,price,status,description) values('$ename','$dname','$phone','$email','$etype','$nattendees','$date','$dvenue','$price','$status','$des')";
mysql_query($sql) or die(mysql_error());
if(!empty($_POST['status']))
{
	$query = mysql_query("UPDATE users SET status='0' WHERE etype='etype'") or die(mysql_error()); 
}

?>
