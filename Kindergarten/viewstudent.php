<?php 
		//Connection to database 
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
		$id=$_GET['user_id'];
		$query="Select STU_ID, STU_NAME, STU_GRADE, STU_GENDER, STU_DOB, STU_YEAR_ENROLLED, PARENT_NAME, PARENT_PHONE, PARENT_ADDRESS 
		        from STUDENT
				JOIN PARENT
				USING(PARENT_ID)
				WHERE STU_ID='$id'";
		$result = oci_parse($dbconn,$query);
        oci_execute($result);
		while ( $user = oci_fetch_array($result))
			{					
					
					 $STU_ID = $user['STU_ID'];
					 $STU_NAME = $user['STU_NAME'];
					 $STU_GRADE = $user['STU_GRADE'];
				   	 $STU_GENDER = $user['STU_GENDER'];
					 $STU_DOB = $user['STU_DOB'];
					 $STU_YEAR_ENROLLED = $user['STU_YEAR_ENROLLED'];
					 $PARENT_NAME = $user['PARENT_NAME'];
					 $PARENT_PHONE = $user['PARENT_PHONE'];
					 $PARENT_ADDRESS = $user['PARENT_ADDRESS'];
					 
			}
			?>
			<form action="editstaff.php" method="POST">
			
			<div class="user-details">
				<div class="input-box">
					<label class = "details">STUDENT ID :</label>
					<label class = "details"><?php echo $STU_ID ?></label><br>
					<label class = "details">Student Name : </label>
					<label class = "details"><?php echo $STU_NAME ?></label><br>
					<label class = "details">Student Grade : </label>
					<label class = "details"><?php echo $STU_GRADE ?></label><br>
					<label class = "details">Student Gender : </label>
					<label class = "details"><?php echo $STU_GENDER ?></label><br>
					<label class = "details">Student Date Of Birth : </label>
					<label class = "details"><?php echo $STU_DOB ?></label><br>
					<label class = "details">Student Date of Enrolled : </label>
					<label class = "details"><?php echo $STU_YEAR_ENROLLED ?></label><br>
					<label class = "details">Parent Name: </label>
					<label class = "details"><?php echo $PARENT_NAME ?></label><br>
					<label class = "details">Parent Phone No. : </label>
					<label class = "details"><?php echo $PARENT_PHONE ?></label><br>
					<label class = "details">Parent Address :</label>
					<label class = "details"><?php echo $PARENT_ADDRESS ?></label><br>
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