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
Welcome : <?php echo $_SESSION['name'];?></div>

<div style="float:right;margin-right:50px;">
<a href="index-digital.php">Back</a>
</div>
<h1>USER DETAILS</h1>
</div>
<table id="table" width="100%" border="2">
  <caption>
    EVENT DATABASE TABLE
  </caption>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">USERNAME</th>
    <th scope="col">NAME</th>
    <th scope="col">ADDRESS</th>
    <th scope="col">COUNTRY</th>
    <th scope="col">ZIP</th>
    <th scope="col">EMAIL</th>
    <th scope="col">GENDER</th>
  </tr>
  
  <?php
require("connection.php");
$sql="select * from users";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result))
{
echo "<tr 
	><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['country']."</td><td>".$row['zip']."</td><td>".$row['email']."</td><td>".$row['gender'];
}
?>

</table>



</body>
</html>