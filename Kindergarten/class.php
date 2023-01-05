<?php 
		//Connection to database 
		include 'dbconn.php';
		session_start();
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
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Class</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
							<tr>
								<th>No</th>
								<th>Class ID </th>
								<th>Class Name</th>
								<th>Amount Student</th>
							</tr>

						<?php						
							$query="SELECT *
									FROM class";
							$result = mysqli_query($conn,$query);
							$num=1;				
							while($dataB=mysqli_fetch_array($result))
							{
						?>
							<tr>
								<td><?php echo $num; ?></td>
								<td><?php echo $dataB ['class_id']; ?></td>
								<td><?php echo $dataB ['class_name']; ?></td>
							</tr>
						<?php 
						$num++; 
						}
						?>

						<?php
							// $query="SELECT COUNT(STU_ID)
							// 	FROM STUDENT";
							// $result1 = mysqli_query($conn,$query);
							
							// while($dataB=mysqli_fetch_array($result1))
							// {
						?>
							<!-- <td><?php// echo $dataB ['p_id']; ?></td> -->
							<!-- <td><?php// echo $dataB ['p_name']; ?></td>-->
						<?php 
						// }
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