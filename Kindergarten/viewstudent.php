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
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

#FULL_TIME:checked ~ .educational
{
	display:block;
}

#PART_TIME:checked ~ .overtime
{
	display:block;
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box label.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category1{
   display: flex;
   width: 30%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 
 form .category2{
   display: flex;
   width: 70%;
   margin: 17px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
</style>
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
			<li class="active">
				<a href="staff.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">List Of Staff</span>
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
			<li>
				<a href="addstaff.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Add Staff</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="login.php" class="logout">
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
		<div>
		
	<div class="container">
	    <div class="title">Details of Student</div>
		<div class="content">
		
		<?php
		$id=$_GET['user_id'];
		$query="Select STU_ID, STU_NAME, STU_GRADE, STU_GENDER, STU_DOB, STU_YEAR_ENROLLED, PARENT_NAME, PARENT_PHONE, PARENT_ADDRESS 
		        from STUDENT
				JOIN PARENT
				USING(PARENT_ID)
				WHERE STU_ID='$id'";
		$result = oci_parse($dbconn,$query);
        oci_execute($result);
		while ( $user = oci_fetch_array($result))
			{					
					
					 $STU_ID = $user['STU_ID'];
					 $STU_NAME = $user['STU_NAME'];
					 $STU_GRADE = $user['STU_GRADE'];
				   	 $STU_GENDER = $user['STU_GENDER'];
					 $STU_DOB = $user['STU_DOB'];
					 $STU_YEAR_ENROLLED = $user['STU_YEAR_ENROLLED'];
					 $PARENT_NAME = $user['PARENT_NAME'];
					 $PARENT_PHONE = $user['PARENT_PHONE'];
					 $PARENT_ADDRESS = $user['PARENT_ADDRESS'];
					 
			}
			?>
			<form action="editstaff.php" method="POST">
			
			<div class="user-details">
				<div class="input-box">
					<label class = "details">STUDENT ID :</label>
					<label class = "details"><?php echo $STU_ID ?></label><br>
					<label class = "details">Student Name : </label>
					<label class = "details"><?php echo $STU_NAME ?></label><br>
					<label class = "details">Student Grade : </label>
					<label class = "details"><?php echo $STU_GRADE ?></label><br>
					<label class = "details">Student Gender : </label>
					<label class = "details"><?php echo $STU_GENDER ?></label><br>
					<label class = "details">Student Date Of Birth : </label>
					<label class = "details"><?php echo $STU_DOB ?></label><br>
					<label class = "details">Student Date of Enrolled : </label>
					<label class = "details"><?php echo $STU_YEAR_ENROLLED ?></label><br>
					<label class = "details">Parent Name: </label>
					<label class = "details"><?php echo $PARENT_NAME ?></label><br>
					<label class = "details">Parent Phone No. : </label>
					<label class = "details"><?php echo $PARENT_PHONE ?></label><br>
					<label class = "details">Parent Address :</label>
					<label class = "details"><?php echo $PARENT_ADDRESS ?></label><br>
				</div>
				</div>
				<a href="student.php" class="btn-download">
					<i class="" ></i>
					<span class="text">Back</span>
				</a>
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