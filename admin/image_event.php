<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php include 'head.php'; ?>
<?php session_start();?>

</head>

<body>


<div style="margin-top:20px;">

<div id="admin">
Welcome :<?php echo $_SESSION['name'];?></div>

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
<form action="upload_image.php" method="post" enctype="multipart/form-data" id="MyUploadForm">


	
<input name="image" id="imageInput" type="file">

<input type="submit" id="submit-btn" value="Upload">&nbsp;&nbsp;&nbsp;

<input type="button" id="submit-btn" onClick="location.href='image_fetch.php'" value="edit">


</form>

<div id="output"></div>

</div>
</div>
</div>
</body>
</html>