<?php
require("connection.php");
 function NewUser()
 {
	$userid=$_REQUEST['userid'];
	$passid=($_REQUEST['passid']);
	$username=$_REQUEST['username'];
	$address=$_REQUEST['address'];
	$country=$_REQUEST['country'];
	$zip=$_REQUEST['zip'];
	$email=$_REQUEST['email'];
	$gender=$_REQUEST['sex'];
	
	$sql="insert into users(username,passid,name,address,country,zip,email,gender)	values('$userid','$passid','$username','$address','$country','$zip','$email','$gender')";
	$data=mysql_query($sql) or die(mysql_error());
	if($data) 
		{ 
			echo "YOUR REGISTRATION IS COMPLETED..."; 
		} 
 }
  function SignUp() 
	 { 
	 	if(!empty($_POST['userid']))
		{ 
			$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[userid]' AND passid = '$_POST[passid]'") or die(mysql_error()); 
			
			if(mysql_num_rows($query)>0)	
			{ 
				echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
			} 
			else
			{
				NewUser();	
			}
		} 
	} 
	
	if(isset($_POST['submit'])) 
	{ 
		SignUp(); 
	} 
	
	
header("location:sign-up.html");
?>