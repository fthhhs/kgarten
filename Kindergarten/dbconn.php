<?php
	session_start();
	// $user = "system";
	// $pass = "system";
	// $host = "localhost/XE";
	// $dbconn = oci_connect($user,$pass,$host);
	// if(!$dbconn){
	// 	$e = oci_error(); trigger_error(htmlentities($e['message'], ENT_QOUTES),E_USER_ERROR);
	// 	echo error;
	// }		

	$dbconn = oci_connect("system","system","localhost/XE");
	If (!$dbconn){
		echo "Failed to connect to Oracle";
		die;
	}


?>