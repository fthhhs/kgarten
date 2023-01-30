<?php
	include 'dbconn.php';
	
	if($_POST["submit"])
	{
		$STU_ID = $_POST['STU_ID'];
		$STU_NAME = $_POST['STU_NAME'];
		$STU_GRADE = $_POST['STU_GRADE'];
		$STU_GENDER = $_POST['STU_GENDER'];
		$STU_DOB = $_POST['STU_DOB'];
		$STU_YEAR_ENROLLED = $_POST['STU_YEAR_ENROLLED'];
		$PARENT_ID = $_POST['PARENT_ID'];
		$CLASS_NAME = $_POST['CLASS_NAME'];
	
	
	   $sqlempic = oci_parse($dbconn,"SELECT * FROM STUDENT s JOIN PARENT p ON s.PARENT_ID = p.PARENT_ID");
                   oci_execute($sqlempic);

		$query = "INSERT
                  INTO STUDENT (STU_ID, STU_NAME, STU_GRADE, STU_GENDER, STU_DOB, STU_YEAR_ENROLLED, PARENT_ID, CLASS_NAME)
                  VALUES (:STU_ID, :STU_NAME, :STU_GRADE, :STU_GENDER, TO_DATE('$STU_DOB', 'YYYY-MM-DD'), TO_DATE('$STU_YEAR_ENROLLED', 'YYYY-MM-DD'), :PARENT_ID, :CLASS_NAME)";
				  
		$result = oci_parse($dbconn,$query);
		
			oci_bind_by_name($result, ':STU_ID', $STU_ID);
			oci_bind_by_name($result, ':STU_NAME', $STU_NAME);
			oci_bind_by_name($result, ':STU_GRADE', $STU_GRADE);
			oci_bind_by_name($result, ':STU_GENDER', $STU_GENDER);
			oci_bind_by_name($result, ':PARENT_ID', $PARENT_ID);
			oci_bind_by_name($result, ':CLASS_NAME', $CLASS_NAME);
			oci_execute($result);

		if($result) 
		{
			oci_commit($dbconn);
			Print '<script>alert("Data Submitted.");</script>'; 
			Print '<script>window.location.assign("student.php");</script>';
		}
		else{
			Print '<script>alert("Data Not Submitted.");</script>'; 
			Print '<script>window.location.assign("addstudent.php");</script>';
		}
	
	}
	
	
?>