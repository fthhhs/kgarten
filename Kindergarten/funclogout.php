<?php 
	session_start();

	if(isset($_SESSION['TEACHER_ID'])){ 
		unset($_SESSION['TEACHER_ID']);
		session_destroy();
	}

	echo "<script>alert('Logged out successfully !'); window.location='login.php'</script>";
	die;
 ?>