
<?php session_start();?>


 <?php
$id=$_REQUEST['id'];
require("connection.php");
$sql=" select * from images where id=$id";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include 'head.php'; ?>


</head>

<body>


<div style="margin-top:20px;">

<div id="admin">
Welcome: admin</div>

<div id="hm">
<a href="index-digital.php">Home</a>
</div>
<div style="clear: both;"></div>
<script>
	$("#imageform")[0].reset();
</script>
<h1>IMAGES OF EVENTS</h1>
<div id="upload-wrapper">
<div align="center">
<h3>Image Uploader</h3>
<form action="image_action.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data" id="MyUploadForm">


	
<input name="image" id="imageInput" type="file">
<img src='<?php echo $row['image'];?>' height='50px' width='50px'/>
 <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>"/>

<input type="submit" id="submit-btn" value="Upload">



</form>

<div id="output"></div>

</div>
</div>
</div>
</body>
</html>