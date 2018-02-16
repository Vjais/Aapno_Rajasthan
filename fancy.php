
<html>
 <head>
<style type="text/css">

</style>
<script type="text/javascript" src="fb/lib/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="fb/lib/jquery.mousewheel-3.0.6.pack"></script>
<link href="fb/source/jquery.fancybox.css" rel="stylesheet">
<script type="text/javascript" src="fb/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	
	$(".fancybox").fancybox();
});
</script>
</head>

<body "background-color:#777">
 
 <div class="field-content">
 <?php 
mysql_connect("localhost","root","");
mysql_select_db("admin");

$sql="select * from images";

$rs=mysql_query($sql);
$count=mysql_num_rows($rs);
	$i=1;	
		
while ($row=mysql_fetch_array($rs))
{
?>

<a href="<?php echo "admin/".$row['image'];?>" class="fancybox" 
	title="" class="colorbox js-hide init-colorbox-processed cboxElement" 
	rel="gallery-node-63-field_gallery" style="display:block;">
    
    <?php 
		if($i==count($row))
		{
		echo "Gallary";	
		}
		$i++;
	?>
    </a>
    
 
 
<?php  }  ?>
 
    </div>
 
 
<!--<a href="images/memorialchurch.jpg" class="fancybox" 
	title="Memorial Church" class="colorbox js-hide init-colorbox-processed cboxElement" 
	rel="gallery-node-63-field_gallery" style="display: block;">Gallery</a>
    
    <a href="images/Busch-Hall.jpg" class="fancybox" 
	title="Busch Hall" class="colorbox js-hide init-colorbox-processed cboxElement" 
	rel="gallery-node-63-field_gallery"></a>
	
	<a href="images/Home-Page-PG-Sunken.jpg" class="fancybox" 
	title="Sunken Garden" class="colorbox js-hide init-colorbox-processed cboxElement" 
	rel="gallery-node-63-field_gallery"></a>
	
	<a href="images/Home-Page-PG-CQH_0.jpg" class="fancybox" 
	title="Cambridge Queen's Head Pub" class="colorbox js-hide init-colorbox-processed cboxElement" 
	rel="gallery-node-63-field_gallery"></a>
	
	<a href="images/Home-Page-PG-HFC_0.jpg" class="fancybox" 
	title="Harvard Faculty Club" class="colorbox js-hide init-colorbox-processed cboxElement" 
	rel="gallery-node-63-field_gallery"></a>
    </div>-->
    </body>
    </html>