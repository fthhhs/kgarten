<?php 

	   include 'dbconn.php';
 
       //delete data
       $delete_id=$_SESSION['TEACHER_ID'];
	   $query = "DELETE FROM TEACHER WHERE TEACHER_ID='$delete_id'";
	   $query1 = "DELETE FROM FULL_TIME WHERE TEACHER_ID='$delete_id'";
	   $query2 = "DELETE FROM PART_TIME WHERE TEACHER_ID='$delete_id'";
	   $result = oci_parse( $dbconn,$query);
	   $result1 = oci_parse( $dbconn,$query1);
	   $result2 = oci_parse( $dbconn,$query2);

	   oci_execute($result);
	   oci_execute($result1);
	   oci_execute($result2);
       if ($result && $result1 && $result2)
	   {   
			echo '<script>alert("Delete Successfully!")</script>';
			echo "<a href='staff.php'> back to view </a>"; 
	   }
	    else
		{
			echo "Problem occured !"; 
		}
?>