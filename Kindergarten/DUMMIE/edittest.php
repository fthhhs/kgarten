<?php
include("dbconn.php");
 $STAFF_ID = $_POST['STAFF_ID'];
 $STAFF_NAME = $_POST['STAFF_NAME'];
 $STAFF_JOBTYPE = $_POST['STAFF_JOBTYPE'];
 $STAFF_PHONE = $_POST['STAFF_PHONE'];
 $STAFF_EMAIL = $_POST['STAFF_EMAIL'];
 $STAFF_ADDRESS = $_POST['STAFF_ADDRESS'];
 $STAFF_GENDER = $_POST['STAFF_GENDER'];
 $STAFF_SALARY = $_POST['STAFF_SALARY'];
 $SUPERVISOR_ID = $_POST['SUPERVISOR_ID'];
 
  $sql = "INSERT ALL
          INTO STAFF(STAFF_ID, STAFF_NAME, STAFF_JOBTYPE, STAFF_PHONE, STAFF_EMAIL, STAFF_ADDRESS, STAFF_GENDER, STAFF_SALARY, SUPERVISOR_ID)
           VALUES (:STAFF_ID, :STAFF_NAME, :STAFF_JOBTYPE, :STAFF_PHONE, :STAFF_EMAIL, :STAFF_ADDRESS, :STAFF_GENDER, :STAFF_SALARY, :SUPERVISOR_ID)";
  $results = oci_parse($conn, $sql);
  oci_bind_by_name($results, ':STAFF_ID', $STAFF_ID);
  oci_bind_by_name($results, ':STAFF_NAME', $STAFF_NAME);
   oci_bind_by_name($results, ':STAFF_JOBTYPE', $STAFF_JOBTYPE);
  oci_bind_by_name($results, ':STAFF_PHONE', $STAFF_PHONE);
   oci_bind_by_name($results, ':STAFF_EMAIL', $STAFF_EMAIL);
  oci_bind_by_name($results, ':STAFF_ADDRESS', $STAFF_ADDRESS);
    oci_bind_by_name($results, ':STAFF_GENDER', $STAFF_GENDER);
   oci_bind_by_name($results, ':STAFF_SALARY', $STAFF_SALARY);
  oci_bind_by_name($results, ':SUPERVISOR_ID', $SUPERVISOR_ID);
  oci_execute($results);
  
   if($results) 
     {
     oci_commit($dbconn);
     Print '<script>alert("added!");</script>'; 
     Print '<script>window.location.assign("Staff.php");</script>'; 
     }
?>