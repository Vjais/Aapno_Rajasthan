<?php 
session_start();
if(isset($_SESSION['login']))
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include'header.php'; ?>

</head>

<body>
<div id="myevent">
  <header><img src="images/Rewind.png" id="sss"/></header>
  <div id="main">
  	<ul>
  		<li><a href="contact.php">Create-Event</a></li>
     	<li><a href="my_event.php">My Events</a></li>
	 	<!--<li><a href="#">Services</a></li>-->
 	</ul>
  </div><!--main-->
  <div id="myevent_aa">
  	
    <div id="myevent_ab">
    <div id="evenleft">
    <h3>My Events</h3>
    </div>
    <div id="eventright">
    <p>Welcome :<?php echo $_SESSION['name'];?>
<a href="login/logout.php" title="logout">Logout</a></p>
    </div>

    </div>
    <div id="myevent_ac">
    <div id="sssss"></div>
<table width="900" border="1">
  <caption>
    MY EVENT TABLE
  </caption>
  <tr>
    <th scope="col">Event TYPE</th>
    <th scope="col">ATTENDEES</th>
    <th scope="col">EVENUE</th>
    <th scope="col">STATUS</th>
    <th scope="col">DATE</th>
    <th scope="col">Cancel</th>
  </tr>
  
  <?php
require("connection.php");

$sql="select * from events where userid=".$_SESSION['id']."";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
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
	
echo "<tr 
	><td>".$row['etype']."</td><td>".$row['eattendees']."</td><td>".$row['dvenue']."</td><td><font color=$color>$status</font>"."</td><td>".$row['date']
	."</td><td><a href='my_eventdelete.php?id=".$row['id']."' onclick='return conf()'>Cancel Booking</a>"."</td></tr>";
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
  </div><!--myevent_aa-->
  <?php include 'footer.php';?>
</div><!--myevent-->
</body>
</html>
<?php 
}
else
{
?>
<script type="text/javascript" language="javascript">
	alert("session timeout plese login first");
	window.location.href="login/login_form.php";
	
</script>

<?php 
} 
?>
