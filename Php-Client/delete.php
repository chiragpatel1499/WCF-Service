<?php
 
	session_start();
		
	$client = new SoapClient('http://localhost:8080/Reminder?wsdl');
	$client->soap_defencoding = 'UTF-8';
	$eid=$_GET["eventid"];
	$loginparam = array('UserId'=>$_SESSION["userid"],'eventId' => $eid);
	$client->deleteReminder($loginparam);
	header('Location:homepage.php?userid='.$_SESSION["userid"]);

?>
