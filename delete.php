<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_GET['id'];
mysql_connect("localhost","root","12345");
mysql_select_db("regstration");
$sql="delete form registration where id=$id;
mysql_query($sql);
?>
<script type="text/javascript" language="javascript">
alert("data deleted");
window.location.href="dbfecthtab.php";
</script>
</body>
</html>