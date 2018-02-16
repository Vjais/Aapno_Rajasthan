<?php
$id=$_GET['id'];
require('connection.php');
$sql="delete from events where id=$id";
mysql_query($sql);

?>

<script type="text/javascript" language="javascript">
alert("data deleted sucessfuly!");
window.location.href="fetch_status.php";
</script>