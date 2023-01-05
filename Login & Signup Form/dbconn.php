<?php
/* php & Oracle DB connection file */
$user = "system";
$pass = "system";
$host = "localhost/XE";

$dbconn = oci_connect($user,$pass,$host);

if(!$dbconn){
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	?>