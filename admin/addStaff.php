
<?php
	
	include '/project/preschool/website/dbconn.php';
	
	if($_POST["submit"])
	{
		$STAFF_ID = $_POST['STAFF_ID'];
		$STAFF_NAME = $_POST['STAFF_NAME'];
		$STAFF_JOBTYPE = $_POST['STAFF_JOBTYPE'];
		$STAFF_DOB = $_POST['STAFF_DOB'];
		$STAFF_PHONE = $_POST['STAFF_PHONE'];
		$STAFF_EMAIL = $_POST['STAFF_EMAIL'];
		$STAFF_ADDRESS = $_POST['STAFF_ADDRESS'];
		$STAFF_GENDER = $_POST['STAFF_GENDER'];
		$STAFF_STATUS = $_POST['STAFF_STATUS'];
		$EDUCATIONAL_TYPE = $_POST['EDUCATIONAL_TYPE'];
		$OVERTIME_HOUR = $_POST['OVERTIME_HOUR'];
		$STAFF_SALARY = $_POST['STAFF_SALARY'];
		$STAFF_HIREDATE = $_POST['STAFF_HIREDATE'];
		$SUPERVISOR_ID = $_POST['SUPERVISOR_ID'];
		
		$SUBJECT_ID = $_POST['SUBJECT_ID'];
		$SUBJECT_ID = "";
		foreach($SUBJECT_ID as $row)
		{
			$SUBJECT_ID = $row . ",";
		}
	
		try
		{
				$query = "INSERT INTO STAFF(STAFF_ID,STAFF_NAME,STAFF_JOBTYPE,STAFF_DOB,STAFF_PHONE,STAFF_EMAIL,STAFF_ADDRESS,STAFF_GENDER,STAFF_STATUS,STAFF_SALARY,STAFF_HIREDATE,SUPERVISOR_ID)
							VALUES('$STAFF_ID','$STAFF_NAME','$STAFF_JOBTYPE','$STAFF_DOB','$STAFF_PHONE','$STAFF_EMAIL','$STAFF_ADDRESS','$STAFF_GENDER','$STAFF_STATUS','$STAFF_SALARY','$STAFF_HIREDATE','$SUPERVISOR_ID')";
				$query2 = "INSERT INTO STAFF_SUBJECT(STAFF_ID,SUBJECT_ID)
							VALUES('$STAFF_ID','$SUBJECT_ID')";
	
			if($STAFF_STATUS == 'FULL_TIME')
			{
				$query3 = "INSERT INTO FULL_TIME(STAFF_ID,EDUCATIONAL_TYPE)
							VALUES('$STAFF_ID','$EDUCATIONAL_TYPE')";
			
			}
			else
			{
				$query4 = "INSERT INTO PART_TIME(STAFF_ID,OVERTIME_HOUR)
							VALUES('$STAFF_ID','$OVERTIME_HOUR')";
			
			}
		
			$result1 = oci_parse($dbconn,$query);
			$result2 = oci_parse($dbconn,$query2);
			$result3 = oci_parse($dbconn,$query3);
			$result4 = oci_parse($dbconn,$query4);
			
			oci_commit($dbconn);
			echo "Data Submitted";
		}
	}
?>