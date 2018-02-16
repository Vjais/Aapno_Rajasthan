<link rel="stylesheet" type="text/css" href="fetch.css" />
<div id="main">
<div id="header">
<h1>Admin Panel</h1>
<div id="right">
<font color="#FFFFFF" size="+3">welcome <?php echo $_SESSION['name']; ?></font><a href="logout.php">logout</a>
</div>
</div>
<table id="table"border="1px solid black">
<caption>USER DATA TABLE</caption>
<th>id</th>
<th>name</th>
<th>description</th>
<th>edit</th>
<th>delete</th>
<?php
require("connection.php");
$sql="select * from event_table";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result))
{
echo "<tr 
	><td>".$row['id']."</td><td>".$row['event_name']."</td><td>".$row['description']
	."</td><td><a href='edit_event.php?id=".$row['id']."'>
	edit_form</a>"."</td><td><a href='event_delete.php?id=".$row['id']."' onclick='return conf()'>delete</a>"."</td></tr>";
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
</div>
