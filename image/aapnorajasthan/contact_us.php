<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
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
                        <p>Please do not hesitate to contact us for your needs concerning for your tour</p>
							 
							
							<p class="mobile"><Span>Cell: </Span>+919460250008 (Abhishek Nokhwal)</p> 
							 
							<p class="mail"><span>E-mail: </span><a href="#">abhisheknokhwal1@gmail.com</a></p> 
                            
                            <p class="mobile"><Span>Cell: </Span>+919530271944 (Surmya Sharma)</p> 
							 
							<p class="mail"><span>E-mail: </span><a href="#">surmya1994@gmail.com</a></p>
                            <p class="mobile"><Span>Cell: </Span>+917791950328 (Jai Singh)</p> 
							 
							<p class="mail"><span>E-mail: </span><a href="#">Singh.jai7192@gmail.com</a></p>
                            
<div class="container_ab">
         <h1>Postal Address</h1>
              <p class="mail">Hotel Rambagh Palace<br>
             <br>Near Rambagh Circle, Jaipur<br>
                       Rajasthan<br />Pin: 302003</p>
		</div> <!--container_ab-->
                    
 
                   
                                               
</div><!---sdssad-->

</div><!--contact_ab-->
<?php include 'footer.php'; ?>
</div><!--contact_aa-->
</body>
</html>