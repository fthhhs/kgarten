<?php 
 include 'dbconn.php';
		
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{ 
		$id = $_SESSION['STAFF_ID'];
		$STAFF_NAME = $_POST['STAFF_NAME'];
		$STAFF_JOBTYPE = $_POST['STAFF_JOBTYPE'];
		$STAFF_PHONE = $_POST['STAFF_PHONE'];
		$STAFF_EMAIL = $_POST['STAFF_EMAIL'];
		$STAFF_ADDRESS = $_POST['STAFF_ADDRESS'];
		$STAFF_SALARY = $_POST['STAFF_SALARY'];
		$SUPERVISOR_ID = $_POST['SUPERVISOR_ID'];
		
       //Update data   
	   $query="UPDATE STAFF SET STAFF_NAME=:STAFF_NAME,STAFF_JOBTYPE=:STAFF_JOBTYPE,STAFF_PHONE=:STAFF_PHONE,STAFF_EMAIL=:STAFF_EMAIL,STAFF_ADDRESS=:STAFF_ADDRESS,STAFF_SALARY=:STAFF_SALARY,SUPERVISOR_ID=:SUPERVISOR_ID
        	   WHERE STAFF_ID='$id'" ;
	   $result = oci_parse( $dbconn,$query);
	   
		oci_bind_by_name($result,':STAFF_NAME',$STAFF_NAME);
		oci_bind_by_name($result,':STAFF_JOBTYPE',$STAFF_JOBTYPE);
		oci_bind_by_name($result,':STAFF_PHONE',$STAFF_PHONE);
		oci_bind_by_name($result,':STAFF_EMAIL',$STAFF_EMAIL);
		oci_bind_by_name($result,':STAFF_ADDRESS',$STAFF_ADDRESS);
		oci_bind_by_name($result,':STAFF_SALARY',$STAFF_SALARY);
		oci_bind_by_name($result,':SUPERVISOR_ID',$SUPERVISOR_ID);
		
	   oci_execute($result);
		}
	   
        if ($result)
		{
			oci_commit($dbconn);
			Print '<script>alert("Update Successfully");</script>'; 
			Print '<script>window.location.assign("staff.php");</script>'; 
		}
		else
		{ 
			echo '<script>alert("Error!")</script>';	
		}
		
?>