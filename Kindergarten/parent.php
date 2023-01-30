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
			<li>
				<a href="staff.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">List Of Staff</span>
				</a>
			</li>
			<li class="active">
				<a href="parent.php">
					<i class='bx bxs-group' ></i>
					<span class="text">List of Parent</span>
				</a>
			</li>
			<li class="">
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
			<li class="">
				<a href="addstaff.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Add Staff</span>
				</a>
			</li>
            <li class="">
				<a href="addstudent.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Add Student</span>
				</a>
			</li>
			<li class="">
				<a href="addparent.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Add Parent</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="funclogout.php" class="logout">
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
					<span class="text" onclick = "window.print()">Download PDF</span>
				</a>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Parent</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<table style = "text-align: center">
							<tr>
								<th>Student ID </th>
								<th>Name</th>
								<th>Grade</th>
								<th>Class Name</th>
								<th>Parent Name</th>
								<th>Parent Phone Number</th>
								<th>View</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							
						<?php
							$query="SELECT * FROM PARENT ORDER BY PARENT_ID";
							$result = oci_parse($dbconn,$query);
							oci_execute($result);
							while($rows=oci_fetch_array($result))
							{

								echo '<tr>
									<td>'.$rows["PARENT_ID"].'</td>
									<td> '.$rows["PARENT_NAME"].'</td>
									<td> '.$rows["PARENT_AGE"].'</td>
									<td> '.$rows["PARENT_PHONE"].'</td>
									<td> '.$rows["PARENT_ADDRESS"].'</td>
									<td> '.$rows["PARENT_EMAIL"].'</td>
									<td><div align="center"><a href=viewparent.php?user_id='.$rows["PARENT_ID"].'>view</a></div></td>
									<td><div align="center"><a href=updateparent.php?user_id='.$rows["PARENT_ID"].'>edit</a></div></td>
									<td><div align="center"><a href=delete.php?user_id='.$rows["PARENT_ID"].'>delete</a></div></td>
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