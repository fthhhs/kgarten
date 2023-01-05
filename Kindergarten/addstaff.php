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
		<nav>
			<i class='bx bx-menu' ></i>
		</nav>
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
					<span class="text">Download PDF</span>
				</a>
			</div>
		<div>
		
	<div class="container">
	    <div class="title">Registration</div>
		<div class="content">
			<form class = "" action="addtest.php" method="POST" >
			<div class="gender-details">
				<label class="gender-title">Staff Status</label>
				<div class="category2">
					<input type="radio" name="STAFF_STATUS" value="FULL_TIME" id="FULL_TIME" >FULL TIME
					<input type="radio" name="STAFF_STATUS" value="PART_TIME" id="PART_TIME"> PART TIME
					<div class="educational" hidden>
					<label class="details">Educational Type</label>
					<select class="" name="EDUCATIONAL_TYPE" >
						<option value= "" selected hidden>Select Educational Type</option>
						<option value= "DIPLOMA">Diploma </option>
						<option value= "DEGREE">Degree</option>
						<option value= "MASTER">Master</option>
					</select>
					</div>
					<div class="overtime" hidden>
						<label class="details">Overtime Hours</label>
						<input type="number" name="OVERTIME_HOURS">
						<a class="active" href="calculate.php">Calculation</a>
					</div>
					
				</div>
				</div>
				<div class="user-details">
				<div class="input-box">
					<label class = "details">Staff ID</label>
					<input type="text" name="STAFF_ID" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Name</label>
					<input type="text" name="STAFF_NAME" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Job Type</label>
					<select class="" name="STAFF_JOBTYPE" required>
			
						<option value= "" selected hidden>Select Job Type</option>
						<option value= "Management">Management</option>
						<option value= "Teacher">Teacher</option>
						<option value= "Admin">Admin</option>
				
					</select>
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Phone Number</label>
					<input type="text" name="STAFF_PHONE" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Email</label>
					<input type="text" name="STAFF_EMAIL" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Address</label>
					<input type="long text" name="STAFF_ADDRESS" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Date of Birth</label>
					<input type="date" name="STAFF_DOB" required value="">
				</div>
				
				</div>
			
				<div class="gender-details">
				<label class="gender-title">Staff Gender</label>
				
				
				<div class="category1">
					<input type="radio" name="STAFF_GENDER" value="female" id="dot-2" required>FEMALE
					<input type="radio" name="STAFF_GENDER" value="Male" id="dot-1" required>MALE
				</div>
				</div>
			
			
				<div class="user-details">
				
				<div class="input-box">
					<label class="details">Staff Salary (RM)</label>
					<input type="text" name="STAFF_SALARY" required value="">
				</div>
				
				<div class="input-box">
					<label class="details">Supervisor ID</label>
					<select class="" name="SUPERVISOR_ID" required>
						<option value= "" selected hidden>Select Supervisor ID</option>
						<option value= "S008">S008-Fazreen </option>
						<option value= "S015">S015-Nur Afza</option>
						<option value= "S016">S016-Ahmad Adham</option>
					</select>
				</div>
				
				</div>
			
				<div class="user-details">
			
				<div class="input-box2">
				<label class="details">Subject 4 Murni</label>			
					<input type="radio" name="SUBJECT_ID" value="S004">S004<br>
					<input type="radio" name="SUBJECT_ID" value="B004">B004<br>
					<input type="radio" name="SUBJECT_ID" value="R004">R004<br>
					<input type="radio" name="SUBJECT_ID" value="H001">H001<br>
					<br>
				</div>	
				<div class="input-box2">
				<label class="details">Subject 5 Cahaya</label>
					<input type="radio" name="SUBJECT_ID" value="E005">E005<br>
					<input type="radio" name="SUBJECT_ID" value="M005">M005<br>
					<input type="radio" name="SUBJECT_ID" value="J005">J005<br>
					<input type="radio" name="SUBJECT_ID" value="B005">B005<br>
					<input type="radio" name="SUBJECT_ID" value="S005">S005<br>
					<input type="radio" name="SUBJECT_ID" value="I005">I005<br>
					<br>
					
				</div>
				<div class="input-box2">
				<label class="details">Subject 6 Amanah</label>
					<input type="radio" name="SUBJECT_ID" value="E006">E006<br>
					<input type="radio" name="SUBJECT_ID" value="M006">M006<br>
					<input type="radio" name="SUBJECT_ID" value="S006">S006<br>
					<input type="radio" name="SUBJECT_ID" value="J006">J006<br>
					<input type="radio" name="SUBJECT_ID" value="B006">B006<br>
					<input type="radio" name="SUBJECT_ID" value="I006">I006<br>
				</div>
				</div>
					
				<br>	
				<div class="button">
					<input type = "submit" name="submit" value="submit">
				</div>
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

