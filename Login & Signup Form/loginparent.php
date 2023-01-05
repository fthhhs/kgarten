<?php

include 'dbconn.php';

		$id= $_POST['parent_id'];
		$password = $_POST['parent_password'];
		$sql = "SELECT *
		        FROM parent 
		        WHERE parent_id ='$id'
				AND parent_password='$password' ";
				
		$qry = oci_parse($dbconn,$sql);
		
		oci_execute($qry, OCI_DEFAULT);
		
		if(($data = oci_fetch_assoc($qry)) != false)
		{
			session_start();
		$_SESSION['email'] = $parent_email;
		$_SESSION['password'] = $parent_password;
		oci_free_statement($qry);
		
		header("Location: /project/preschool/website/stuReg.html");
		}
		else
		{
			echo"<script language = 'javascript'>alert('ERROR! Login does not successful.');
			window.location='/project/preschool/website/Login & Signup Form/index.html'; </script>";
		}
	
?>  