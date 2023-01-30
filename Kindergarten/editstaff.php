<?php 
 include 'dbconn.php';
		
	if(isset($_POST['staff']))
	{ 
		$id = $_SESSION['TEACHER_ID'];
		$TEACHER_NAME = $_POST['TEACHER_NAME'];
		$TEACHER_STATUS = $_POST['TEACHER_STATUS'];
		$TEACHER_PHONE = $_POST['TEACHER_PHONE'];
		$TEACHER_EMAIL = $_POST['TEACHER_EMAIL'];
		$TEACHER_ADDRESS = $_POST['TEACHER_ADDRESS'];
		$TEACHER_SALARY = $_POST['TEACHER_SALARY'];
		$SUPERVISOR_ID = $_POST['SUPERVISOR_ID'];
		$TEACHER_PASSWORD = $_POST['TEACHER_PASSWORD'];
		$TEACHER_DOB = $_POST['TEACHER_DOB'];
		$TEACHER_GENDER = $_POST['TEACHER_GENDER'];
		$TEACHER_HIREDATE = $_POST['TEACHER_HIREDATE'];
		
		//Update data   
		$query="UPDATE TEACHER 
				SET TEACHER_NAME=:TEACHER_NAME,
				TEACHER_STATUS=:TEACHER_STATUS,
				TEACHER_PHONE=:TEACHER_PHONE,
				TEACHER_EMAIL=:TEACHER_EMAIL,
				TEACHER_ADDRESS=:TEACHER_ADDRESS,
				TEACHER_SALARY=:TEACHER_SALARY,
				SUPERVISOR_ID=:SUPERVISOR_ID,
				TEACHER_PASSWORD=:TEACHER_PASSWORD,
				TEACHER_DOB=:TEACHER_DOB,
				TEACHER_GENDER=:TEACHER_GENDER,
				TEACHER_HIREDATE=:TEACHER_HIREDATE
				WHERE TEACHER_ID='$id'" ;
		$result = oci_parse( $dbconn,$query);
		
		oci_bind_by_name($result,':TEACHER_NAME',$TEACHER_NAME);
		oci_bind_by_name($result,':TEACHER_STATUS',$TEACHER_STATUS);
		oci_bind_by_name($result,':TEACHER_PHONE',$TEACHER_PHONE);
		oci_bind_by_name($result,':TEACHER_EMAIL',$TEACHER_EMAIL);
		oci_bind_by_name($result,':TEACHER_ADDRESS',$TEACHER_ADDRESS);
		oci_bind_by_name($result,':TEACHER_SALARY',$TEACHER_SALARY);
		oci_bind_by_name($result,':SUPERVISOR_ID',$SUPERVISOR_ID);
		oci_bind_by_name($result,':TEACHER_PASSWORD',$TEACHER_PASSWORD);
		oci_bind_by_name($result,':TEACHER_DOB',$TEACHER_DOB);
		oci_bind_by_name($result,':TEACHER_GENDER',$TEACHER_GENDER);
		oci_bind_by_name($result,':TEACHER_HIREDATE',$TEACHER_HIREDATE);
		
		oci_execute($result);

		if ($result){
			oci_commit($dbconn);
			Print '<script>alert("Update Successfully");</script>'; 
			Print '<script>window.location.assign("staff.php");</script>'; 
		}

		else{ 
			echo '<script>alert("Error!")</script>';	
		}

		// echo $result;
	}

	
		
?>