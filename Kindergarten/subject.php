<?php 
		//Connection to database 
		include 'dbconn.php';
		$query="SELECT CLASS_ID,CLASS_NAME,COUNT(STU_ID)AS COUNT
				FROM CLASS
				JOIN STUDENT
				USING (CLASS_ID)
				ORDER BY CLASS_ID Asc";
		$result = oci_parse($dbconn,$query);
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
				<a href="subject.php" class="btn-download">
					<span class="text">List of Subject</span>
				</a>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Class</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
							<tr>
								<th>Class ID </th>
								<th>Class Name</th>
								<th>Amount Student</th>
							</tr>
							
						<?php
							while($rows=oci_fetch_assoc($result))
							{
						?>
							
								<tr>
									<td><?php echo $rows['CLASS_ID']; ?></td>
									<td><?php echo $rows['CLASS_NAME']; ?></td>
									<td><?php echo $rows['COUNT']; ?></td>
								</tr>
						<?php
							
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