<?php 
		//Connection to database 
		include 'dbconn.php';
		// $query="SELECT STAFF_ID,STAFF_NAME,SUBJECT_ID,SUBJECT_NAME
		// 		FROM STAFF
		// 		JOIN STAFF_SUBJECT
		// 		USING (STAFF_ID)
		// 		JOIN SUBJECT
		// 		USING (SUBJECT_ID)
		// 		ORDER BY STAFF_ID Asc";
		// $result = mysqli_query($dbconn,$query);
		// oci_execute($result);
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
				<a href="addsubject.php" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Add Subject</span>
				</a>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Staff and Subject</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
							<tr>
								<th>No</th>
								<th>Staff ID </th>
								<th>Staff Name</th>
								<th>Subject ID</th>
								<th>Subject Name</th>
								<th>Delete</th>
							</tr>
							
									
						<?php
						// while($rows=oci_fetch_assoc($result))
						// {
							$fetchData = mysqli_query($conn, "SELECT t.teacher_id, t.teacher_name, s.subject_id, s.subject_name 
							FROM teacher t, teacher_subject ts, 'subject' s
							WHERE t.teacher_id = ts.teacher_id AND s.subject_id = ts.subject_id");
							$num=1;
							while ($dataB=mysqli_fetch_array($fetchData))
							{
							?>
					
						
						<!-- echo '<tr>
						<td>'.$rows["STAFF_ID"].'</td>
						<td> '.$rows["STAFF_NAME"].'</td>
						<td> '.$rows["SUBJECT_ID"].'</td>
						<td> '.$rows["SUBJECT_NAME"].'</td>
						<td><div align="center" onClick=return confirm("Are you sure?")><a href=deletesubject.php?user_id='.$rows["STAFF_ID"].'>delete </a></div></td>
						</tr>'; -->
						<td><?php echo $num; ?></td>
						<td><?php echo $dataB ['teacher_id']; ?></td>
						<td><?php echo $dataB ['teacher_name']; ?></td>
						<td><?php echo $dataB ['subject_id']; ?></td>
						<td><?php echo $dataB ['subject_name']; ?></td>
						<td> 
                     		<a href="delete.php?teacher_id=<?php echo $dataB['teacher_id'];?>"
                    		onclick="return confirm('Are you sure?')">Delete</a></td>
					
						<?php
						$num++;
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