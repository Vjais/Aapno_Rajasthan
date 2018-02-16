<html>
<head>
<?php include "head.php";?>
<?php session_start();?>
</head>

<body  style="font-family:verdana;">


<div style="margin-top:20px;">

<div style="float:left;margin-left:50px;">
Welcome :<?php echo $_SESSION['name'];?></div>

<div style="float:right;margin-right:50px;">
<a href="index-digital.php">Home</a>
</div>

</div>

<div style="clear: both;"></div>

<h1>EVENTS</h1>

<form id="form1" name="form1" class="white-pink" action="event_action.php" method="POST">
	<label>
        <span>Event Name:</span>
        <input type="text" id="event_name" name="event" value="" required autofocus>
    </label>
	<label>
        <span>Event Description:</span>
        <textarea id="event_description" name="event_description"></textarea>
    </label>
	<label>
        <span>&nbsp;</span> 
        <input type="submit" id="submit" name="submit" value="Submit" class="button">
		<input type="reset" value="Reset" class="button">
		<input type="button" onClick="location.href='fetch_event.php'" value="Edit" class="button">
    </label>
</form>

<center><h2><p id="info1"></p></h2></center>

//<script type="text/javascript">
	/*$('#form1').submit(function(event) {
	
		event.preventDefault();
		
		//alert($(this).serialize());
		
		$.ajax({
			type: 'POST',
			url: 'event_back.php',
			data: $(this).serialize(),
			dataType: 'json',
			success: function (data) {
				console.log(data);
				$('#info1').html(data.msg);
				$("#form1")[0].reset();
			}
		});		
	});*/
</script>


</body></html>