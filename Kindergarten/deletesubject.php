<?php 

	//    include 'dbconn.php';
 
   //     //delete data
   //    $delete_id=$_GET['user_id'];    
	//    $query = "DELETE FROM STAFF_SUBJECT WHERE STAFF_ID='$delete_id'";
	//    $result = oci_parse( $dbconn,$query);
	//    oci_execute($result);
		
	// 	if($result) 
   //   {
   //   oci_commit($dbconn);
   //   Print '<script>alert("Delete Successfully");</script>'; 
   //   Print '<script>window.location.assign("staffSubject.php");</script>';
   //   }

   include("dbconn.php"); // connect to db
    $id=$_GET['teacher_id'];

    $sql="DELETE * FROM teacher t JOIN teacher_subject ts on t.teacher_id = ts.teacher_id JOIN subject s ON ts.subject_id = s.subject_id WHERE teacher_id='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Record deleted');
    window.location='staffSubject.php'</script>";
    }
    else{
        echo"Something went wrong!";
    }


?>