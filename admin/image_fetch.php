<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include "head.php";?>


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
Welcome: admin</div>

<div style="float:right;margin-right:50px;">
<a href="adminevent.php">Back</a>
</div>
<h1>EVENTS</h1>
</div>
<table id="table" width="100%" border="2">
  <caption>
    EVENT DATABASE TABLE
  </caption>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Image</th>
    <th scope="col">Edit</th>
    <th scope="col">Delete</th>
  </tr>
  
  <?php
require("connection.php");
$sql="select * from images";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result))
{
echo "<tr 
	><td>".$row['id']."</td><td>"."<img src='".$row['image']."' height='50px' width='50px'>"
	."</td><td><a href='edit_image.php?id=".$row['id']."'>
	edit</a>"."</td><td><a href='delete.php?id=".$row['id']."' onclick='return conf()'>delete</a>"."</td></tr>";
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