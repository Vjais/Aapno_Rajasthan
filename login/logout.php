<?php 
session_start();
session_destroy();

?>
<script type="text/javascript" language="javascript">
	alert("Logout Successfully");
	window.location.href="login_form.php";
	
</script>
