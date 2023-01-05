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
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
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
			</div>
		<div>
		
	<div class="container">
	    <div class="title">Registration</div>
		<div class="content">
			<form class = "" action="addtest2.php" method="POST" >
				<div class="user-details">
				<div class="input-box">
					<label class = "details">Staff ID</label>
					<input type="text" name="STAFF_ID" required value="">
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
				<a href="staffSubject.php" class="btn-download">
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

