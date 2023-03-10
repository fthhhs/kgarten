<?php 
		//Connection to database 
		include 'dbconn.php';
		$query="Select STAFF_ID,STAFF_STATUS,EDUCATIONAL_TYPE,OVERTIME_HOURS
		        from STAFF  
				JOIN FULL_TIME
				USING (STAFF_ID)
				JOIN PART_TIME
				USING (STAFF_ID)";
		$result = oci_parse($dbconn,$query);
		oci_execute($result);
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
		<a href="home.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin Panel</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="home.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="staff.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">List Of Staff</span>
				</a>
			</li>
			<li>
				<a href="student.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">List of Student</span>
				</a>
			</li>
			<li>
				<a href="class.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">List of Class</span>
				</a>
			</li>
			<li>
				<a href="addstaff.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Add Staff</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="login.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="edit.php" class="profile">
				<img src="profile.png">
			</a>
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
				<div >
				<a href="staffSubject.php" class="btn-download" >
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Update Subject</span>
				</a>
				<br>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Staff</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<table style ="text-align: center">
							<tr>
								<th>Staff ID</th>
								<th>Staff Status</th>
								<th>Educational Type</th>
								<th>Overtime Hours</th>
								<th>Edit</th>
								<th>Delete</th>
								
							</tr>
							
						<?php
              while($rows=oci_fetch_assoc($result))
              {
            
              
                echo '<tr>
                  <td>'.$rows["STAFF_ID"].'</td>
                  <td> '.$rows["EDUCATIONAL_TYPE"].'</td>
                  <td>'.$rows["STAFF_STATUS"].'</td>
                  <td> '.$rows["OVERTIME_HOURS"].'</td>
                  <td><div align="center"><a href=updatestaff.php?user_id='.$rows["STAFF_ID"].'>edit</a></div></td>
				  <td><div align="center"><a href=delete.php?user_id='.$rows["STAFF_ID"].'>delete</a></div></td>
                </tr>';
            
              
              }
            ?>			
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>