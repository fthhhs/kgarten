<?php 
 include 'dbconn.php';
		
	if(isset($_POST['student']))
	{ 
		$id = $_SESSION['STU_ID'];
		$STU_NAME = $_POST['STU_NAME'];
		$STU_GRADE = $_POST['STU_GRADE'];
		$STU_GENDER = $_POST['STU_GENDER'];
		$STU_DOB = $_POST['STU_DOB'];
		$STU_YEAR_ENROLLED = $_POST['STU_YEAR_ENROLLED'];
		$PARENT_ID = $_POST['PARENT_ID'];
		$CLASS_NAME = $_POST['CLASS_NAME'];
		$PARENT_NAME = $_POST['PARENT_NAME'];
		$PARENT_PHONE = $_POST['PARENT_PHONE'];
		
		//Update data   
		$query="UPDATE STUDENT 
				SET STU_NAME=:STU_NAME,
				STU_GRADE=:STU_GRADE,
				STU_GENDER=:STU_GENDER,
				STU_DOB=:STU_DOB,
				STU_YEAR_ENROLLED=:STU_YEAR_ENROLLED,
				PARENT_ID=:PARENT_ID,
				CLASS_NAME=:CLASS_NAME
				WHERE STU_ID='$id'" ;
			$result = oci_parse( $dbconn,$query);
			
			oci_bind_by_name($result,':STU_NAME',$STU_NAME);
			oci_bind_by_name($result,':STU_GRADE',$STU_GRADE);
			oci_bind_by_name($result,':STU_GENDER',$STU_GENDER);
			oci_bind_by_name($result,':STU_DOB',$STU_DOB);
			oci_bind_by_name($result,':STU_YEAR_ENROLLED',$STU_YEAR_ENROLLED);
			oci_bind_by_name($result,':PARENT_ID',$PARENT_ID);
			oci_bind_by_name($result,':CLASS_NAME',$CLASS_NAME);
			
			oci_execute($result);

			$query="UPDATE PARENT 
					SET PARENT_NAME = :PARENT_NAME,
					PARENT_PHONE=:PARENT_PHONE";
			$result=oci_parse($dbconn,$query);

			oci_bind_by_name($result,':PARENT_NAME',$PARENT_NAME);
			oci_bind_by_name($result,':PARENT_PHONE',$PARENT_PHONE);

			oci_execute($result);

		if ($result ){
			oci_commit($dbconn);
			Print '<script>alert("Update Successfully");</script>'; 
			Print '<script>window.location.assign("student.php");</script>'; 
		}

		else{ 
			echo '<script>alert("Error!")</script>';	
		}

		// echo $result;
	}

?>