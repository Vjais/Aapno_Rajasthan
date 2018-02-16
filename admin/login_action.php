<?php
session_start();
$username=$_REQUEST['username'];
$password=md5($_REQUEST['password']);
require("connection.php");
$sql="select * from  admin_login where username='$username' and password='$password'";

$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
{
	
	$_SESSION['login']="true";
	$row=mysql_fetch_assoc($result);
	$_SESSION['name']=$row['username'];
?>
	<script type="text/javascript" language="javascript">
	alert("login successful");
	window.location.href="index-digital.php";
	
</script>
<?php
}
else
{
?>
<script type="text/javascript" language="javascript">
	alert("Invalid username and password");
	window.location.href="login_admin.php";
	
</script>
<?php	
}
?>





