<?php 
    if($_POST["parent"])
	{
		$PARENT_ID = $_POST['PARENT_ID'];
		$PARENT_NAME = $_POST['PARENT_NAME'];
		$PARENT_AGE = $_POST['PARENT_AGE'];
		$PARENT_PHONE = $_POST['PARENT_PHONE'];
		$PARENT_ADDRESS = $_POST['PARENT_ADDRESS'];	
		$PARENT_EMAIL = $_POST['PARENT_EMAIL'];

		$query = "INSERT INTO PARENT (PARENT_ID, PARENT_NAME,PARENT_AGE, PARENT_PHONE, PARENT_ADDRESS, PARENT_EMAIL)
						VALUES(:PARENT_ID, :PARENT_NAME, :PARENT_AGE, :PARENT_PHONE, :PARENT_ADDRESS, :PARENT_EMAIL)";
						
			$result = oci_parse($dbconn,$query);
			oci_bind_by_name($result, ':PARENT_ID', $PARENT_ID);
            oci_bind_by_name($result, ':PARENT_NAME', $PARENT_NAME);
            oci_bind_by_name($result, ':PARENT_AGE', $PARENT_AGE);
            oci_bind_by_name($result, ':PARENT_PHONE', $PARENT_PHONE);
            oci_bind_by_name($result, ':PARENT_ADDRESS', $PARENT_ADDRESS);
            oci_bind_by_name($result, ':PARENT_EMAIL', $PARENT_EMAIL);
			oci_execute($result);
			
		if($result) 
		{
			oci_commit($dbconn);
			Print '<script>alert("Data Submitted.");</script>'; 
			Print '<script>window.location.assign("parent.php");</script>';
		}
		else{
			Print '<script>alert("Data Not Submitted.");</script>'; 
			Print '<script>window.location.assign("addparent.php");</script>';
		}
	

	}
?>