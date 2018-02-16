<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include "head.php";?>
<?php session_start();?>

<style type="text/css">
#table_event {
	height: 200px;
	width: 100%;
	
	float: left;
}
#table_event h1 {
	font-size: 5em;
	font-family: Verdana, Geneva, sans-serif;
	color: #6C496F;
	text-align: center;
	text-shadow:5px 5px 5px;
}
</style>
</head>

<body>
<div id="table_event">
<div style="float:left;margin-left:50px;">
Welcome :admin</div>

<div style="float:right;margin-right:50px;">
<a href="index-digital.php">Back</a>
</div>
<h1>EVENTS</h1>
</div>
<table id="table" width="100%" border="2">
  <caption>
    EVENT DATABASE TABLE
  </caption>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">NAME</th>
    <th scope="col">DNAME</th>
    <th scope="col">PHONE NO.</th>
    <th scope="col">EMIAL-ID</th>
    <th scope="col">EVENTS</th>
    <th scope="col">ATTENDEES</th>
    <th scope="col">DATE</th>
    <th scope="col">VENUE</th>
    <th scope="col">PRICE</th>
    <th scope="col">STATUS</th>
    <th scope="col">DESCRIPTION</th>
    <th scope="col">EDIT</th>
    <th scope="col">DELETE</th>
  </tr>
  
  <?php
require("connection.php");
$sql="select * from events";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result))
{
	
	
	if($row['status']==0)
	{
	$color="green";	
	$status="Not Booked";
	}
	else if($row['status']==1)
	{
	$color="Red";	
	$status="Booked";
	}
	else
	{
	$color="Blue";	
	$status="cancelled";
	
	}
	
	
echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['dname']."</td><td>".$row['pnumber']."</td><td>".$row['emailid']."</td><td>".$row['etype']."</td><td>".$row['eattendees']."</td><td>".$row['date']."</td><td>".$row['dvenue']."</td><td>".$row['price']."</td><td><font color=$color>$status</font></td><td>".$row['description']
	."</td><td><a href='update_status.php?id=".$row['id']."'>
	edit</a>"."</td><td><a href='delete_status.php?id=".$row['id']."' onclick='return conf()'>delete</a>"."</td></tr>";
}
?>

</table>
<script type="text/javascript" language="javascript">
function conf()
{
	var a=confirm("do u really want to do it?");
	if(a==true)
	return true;
	else
	return false;
}
</script>


</body>
</html>