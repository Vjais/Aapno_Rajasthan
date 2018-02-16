<?php
require("connection.php");
 function Tour()
 {
	 $arrival=$_REQUEST['Arrival'];
	 $departure=$_REQUEST['Departure'];
	 $adults=$_REQUEST['Adults'];
	 $children=$_REQUEST['Children'];
	 $budget=$_REQUEST['Budget'];
	 $hotel=$_REQUEST['Hotel'];
	 $occupancy=$_REQUEST['Occupancy'];
	 $name=$_REQUEST['Name'];
	 $email=$_REQUEST['Email'];
	 $phone=$_REQUEST['Phone'];
	 $address=$_REQUEST['Address'];
	 $city=$_REQUEST['City'];
	 $country=$_REQUEST['Country'];
 
 $sql="insert into tour(arrival,departure,adults,children,budget,hotel,occupancy,name,email,phone,address,city,country)
 values('$arrival','$departure','$adults','$children','$budget','$hotel','$occupancy','$name','$email',phone,'$address','$city','$country')";

 $data=mysql_query($sql) or die(mysql_error());
	if($data) 
		{ 
			echo "YOUR REGISTRATION IS COMPLETED..."; 
		} 
 }
 
 
 
 
  function SignUp() 
	 { 
	
	if($_POST['Email'] !='')
		{ 
	
	$query = mysql_query("SELECT * FROM tour WHERE email = '".$_POST['Email']."'") or die(mysql_error()); 
			
			if(mysql_num_rows($query)>=1)	
			{ 
				echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
			} 
			else
			{
				Tour();	
			}
		} 
	} 
	
		SignUp(); 
	header("location:index.php");
	
	

?>