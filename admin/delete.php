<?php 

	   include 'dbconn.php';
 
       //delete data
       $delete_id=$_GET['user_id']; 
	   $query = "DELETE FROM STAFF WHERE STAFF_ID='$delete_id'";
	   $result = oci_parse( $dbconn,$query) or die("Query failed");
	   
	   
       if ($result)
		   
			echo '<script>alert("Delete Successfully!")</script>';
			echo "<a href='staff.php'> back to view </a>"; 
	    else
			echo "Problem occured !"; 
			oci_close($dbconn);   
?>