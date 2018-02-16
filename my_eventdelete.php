<?php
session_start();
$id=$_GET['id'];
require('connection.php');

$sql="select date from events where userid=".$_SESSION['id']."";
$result=mysql_query($sql) or die(mysql_error());
if($row=mysql_fetch_array($result))
   {
      $cr_date=$row['date'];
   }
  

if(date("m/d/Y")>=$cr_date)
{	
	$sql="update events set status=2 where id=$id";
	mysql_query($sql);
	header("location:my_event.php");
}

else if($cr_date<=date("m/d/Y")-7)
{
	$sql="update events set status=2 where id=$id";
	mysql_query($sql);
echo "<script type='text/javascript' language='javascript'>
alert('you have canceled your event!')
window.location.href='my_event.php'
</script>";

}

else

{
	echo "<script type='text/javascript' language='javascript'>
alert('you have canceled your event!')</script>";
	header("location:my_event.php");
}

?>

