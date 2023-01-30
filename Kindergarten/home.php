<?php 
	include "dbconn.php";

	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
  	$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- graph -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.0/chart.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
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
			<li class="active">
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
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
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
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Welcome Back!</h3>
						<i class='bx bx-filter' ></i>
					</div>
						<div style="width: 80%;" class="container">
							<canvas style="color:black;" id="chart"></canvas>
						</div><br>
					<?php
						// sql statement 
						$sql = "SELECT * FROM STUDENT ORDER BY STU_GRADE"; 
						// run query
						$query = oci_parse($dbconn, $sql);
						oci_execute($query);
						// declare a variable to hold the data of the previous STUDENT (in terms of rows)
						$previous_patient = oci_fetch_array($query);
						$index = 0; // index number for array 
						$total = array(); // total of a sickness
						$sickness_name = array(); // sickness name 
						$total[$index] = 1; // set to 1 bcs of one data has been fetched for $previous_patient
						$sickness_name[$index] = $previous_patient['STU_GRADE']; 
						$totalAll = 1; // declare variable to hold the value of all sickness ;set to 1 bcs of one data has been fetched for $previous_patient

						$CLASS_NAME[$index] = $previous_patient['CLASS_NAME']; 
						// execute while loop to do calculation 
						while($STUDENT = oci_fetch_array($query)) {	
							$STU_GRADE = $STUDENT['STU_GRADE']; 
							if($STU_GRADE == $previous_patient['STU_GRADE']) {
								// if the current sickness name is equal to the previous one, then do:
								$total[$index] = $total[$index] + 1;
								$sickness_name[$index] = $STU_GRADE;
							}

							else {
								$index = $index + 1; // increment $index by one
								$sickness_name[$index] = $STU_GRADE;
								$total[$index] = 1; 
							}
							$previous_patient = $STUDENT;
							$totalAll = $totalAll + 1; // increment $totalAll by one 
						}

						echo "<h2>Total of all Student : ".$totalAll."</h2>"; // display the total of all sickness

						// display result
						/*for($i=0; $i<=$index; $i++){
							echo "<h2>".$sickness_name[$i]."</h2>"; 
							echo "<p>Total: ".$total[$i]."</p>";
							echo "<p>Percentage: ".($total[$i]/$totalAll)*100 . "%</p>"; //calculate percentage 
						}*/
					?>
					<script>

						let chart = document.getElementById('chart').getContext('2d');

						// Global Options
						//Chart.defaults.globla.defaultFontColor = '#FFF';

						let percentageChart = new Chart(chart, {
							type:'bar', // bar, horizontal, pie, line, doughnut, radar, polarArea
							data:{
								labels:[
									<?php 
									echo "'".$sickness_name[0]."'";
									for($i=1; $i<=$index; $i++){
										echo ",'".$sickness_name[$i]."'";
									}
									?>
								],
								datasets:[{
									label:'Number of student',
									data:[
										<?php
										echo $total[0];
										for($i=1; $i<=$index; $i++){
										echo ",".round(($total[$i]));
										}
										?>
									],
									backgroundColor:[
									<?php
									echo "'".$color."'";
									for($i=1; $i<=$index; $i++){
										$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
										echo ",'".$color."'";
									}
									?>
									],
									hoverBorderWidth:3,
									hoverBorderColor:'#fff',
									borderColor:'#000'
								}]
							},
							options: {
						responsive: true,
						plugins: {
						legend: {
						position: 'right',
						labels:{
							color:'black'
						}
						},
						title: {
						display: true,
						text: 'Number Of Student by grade for class Mutiara',
						color:'black',
						position:'top',
						}
						}
						}
						});
					
					</script>
				</div>

				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


</body>
</html>