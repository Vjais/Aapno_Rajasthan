<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include("header.php");?>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="contact_aa">
<header><img src="image/logo.png" id="sss"/></header>

<div id="main">
<?php include 'menus.php';?>
</div><!--main-->

<div id="contact_ab">

<div class="twothirds">
      <h1>Contact Us</h1>
                        <p>Please do not hesitate to contact us or complete our online quotation forms with any requirements or challenges concerning the needs for your special function!</p>
							 
							
							<p class="mobile"><Span>Cell: </Span>+919462960263 (Surmya Sharma)</p> 
							 
							<p class="mail"><span>E-mail: </span><a href="surmya1994@gmail.com">Click here to email the office!</a></p> 
                            
<div class="container_ab">
         <h1>Postal Address</h1>
              <p class="mail">62/98 Pratap Nagar<br>
                 Sanganer<br>
                     Jaipur<br>
                       Rajasthan<br />Pin: 302033</p>
		</div> <!--container_ab-->
                    
 
                   
                                               
</div><!---sdssad-->

</div><!--contact_ab-->
<?php include 'footer.php'; ?>
</div><!--contact_aa-->
</body>
</html>