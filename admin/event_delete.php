<?php
$id=$_GET['id'];
require('connection.php');
$sql="delete from event_table where id=$id";
mysql_query($sql);

?>

<script type="text/javascript" language="javascript">
alert("data deleted sucessfuly!");
window.location.href="fetch_event.php";
</script>