<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AAPNO RAJASTHAN</title>
<link rel="stylesheet" href="style/event.css" type="text/css">
<link rel="stylesheet" href="style/meeting.css" type="text/css">
<link rel="stylesheet" href="style/contacte.css" type="text/css">

<link rel="stylesheet" href="jquery/jquery-ui.css" type="text/css">
  <script type="text/javascript" src="jquery/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery/jquery-ui.js" language="javascript"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script type="text/javascript" src="scripts/contact.js" language="javascript"></script>
  <script type="text/javascript" src="jquery/jquery.validate.min.js" language="javascript"></script>
  <script type="text/javascript" src="scripts/contact.js" language="javascript"></script>
  <script type="text/javascript">

  $(function() {
    $( "#edit-submitted-event-date" ).datepicker();
  });

  </script>

  
</head >
<body onload="filltext();">
<div id="contact_event">
<header><img src="images/Rewind.png" id="sss"/> </header>

<div id="main">
<ul>
  		<li><a href="contact.php">Create-Event</a></li>
     	<li><a href="my_event.php">My Events</a></li>
	 	<!--<li><a href="#">Services</a></li>-->
 	</ul>
</div><!-- end of main-->

		<div id="main_cont">
		  <div id="head">
            <div id="hd_cont">
              <div id="abc">Contact Event Planer</div>
            </div>
            <div id="cba">Please fill out this quick form to start planning your event at a Harvard venue</div>
          </div><!--end of head-->
          
          <div id="textbox">
          
         <div id="black"></div>
         <div id="maincc">
         <form action="contact_action.php" name="formid" id="register-form" method="post" novalidate="novalidate" onSubmit="return formValidation();" >
<div id="name">
  
  <input type="name" id="edit-submitted-name" name="name" class="form-textarea" value="" placeholder="Name" size="50" maxlength="128" style="color: rgb(000, 000, 000);" onclick="clrtext()" onblur="textval()">
</div>

   <div id="department">
   
 <input type="text" id="edit-submitted-department" name="dname" class="form-textarea" value="" placeholder="Department Name" size="50" maxlength=" " style="color: rgb(000, 000, 000);" onclick="clrdept()" onblur="dept()";>
</div>

 <div id="phones">
   <input type="text" id="edit-submitted-phone" name="pnumber" class="form-textarea" value="" placeholder="Phone Number" size="50" maxlength=" " style="color: rgb(000, 000, 000);" onclick="clrphone()" onblur="phone()" />
 </div>

 <div id="emails">
 <input type="email" id="edit-submitted-email" name="emailid" class="form-textarea" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="" placeholder="E-mail" size="50" maxlength=" " style="color: rgb(000, 000, 000);" onclick="clremail()" onblur="email()">
</div>

<div id="event_type">
  <select id="edit-submitted-event-type" name="etype" class="form-select">
    <option selected="selected" disabled="disabled">EVENT TYPE</option>
    <option>Catered Events</option>
    <option>Meetings and Conferences</option>
    <option>Outdoor Events</option>
    <option>Special Events</option>
    <option>Summer Conferences</option>
    <option>Weddings</option>
  </select>
</div>

<div id="number_of_attendees">
<select id="edit-submitted-number-of-attendees" name="eattendees" class="form-select" onblur="cost();">
<option selected="selected" disabled="disabled">NUMBER OF ATTENDEES</option>
<option>1 to 10</option>
<option>11 to 50</option>
<option>51 to 100</option>
<option>101 to 200</option>
<option>201 to 500</option>
<option >500+</option>
</select>
</div>

<div id="event_date">

<input name='date_allow_empty' type="text" id="edit-submitted-event-date" value=""  size="60" maxlength="128" class="form" style="color: rgb(102, 102, 102);" onclick="clrdate()" onblur="date()"/>
</div>
<?php 
require("connection.php");
$sql="select * from events";
$rs=mysql_query($sql);
while ($row=mysql_fetch_array($rs))
{
	
	
	
}



?>



<div id="desired_venue">
<select name="dvenue" class="form-select" id="edit-submitted-desired-venue" >
<option value="" selected="selected" disabled="disabled">DESIRED VENUE</option>
<option >Adolphus Busch Hall</option>
<option >Adolphus Busch Hall and Garden</option>
<option >Arthur M. Sackler Museum</option>
<option >Cambridge Queen's Head pub</option>
<option >Center for European Studies</option>
<option >CGIS</option>
<option >Fay House</option>
<option >Harvard Faculty Club</option>
<option >Harvard Football Tailgating</option>
<option >Harvard Information Center</option>
<option >Museum of Natural History</option>
<option>Hillel House</option>
<option >Loeb House</option>
<option >Memorial Church</option>
<option >Memorial Hall</option>
<option>Northwest Building</option>
<option >Peabody Museum of Archaeology &amp; Ethnology</option>
<option >Radcliffe Yard</option>
<option >The Plaza Tent</option>
<option >The Science Center</option>
</select>
</div>
<div id="cost">
  <input type="text" id="price" name="price" class="form-textarea" readonly="readonly" placeholder="Total Price" onclick="clrprice()" onblur="price()"/>
</div>

<div id="status">
  <select name="status" class="form-textarea" id="edit_status">
  <option value="0">disable</option>
  <option value="1">enable</option>
  </select>
</div>


<div id="text_area">
<textarea id="edit-submitted-describe-your-event" name="submitted" cols="60" rows="5" class="form-textarea" style="color: rgb(102, 102, 102);" onclick="clrtextarea()" onblur="textarea()"></textarea>
</div>
<div id="submit">
<input type="submit" name="submit" value="Submit"/>
</div>

</form>
         </div><!--end of maincc-->
         
          </div><!-- end of textbox-->
        </div><!-- end of main_cont-->
        <?php include 'footer.php';?>
</div>
<script type="text/javascript">

function start() {
  filltext();
}
window.onload = start;



function filltext()
{
	
	document.getElementById("edit-submitted-name").value="*NAME";
	document.getElementById("edit-submitted-department").value="*DEPARTMENT / COMPANY NAME";
	document.getElementById("edit-submitted-phone").value="*PHONE NO.";
	document.getElementById("edit-submitted-email").value="*E-MAIL ID";
	document.getElementById("edit-submitted-describe-your-event").value="DESCRIBE YOUR EVENT";
	document.getElementById("edit-submitted-event-date").value="*EVENT DATE";
	document.getElementById("price").value="*TOTAL PRICE";
	document.getElementById("edit_status").value="*STATUS";
		
}

function clrtext()
{
	document.getElementById("edit-submitted-name").value="";
}
function clrdept()
{
	document.getElementById("edit-submitted-department").value="";
}
function clrphone()
{
	document.getElementById("edit-submitted-phone").value="";
}
function clremail()
{
	document.getElementById("edit-submitted-email").value="";	
}
function clrtextarea()
{
	document.getElementById("edit-submitted-describe-your-event").value="";	
}

function clrdate()
{
	document.getElementById("edit-submitted-event-date").value="";	
}
function clrprice()
{
	document.getElementById("price").value="";
}
function clrstatus()
{
	document.getElementById("edit_status").value="";
}

<!---------------------------------------------------------------------->
function textval()
{	
	if(document.getElementById("edit-submitted-name").value=="")
	{
		document.getElementById("edit-submitted-name").value="*NAME";		
	}
}   
 
function dept()
{   
	
	if(document.getElementById("edit-submitted-department").value=="")
	{
		document.getElementById("edit-submitted-department").value="*DEPARTMENT / COMPANY NAME";		
	}	
	
}

function phone()
{   
	
	if(document.getElementById("edit-submitted-phone").value=="")
	{
		document.getElementById("edit-submitted-phone").value="*PHONE NO.";		
	}	
	
}

function email()
{   
	
	if(document.getElementById("edit-submitted-email").value=="")
	{
		document.getElementById("edit-submitted-email").value="*EMAIL ID";		
	}	
	
}
function date()
{   
	
	if(document.getElementById("edit-submitted-event-date").value=="")
	{
		document.getElementById("edit-submitted-event-date").value="*EVENT DATE";		
	}	
	
}
/*
function price()
{   
	
	if(document.getElementById("price").value=="")
	{
		document.getElementById("price").value="*TOTAL PRICE";		
	}	
	
}
*/
function status()
{   
	
	if(document.getElementById("edit_status").value=="")
	{
		document.getElementById("edit_status").value="*STATUS";		
	}	
	
}



	function cost()
	{
	
	
	var attnd=document.getElementById("edit-submitted-number-of-attendees").selectedIndex;
	var etyp=document.getElementById("edit-submitted-event-type").selectedIndex;	
	
	switch(attnd && etyp)
	{
		
	case 1: var attendee=5000;
			var etype=1000;
			break;	
		
	
	case 2: var attendee=10000;
			var etype=5000;
			break;
	
	
	case 3: var attendee=15000;
			var etype=10000;
			break;
			
	
	case 4: var attendee=20000;
			var etype=20000;
			break;
	
	case 5: var attendee=25000;
			var etype=50000;
			break;
		
	
	case 6: var attendee=30000;
			var etype=100000;
			break;
		
		
	default: alert("please select event type and number of attendies!");
				break;
	}
	
	
	var cst=Number(attendee)+Number(etype);

	document.getElementById("price").value=cst+"/- INR";
	}
	


</script>

</body>
</html>
