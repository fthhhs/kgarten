
<?php

include 'dbconn.php'; 

		$username = $_POST['staff_id'];
		$password= $_POST['staff_password'];
		$sql="SELECT *
			  FROM STAFF
			  WHERE STAFF_ID = '$username'
			  AND STAFF_PASSWORD = '$password'";
			  
		$stmt = oci_parse($dbconn,$sql);
		
		oci_execute($stmt, OCI_DEFAULT);
		
		if(($data = oci_fetch_assoc($stmt)) != false)
		{
			session_start();
			$_SESSION['username'] = $staff_id;
			$_SESSION['password'] = $staff_password;
			oci_free_statement($stmt);
			
			header("Location: home.html");
		}
		else
		{
			echo"<script language = 'javascript'>alert('ERROR! Login Does Not Successful.');
			window.location='login.html';</script>";
		}

?>