<?php 

	   include 'dbconn.php';
 
       //delete data
       $delete_id=$_SESSION['STAFF_ID'];
	   $query = "DELETE FROM STAFF WHERE STAFF_ID='$delete_id'";
	   $result = oci_parse( $dbconn,$query);
	   oci_execute($result);
	   
       if ($result)
	   {   
			echo '<script>alert("Delete Successfully!")</script>';
			echo "<a href='staff.php'> back to view </a>"; 
	   }
	    else
		{
			echo "Problem occured !"; 
		}
?>