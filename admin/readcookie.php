<?php
echo $_COOKIE['username']."<br>";
echo $_COOKIE['password']."<br>";
?>

<a href="#">set cookie</a><br/>
<a href="deletecookie.php">delete cookie</a><br/>

<?php ob_flush(); ?>
