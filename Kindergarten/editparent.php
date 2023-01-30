<?php 
 include 'dbconn.php';
		
	if(isset($_POST['parent']))
	{ 
		$id = $_SESSION['PARENT_ID'];
		$PARENT_NAME = $_POST['PARENT_NAME'];
		$PARENT_AGE = $_POST['PARENT_AGE'];
		$PARENT_PHONE = $_POST['PARENT_PHONE'];
		$PARENT_ADDRESS = $_POST['PARENT_ADDRESS'];
		$PARENT_EMAIL = $_POST['PARENT_EMAIL'];
		
		//Update data   
		$query="UPDATE PARENT 
				SET PARENT_NAME=:PARENT_NAME,
				PARENT_AGE=:PARENT_AGE,
				PARENT_PHONE=:PARENT_PHONE,
				PARENT_ADDRESS=:PARENT_ADDRESS,
				PARENT_EMAIL=:PARENT_EMAIL
				WHERE PARENT_ID='$id'" ;
		$result = oci_parse( $dbconn,$query);
		
		oci_bind_by_name($result,':PARENT_NAME',$PARENT_NAME);
		oci_bind_by_name($result,':PARENT_AGE',$PARENT_AGE);
		oci_bind_by_name($result,':PARENT_PHONE',$PARENT_PHONE);
		oci_bind_by_name($result,':PARENT_ADDRESS',$PARENT_ADDRESS);
		oci_bind_by_name($result,':PARENT_EMAIL',$PARENT_EMAIL);
 
		
		oci_execute($result);

		if ($result){
			oci_commit($dbconn);
			Print '<script>alert("Update Successfully");</script>'; 
			Print '<script>window.location.assign("parent.php");</script>'; 
		}

		else{ 
			echo '<script>alert("Error!")</script>';	
		}

		// echo $result;
	}

	
		
?>