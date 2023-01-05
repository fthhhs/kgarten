<?php
include("dbconn.php");
$id = $_GET['user_id'];
$sql = "DELETE FROM STAFF WHERE STUFF_ID ='$id'";
$result = oci_parse($dbconn, $sql);
oci_execute($result);
 Print '<script>window.location.assign("staff.php");</script>'; 
 
 
 
 
 
 
 
 
/*
TGOK BAWAH LAGI
*/




































/*
LAGI BAWAH
*/







































/*
SYG NI JUMLAH HUTANG SYGGG EHEKKKKKK
*/
?>