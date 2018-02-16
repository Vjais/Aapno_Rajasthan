<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login form</title>
<link rel="stylesheet" href="login.css" type="text/css" />
<link rel="stylesheet" href="style/event.css" type="text/css" />

</head>

<body background="../image/camels__thar_desert__india.jpg">
<div id="log_ss">
<header><img src="../image/logo.png" id="sss"/></header>
<div id="menu">
<?php //include "../menus.php"; ?>

</div>

<div id="login_aa">
  
  <fieldset style="width:400px; margin-top:auto; margin-bottom:auto;"><legend>Login Form</legend>
<form action="login_action.php" method="post" >

<ul>  
		<li><label for="userid">User Name:</label></li>
          
		<li><input type="text" name="txtuname" size="12" placeholder="User Name"/></li>  
		<li><label for="passid">Password:</label></li>  
		<li><input type="password" name="txtpass" size="12" placeholder="Password" /></li>
          
<input type="submit" id="submit" value="Login" />
</ul>
</form>
</fieldset>
</div>

<footer>
<nav><a href="../index.php">Home</a> | 
     <a href="../event.php">Festivals</a> | 
     <a href="../service.php">Book a Tour</a> | 
     <a href="#">Privacy PolicY</a> | 
     <a href="#"> Contact Us</a>
 </nav>
</footer>
</div>
</body>
</html>