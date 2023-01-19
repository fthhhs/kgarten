<?php
include("dbconn.php"); // connect to db
    $id=$_GET['subject_id'];

    $sql="DELETE FROM patient WHERE subject_id='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Record deleted');
    window.location='records.php'</script>";
    }
    else{
        echo"Something went wrong!";
    }
?>

<!-- delete record -->