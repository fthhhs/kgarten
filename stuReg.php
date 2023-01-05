<?php 
include 'dbconn.php';

if(!$dbconn){
	echo "Connection error";
	exit;
}

	$stu_id = $_POST['stu_id'];
	$stu_name = $_POST['stu_name'];
	$stu_grade = $_POST['stu_grade'];
	$stu_gender =$_POST['stu_gender'];
	$stu_dob =$_POST['stu_dob'];
	$stu_year_enrolled = $_POST['stu_year_enrolled'];
	$parent_id = $_POST['parent_id'];
	$class_id = $_POST['class_id'];
	
	$stmt = oci_parse($dbconn, "SELECT * FROM STUDENT");
	oci_execute($stmt);
	
	$sql = "INSERT INTO STUDENT(stu_id,stu_name,stu_grade,stu_gender,stu_dob,stu_year_enrolled,parent_id,class_id)
	     VALUES(:stu_id, :stu_name,:stu_grade,:stu_gender,TO_DATE('$stu_dob','YYYY-MM-DD'),TO_DATE('$stu_year_enrolled','YYYY-MM-DD'),:parent_id,:class_id)";
		 
	$result = oci_parse($dbconn,$sql);
	
	oci_bind_by_name($result, ':stu_id',$stu_id);
	oci_bind_by_name($result, ':stu_name',$stu_name);
	oci_bind_by_name($result, ':stu_grade',$stu_grade);
	oci_bind_by_name($result, ':stu_gender',$stu_gender);
	oci_bind_by_name($result, ':parent_id',$parent_id);
	oci_bind_by_name($result, ':class_id',$class_id);
	
	oci_execute($result);
	
	if($result)
	{
		oci_commit($dbconn);
		Print'<script>alert("Data Submitted");</script>';
		Print'<script>window.location.assign("/project/preschool/website/index.html");</script>';
	}
	
	oci_close($dbconn);
	
?>