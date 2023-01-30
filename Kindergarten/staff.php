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
			<li class="">
				<a href="parent.php">
					<i class='bx bxs-group' ></i>
					<span class="text">List of Parent</span>
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
							<th>Name</th>
							<th>Phone Number</th>
							<th>Email</th>
							<th>Status</th>
							<th>Hire Date</th>
							<th>Supervisor Name</th>
							<th>View</th>
							<th>Edit</th>
							<th>Delete</th>
							
						</tr>
							
			<?php
			$result = oci_parse($dbconn,
			"SELECT a.TEACHER_ID, a.TEACHER_NAME, a.TEACHER_PHONE, a.TEACHER_EMAIL, a.TEACHER_STATUS, a.TEACHER_HIREDATE, b.TEACHER_NAME AS SUPERVISOR 
			FROM teacher a 
			LEFT OUTER JOIN teacher b 
			ON b.TEACHER_ID = a.SUPERVISOR_ID
			ORDER BY TEACHER_ID");
			oci_execute($result);
              while($rows=oci_fetch_array($result))
              {
            
                echo '<tr>
                  <td>'.$rows["TEACHER_ID"].'</td>
                  <td> '.$rows["TEACHER_NAME"].'</td>
                  <td> '.$rows["TEACHER_PHONE"].'</td>
                  <td> '.$rows["TEACHER_EMAIL"].'</td>
                  <td> '.$rows["TEACHER_STATUS"].'</td>
                  <td> '.$rows["TEACHER_HIREDATE"].'</td>
				  <td> '.$rows["SUPERVISOR"].'</td>
				  <td><div align="center"><a href=viewstaff.php?user_id='.$rows["TEACHER_ID"].'>View</a></div></td>
                  <td><div align="center"><a href=updatestaff.php?user_id='.$rows["TEACHER_ID"].'>edit</a></div></td>
				  <td><div align="center"><a href=delete.php?user_id='.$rows["TEACHER_ID"].'>delete</a></div></td>
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