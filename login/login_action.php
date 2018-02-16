<?php 
session_start();

$uname=$_REQUEST['txtuname'];
$password=md5($_REQUEST['txtpass']);

require("connection.php");


$sql="select * from users where username='$uname' and passid='$password'";

$result=mysql_query($sql);

if(mysql_num_rows($result)>0)
{
	$_SESSION['login']="true";
	$row=mysql_fetch_assoc($result);
	$_SESSION['name']=$row['name'];
	$_SESSION['id']=$row['id'];	
?>		
	<script type="text/javascript" language="javascript">
	alert("Login Successfully");
	window.location.href="../my_event.php";
	
</script>
	


<?php 
}
else
{
?>
<script type="text/javascript" language="javascript">
	alert("Invalid username and password");
	window.location.href="login_form.php";
	
</script>

<?php 
} 
?>
