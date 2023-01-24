<?php
	include 'dbconn.php';
	
	if($_POST["submit"])
	{
		$TEACHER_ID = $_POST['TEACHER_ID'];
		$TEACHER_NAME = $_POST['TEACHER_NAME'];
		$TEACHER_PHONE = $_POST['TEACHER_PHONE'];
		$TEACHER_EMAIL = $_POST['TEACHER_EMAIL'];
		$TEACHER_ADDRESS = $_POST['TEACHER_ADDRESS'];
		$TEACHER_GENDER = $_POST['TEACHER_GENDER'];
		$TEACHER_STATUS = $_POST['TEACHER_STATUS'];
		$TEACHER_SALARY = $_POST['TEACHER_SALARY'];
		$SUPERVISOR_ID = $_POST['SUPERVISOR_ID'];
		$TEACHER_DOB = $_POST['TEACHER_DOB'];
		$EDUCATIONAL_TYPE = $_POST['EDUCATIONAL_TYPE'];
		$OVERTIME_HOURS = $_POST['OVERTIME_HOURS'];	
		$SUBJECT_ID = $_POST['SUBJECT_ID'];
	
	
	   $sqlempic = oci_parse($dbconn,"SELECT * FROM TEACHER ");
                   oci_execute($sqlempic);
	
		$query = "INSERT
                  INTO TEACHER (TEACHER_ID, TEACHER_NAME, TEACHER_PHONE, TEACHER_EMAIL, TEACHER_ADDRESS, TEACHER_GENDER, TEACHER_STATUS, TEACHER_SALARY, SUPERVISOR_ID,TEACHER_DOB)
                  VALUES (:TEACHER_ID, :TEACHER_NAME, :TEACHER_PHONE, :TEACHER_EMAIL, :TEACHER_ADDRESS, :TEACHER_GENDER, :TEACHER_STATUS, :TEACHER_SALARY, :SUPERVISOR_ID, TO_DATE('$TEACHER_DOB', 'YYYY-MM-DD'))";
				  
		$result = oci_parse($dbconn,$query);
		
			oci_bind_by_name($result, ':TEACHER_ID', $TEACHER_ID);
			oci_bind_by_name($result, ':TEACHER_NAME', $TEACHER_NAME);
			oci_bind_by_name($result, ':TEACHER_PHONE', $TEACHER_PHONE);
			oci_bind_by_name($result, ':TEACHER_EMAIL', $TEACHER_EMAIL);
			oci_bind_by_name($result, ':TEACHER_ADDRESS', $TEACHER_ADDRESS);
			oci_bind_by_name($result, ':TEACHER_GENDER', $TEACHER_GENDER);
			oci_bind_by_name($result, ':TEACHER_STATUS', $TEACHER_STATUS);
			oci_bind_by_name($result, ':TEACHER_SALARY', $TEACHER_SALARY);
			oci_bind_by_name($result, ':SUPERVISOR_ID', $SUPERVISOR_ID);
			oci_execute($result);
			
			
			if($TEACHER_STATUS == 'FULL TIME')
		{
			$query = "INSERT INTO FULL_TIME(TEACHER_ID,EDUCATIONAL_TYPE)
						VALUES(:TEACHER_ID, :EDUCATIONAL_TYPE)";
						
				$result = oci_parse($dbconn,$query);
				oci_bind_by_name($result, ':TEACHER_ID', $TEACHER_ID);
				oci_bind_by_name($result, ':EDUCATIONAL_TYPE', $EDUCATIONAL_TYPE);
				oci_execute($result);
	
		}
		else
		{
			$query = "INSERT INTO PART_TIME(TEACHER_ID,OVERTIME_HOURS)
						VALUES(:TEACHER_ID, :OVERTIME_HOURS)";
						
				$result = oci_parse($dbconn,$query);
				oci_bind_by_name($result, ':TEACHER_ID', $TEACHER_ID);
				oci_bind_by_name($result, ':OVERTIME_HOURS', $OVERTIME_HOURS);
				oci_execute($result);
		}
		
		$query = "INSERT INTO TEACHER_SUBJECT(TEACHER_ID,SUBJECT_ID)
						VALUES(:TEACHER_ID, :SUBJECT_ID )";
						
			$result = oci_parse($dbconn,$query);
			oci_bind_by_name($result, ':TEACHER_ID', $TEACHER_ID);
			oci_bind_by_name($result, ':SUBJECT_ID', $SUBJECT_ID);
			oci_execute($result);	
	}
	
		if($result) 
		{
			oci_commit($dbconn);
			Print '<script>alert("Data Submitted.");</script>'; 
			Print '<script>window.location.assign("staff.php");</script>';
		}
		else{
			Print '<script>alert("Data Not Submitted.");</script>'; 
			Print '<script>window.location.assign("addstaff.php");</script>';
		}
		  
	
?>