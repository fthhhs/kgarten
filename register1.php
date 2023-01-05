<?php 
include 'dbconn.php';

if(!$dbconn){
	echo "Connection error";
	exit;
}

    $parent_id = $_POST['parent_id'];
	$parent_name = $_POST['parent_name'];
	$parent_age = $_POST['parent_age'];
	$parent_phone =$_POST['parent_phone'];
	$parent_address =$_POST['parent_address'];
	$parent_email = $_POST['parent_email'];
	$parent_password = $_POST['parent_password'];
	
	$sql = "INSERT INTO PARENT (parent_id,parent_name,parent_age,parent_phone,parent_address,parent_email,parent_password)
	       VALUES('$parent_id','$parent_name','$parent_age','$parent_phone','$parent_address','$parent_email','$parent_password')";
	
	$qry = oci_parse($dbconn, $sql);

	if(!$qry){
		echo "Error in preparing the statement";
		exit;
	}
		
	oci_execute($qry, OCI_DEFAULT);
	echo "<script language = 'javascript'>alert('Registration Successful ✨✨😊');
	window.location='/project/preschool/website/Login & Signup Form/index.html';</script>";

	oci_commit($dbconn);
	oci_close($dbconn);

?>



