<?php 
		//Connection to database
		session_start(); 
		include ('dbconn.php');
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
		<div>
		
	<div class="container">
	    <div class="title">Details of Staff</div>
		<div class="content">
		
		<?php
		$id=$_GET['user_id'];
		$query="Select * 
		        from STAFF
				WHERE STAFF_ID='$id'";
		$result = oci_parse($dbconn,$query);
        oci_execute($result);
		while ( $user = oci_fetch_array($result))
			{					
			
					 $STAFF_ID = $user['STAFF_ID'];
					 $STAFF_NAME = $user['STAFF_NAME'];
				   	 $STAFF_JOBTYPE = $user['STAFF_JOBTYPE'];
					 $STAFF_PHONE = $user['STAFF_PHONE'];
					 $STAFF_EMAIL = $user['STAFF_EMAIL'];
					 $STAFF_ADDRESS = $user['STAFF_ADDRESS'];
					 $STAFF_SALARY = $user['STAFF_SALARY'];
					 $SUPERVISOR_ID = $user['SUPERVISOR_ID'];
					 
			}
			?>
			<form action="editstaff.php" method="POST">
			
			<div class="user-details">
				<div class="input-box">
					<label class = "details">Staff ID</label>
					<input type="text" name="STAFF_ID" value="<?php echo $STAFF_ID ?>">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Name</label>
					<input type="text" name="STAFF_NAME" value="<?php echo $STAFF_NAME ?>">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Job Type</label>
					<select class="" name="STAFF_JOBTYPE">
			
						<option value= "" selected hidden>Select Job Type</option>
						<option value= "Management"
						
								<?php
									if($STAFF_JOBTYPE == 'Management')
									{
										echo "selected";
									}
								?>>Management</option>
								
						<option value= "Teacher"
						
									<?php
									if($STAFF_JOBTYPE == 'Teacher')
									{
										echo "selected";
									}
									?>>Teacher</option>
									
						<option value= "Admin"
						
									<?php
									if($STAFF_JOBTYPE == 'Admin')
									{
										echo "selected";
									}
									?>>Admin</option>
									
				
					</select>
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Phone Number</label>
					<input type="text" name="STAFF_PHONE" value="<?php echo $STAFF_PHONE ?>">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Email</label>
					<input type="text" name="STAFF_EMAIL" value="<?php echo  $STAFF_EMAIL ?>">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Address</label>
					<input type="long text" name="STAFF_ADDRESS" value="<?php echo $STAFF_ADDRESS ?>">
				</div>
			</div>
			
			<div class="user-details">
				
				<div class="input-box">
					<label class="details">Staff Salary (RM)</label>
					<input type="text" name="STAFF_SALARY" value="<?php echo $STAFF_SALARY ?>">
				</div>
				
				<div class="input-box">
					<label class="details">Supervisor ID</label>
					<select class="" name="SUPERVISOR_ID" required>
						<option value= "" selected hidden>Select Supervisor ID</option>
						
						<option value= "S008"
									<?php
									if($SUPERVISOR_ID == 'S008')
									{
										echo "selected";
									}
									?>>S008-Fazreen </option>
						
						<option value= "S015"
									<?php
									if($SUPERVISOR_ID == 'S015')
									{
										echo "selected";
									}
									?>>S015-Nur Afza</option>
						
						<option value= "S016"
									<?php
									if($SUPERVISOR_ID == 'S016')
									{
										echo "selected";
									}
									?>>S016-Ahmad Adham</option>
						
					</select>
				</div>
			</div>
			<div class="button">
					<input type = "submit" name="submit" value="submit">
			</div>
			</form>		
		</div>
	</div>
	</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>
</body>
</html>

<?php

$result = oci_parse($dbconn,"SELECT * FROM STAFF WHERE STAFF_ID  ='$STAFF_ID'");
      	oci_execute($result); //CARA NAK EXECUTE SQL
      
$staff = oci_fetch_array($result);
 $count = oci_num_rows($result);
 
 if($count > 0)  
 {
  $info = $staff;   
  $_SESSION['STAFF_ID']=$info['STAFF_ID']; 
 }

?>