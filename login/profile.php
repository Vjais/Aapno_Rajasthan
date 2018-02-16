<?php 
session_start();
if(isset($_SESSION['login']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Profile</title>
</head>

<body>
Welcome <?php echo $_SESSION['name'];?>
<br />

<p align="right"><a href="logout.php" title="logout">Logout</a></p>
</body>
</html>

<?php 
}
else
{
?>
<script type="text/javascript" language="javascript">
	alert("session timeout plese login first");
	window.location.href="../login_form.php";
	
</script>

<?php 
} 
?>
