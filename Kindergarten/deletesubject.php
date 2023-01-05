<?php 

	   include 'dbconn.php';
 
       //delete data
       $delete_id=$_GET['user_id'];    
	   $query = "DELETE FROM STAFF_SUBJECT WHERE STAFF_ID='$delete_id'";
	   $result = oci_parse( $dbconn,$query);
	   oci_execute($result);
		
		if($result) 
     {
     oci_commit($dbconn);
     Print '<script>alert("Delete Successfully");</script>'; 
     Print '<script>window.location.assign("staffSubject.php");</script>';
     }
?>