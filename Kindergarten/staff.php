<?php 
	session_start();
	//Connection to database 
	include ('dbconn.php');
	// $query="Select s.STAFF_ID, s.STAFF_NAME,s.STAFF_PHONE, s.STAFF_EMAIL,s.STAFF_STATUS, s.STAFF_HIREDATE,super.STAFF_NAME AS SUPERVISOR
	// 		from STAFF s 
	// 		LEFT OUTER JOIN STAFF super
	// 		ON s.SUPERVISOR_ID = super.STAFF_ID
	// 		ORDER BY STAFF_ID ASC";
	// $result = mysqli_fetch_array($dbconn,$query);
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
								<th>No</th>
								<th>Staff ID</th>
								<th>Name</th>
								<th>Gender</th>
                        		<th>Status</th>
								<th>Password</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							
				<?php
            $fetchData = mysqli_query($conn, "SELECT * FROM teacher ");
			   $num=1;
			   while ($dataB=mysqli_fetch_array($fetchData))
			   {
			   ?> 
               <tr>
                  <td><?php echo $num; ?></td>
                  <td><?php echo $dataB ['teacher_id']; ?></td>
                  <td><?php echo $dataB ['teacher_name']; ?></td>
                  <td><?php echo $dataB ['teacher_gender']; ?></td>
                  <td><?php echo $dataB ['teacher_status']; ?></td>
                  <td><?php echo $dataB ['teacher_password']; ?></td>
                  <td>
                     <a href="edit.php?teacher_id=<?php echo $dataB['teacher_id'];?>" 
                     onclick="return confirm('Are you sure?')">Edit</a></td>
                  <td> 
                     <a href="delete.php?teacher_id=<?php echo $dataB['teacher_id'];?>"
                     onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
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