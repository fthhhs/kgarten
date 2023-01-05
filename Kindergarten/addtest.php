<?php
	include 'dbconn.php';
	
	if($_POST["submit"])
	{
		$STAFF_ID = $_POST['STAFF_ID'];
		$STAFF_NAME = $_POST['STAFF_NAME'];
		$STAFF_JOBTYPE = $_POST['STAFF_JOBTYPE'];
		$STAFF_PHONE = $_POST['STAFF_PHONE'];
		$STAFF_EMAIL = $_POST['STAFF_EMAIL'];
		$STAFF_ADDRESS = $_POST['STAFF_ADDRESS'];
		$STAFF_GENDER = $_POST['STAFF_GENDER'];
		$STAFF_STATUS = $_POST['STAFF_STATUS'];
		$STAFF_SALARY = $_POST['STAFF_SALARY'];
		$SUPERVISOR_ID = $_POST['SUPERVISOR_ID'];
		$STAFF_DOB = $_POST['STAFF_DOB'];
		$EDUCATIONAL_TYPE = $_POST['EDUCATIONAL_TYPE'];
		$OVERTIME_HOURS = $_POST['OVERTIME_HOURS'];	
		$SUBJECT_ID = $_POST['SUBJECT_ID'];
	
	
	   $sqlempic = oci_parse($dbconn,"SELECT * FROM STAFF ");
                   oci_execute($sqlempic);
	
		$query = "INSERT
                  INTO STAFF(STAFF_ID, STAFF_NAME, STAFF_JOBTYPE, STAFF_PHONE, STAFF_EMAIL, STAFF_ADDRESS, STAFF_GENDER, STAFF_STATUS, STAFF_SALARY, SUPERVISOR_ID,STAFF_DOB)
                  VALUES (:STAFF_ID, :STAFF_NAME, :STAFF_JOBTYPE, :STAFF_PHONE, :STAFF_EMAIL, :STAFF_ADDRESS, :STAFF_GENDER, :STAFF_STATUS, :STAFF_SALARY, :SUPERVISOR_ID, TO_DATE('$STAFF_DOB', 'YYYY-MM-DD'))";
				  
		$result = oci_parse($dbconn,$query);
		
                  oci_bind_by_name($result, ':STAFF_ID', $STAFF_ID);
                  oci_bind_by_name($result, ':STAFF_NAME', $STAFF_NAME);
				  oci_bind_by_name($result, ':STAFF_JOBTYPE', $STAFF_JOBTYPE); 
				  oci_bind_by_name($result, ':STAFF_PHONE', $STAFF_PHONE);
				  oci_bind_by_name($result, ':STAFF_EMAIL', $STAFF_EMAIL);
				  oci_bind_by_name($result, ':STAFF_ADDRESS', $STAFF_ADDRESS);
				  oci_bind_by_name($result, ':STAFF_GENDER', $STAFF_GENDER);
				  oci_bind_by_name($result, ':STAFF_STATUS', $STAFF_STATUS);
				  oci_bind_by_name($result, ':STAFF_SALARY', $STAFF_SALARY);
				  oci_bind_by_name($result, ':SUPERVISOR_ID', $SUPERVISOR_ID);
				  oci_execute($result);
				  
				  
				  if($STAFF_STATUS == 'FULL_TIME')
				{
					$query = "INSERT INTO FULL_TIME(STAFF_ID,EDUCATIONAL_TYPE)
							   VALUES(:STAFF_ID, :EDUCATIONAL_TYPE)";
							   
							   $result = oci_parse($dbconn,$query);
							   oci_bind_by_name($result, ':STAFF_ID', $STAFF_ID);
							   oci_bind_by_name($result, ':EDUCATIONAL_TYPE', $EDUCATIONAL_TYPE);
							   oci_execute($result);
			
				}
				else
				{
					$query = "INSERT INTO PART_TIME(STAFF_ID,OVERTIME_HOURS)
							   VALUES(:STAFF_ID, :OVERTIME_HOURS)";
							   
							   $result = oci_parse($dbconn,$query);
							   oci_bind_by_name($result, ':STAFF_ID', $STAFF_ID);
				               oci_bind_by_name($result, ':OVERTIME_HOURS', $OVERTIME_HOURS);
							   oci_execute($result);
				}
				
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
           Print '<script>window.location.assign("staff.php");</script>';
          }
		  
	
?>