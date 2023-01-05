<?php 
	session_start();

	if(isset($_SESSION['staff_id'])){ 
		unset($_SESSION['staff_id']);
		session_destroy();
	}

	echo "<script>alert('Logged out successfully !'); window.location='login.php'</script>";
	die;
 ?>