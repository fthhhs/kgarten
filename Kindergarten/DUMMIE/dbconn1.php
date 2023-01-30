<?php
	// session_start();
	// $user = "system";
	// $pass = "system";
	// $host = "localhost/XE";
	// $dbconn = oci_connect($user,$pass,$host);
	// if(!$dbconn){
	// 	$e = oci_error(); trigger_error(htmlentities($e['message'], ENT_QOUTES),E_USER_ERROR);
	// }	
	
	$conn = oci_connect("system","system","localhost/XE");
	If (!$conn){
		echo "Failed to connect to Oracle";
		die;
	}

?>
<!-- Notice: session_start(): A session had already been started - ignoring in C:\xampp\htdocs\kgarten\Kindergarten\dbconn1.php on line 2 -->