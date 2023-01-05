<?php
	include 'dbconn.php';
	
	if($_POST["submit"])
	{
		$STAFF_ID = $_POST['STAFF_ID'];
		$SUBJECT_ID = $_POST['SUBJECT_ID'];
		
				
				$query = "INSERT INTO STAFF_SUBJECT(STAFF_ID,SUBJECT_ID)
							   VALUES(:STAFF_ID, :SUBJECT_ID )";
							   
							   $result = oci_parse($dbconn,$query);
							   oci_bind_by_name($result, ':STAFF_ID', $STAFF_ID);
							   oci_bind_by_name($result, ':SUBJECT_ID', $SUBJECT_ID);
							   oci_execute($result);	
	}
	
	if($result) 
           {
			oci_commit($dbconn);
           Print '<script>alert("Data Submitted.");</script>'; 
           Print '<script>window.location.assign("staffSubject.php");</script>';
          }

		  
	
?>