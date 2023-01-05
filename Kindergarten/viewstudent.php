<?php 
		//Connection to database 
		session_start(); 
		include 'dbconn.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="styleAdmin.css">

	<title>AdminHub</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<?php
         	include ('sidebar.php');
      	?>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<!-- NAVBAR -->

	<!-- MAIN -->
	<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text" onclick = "window.print()">Download PDF</span>
				</a>
			</div>
		<div>
		
	<div class="container">
	    <div class="title">Details of Student</div>
		<div class="content">
		
		<?php
		// $id=$_GET['user_id'];
		// $query="Select stu_id, stu_name, stu_gender, stu_dob, stu_year_enrolled, parent_name, parent_phone, parent_address 
		//         from STUDENT
		// 		JOIN PARENT
		// 		USING(PARENT_ID)
		// 		WHERE stu_id='$id'";
		// $result = oci_parse($dbconn,$query);
        // oci_execute($result);
		// while ( $user = oci_fetch_array($result))
		// 	{					
					
		// 			 $stu_id = $user['stu_id'];
		// 			 $stu_name = $user['stu_name'];
		// 			 $STU_GRADE = $user['STU_GRADE'];
		// 		   	 $stu_gender = $user['stu_gender'];
		// 			 $stu_dob = $user['stu_dob'];
		// 			 $stu_year_enrolled = $user['stu_year_enrolled'];
		// 			 $parent_name = $user['parent_name'];
		// 			 $parent_phone = $user['parent_phone'];
		// 			 $parent_address = $user['parent_address'];
					 
		// 	}

			$stu_id = $_GET['stu_id'];

			//PILIH DATA BERDASARKAN PADA ID REKOD
			$result = mysqli_query($conn, "SELECT * FROM student s , parent p WHERE s.stu_id='$stu_id' AND s.parent_id = p.parent_id");

			while($res = mysqli_fetch_array($result))
			{
				//Paparkan nilai asal dengan membuat umpuk nilai pada p.ubah
				$stu_id = $res['stu_id'];
				$stu_name = $res['stu_name'];
				$stu_gender = $res['stu_gender'];
				$stu_dob = $res['stu_dob'];
				$stu_year_enrolled = $res['stu_year_enrolled'];
				$parent_name = $res['parent_name'];
				$parent_phone = $res['parent_phone'];
				$parent_address = $res['parent_address'];

			}
			?>
			<form action="editstaff.php" method="POST">
			
			<div class="user-details">
				<div class="input-box">
					<label class = "details">STUDENT ID :</label>
					<label class = "details"><?php echo $stu_id ?></label><br>
					<label class = "details">Student Name : </label>
					<label class = "details"><?php echo $stu_name ?></label><br>
					<!-- <label class = "details">Student Grade : </label> -->
					<!-- <label class = "details"><?php echo $STU_GRADE ?></label><br> -->
					<label class = "details">Student Gender : </label>
					<label class = "details"><?php echo $stu_gender ?></label><br>
					<label class = "details">Student Date Of Birth : </label>
					<label class = "details"><?php echo $stu_dob ?></label><br>
					<label class = "details">Student Date of Enrolled : </label>
					<label class = "details"><?php echo $stu_year_enrolled ?></label><br>
					<label class = "details">Parent Name: </label>
					<label class = "details"><?php echo $parent_name ?></label><br>
					<label class = "details">Parent Phone No. : </label>
					<label class = "details"><?php echo $parent_phone ?></label><br>
					<label class = "details">Parent Address :</label>
					<label class = "details"><?php echo $parent_address ?></label><br>
				</div>
				</div>
				<a href="student.php" class="btn-download">
					<i class="" ></i>
					<span class="text">Back</span>
				</a>
			</form>		
		</div>
	</div>
	</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>
</body>
</html>