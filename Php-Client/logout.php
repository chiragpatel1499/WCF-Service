<?php
	    
		session_start();
		if($_SESSION["userid"])
		{
			
		}
		else{header('Location:login.php');}
	session_destroy();
	header('Location:login.php');
?>