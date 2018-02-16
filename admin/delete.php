<?php
$id=$_GET['id'];
require('connection.php');
$sql="delete from images where id=$id";
mysql_query($sql);

?>

<script type="text/javascript" language="javascript">
alert("data deleted sucessfuly!");
window.location.href="image_fetch.php";
</script>