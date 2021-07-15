<?php
	
	session_destroy();
     unset($_SESSION);
	echo "<h1>se ".$_SESSION['email_lg']."</h1>";
	
	header('Location:AdminLogin.php');
?>