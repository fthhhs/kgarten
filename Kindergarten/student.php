<?php 
		//Connection to database 
		include 'dbconn.php';
		session_start();
		// $query="SELECT STU_ID, STU_NAME, STU_GRADE, STU_GENDER, STU_DOB, STU_YEAR_ENROLLED, CLASS_NAME, PARENT_NAME, PARENT_PHONE 
		// 		FROM STUDENT
		// 		JOIN CLASS
		// 		USING (CLASS_ID)
		// 		JOIN PARENT
		// 		USING (PARENT_ID)
		// 		ORDER BY STU_ID Asc";
		// $result = oci_parse($dbconn,$query);
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
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text" onclick = "window.print()">Download PDF</span>
				</a>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List of Student</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<table style = "text-align: center">
							<tr>
								<th>No</th>
								<th>Student ID</th>
								<th>Name</th>
								<!-- <th>Grade</th> -->
								<th>Gender</th>
								<th>Date of Birth</th>
								<th>Parent Name</th>
								<th>Parent's Phone Number</th>
								<th>View</th>
							</tr>
							
			<?php
			$fetchData = mysqli_query($conn, "SELECT * FROM student s, parent p WHERE s.parent_id = p.parent_id");
			$num=1;
			while ($dataB=mysqli_fetch_array($fetchData))
			{
			?>
			<tr>
				<td><?php echo $num; ?></td>
				<td><?php echo $dataB ['stu_id']; ?></td>
				<td><?php echo $dataB ['stu_name']; ?></td>
				<!-- <td><?php //echo $dataB ['stu_grade']; ?></td> -->
				<td><?php echo $dataB ['stu_gender']; ?></td>
				<td><?php echo $dataB ['stu_dob']; ?></td>
				<td><?php echo $dataB ['parent_name']; ?></td>
				<td><?php echo $dataB ['parent_phone']; ?></td>
				<td> 
                     <a href="viewstudent.php?stu_id=<?php echo $dataB['stu_id'];?>"
                     onclick="return confirm('Are you sure?')">View</a></td>
			</tr>
	

                <!-- echo '<tr>
                  <td>'.$rows["STU_ID"].'</td>
                  <td> '.$rows["STU_NAME"].'</td>
                  <td> '.$rows["STU_GRADE"].'</td>
                  <td> '.$rows["CLASS_NAME"].'</td>
                  <td> '.$rows["PARENT_NAME"].'</td>
                  <td> '.$rows["PARENT_PHONE"].'</td>
				  <td><div align="center"><a href=viewstudent.php?user_id='.$rows["STU_ID"].'>view</a></div></td>
                </tr>'; -->
            
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