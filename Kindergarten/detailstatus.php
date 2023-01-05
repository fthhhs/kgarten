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