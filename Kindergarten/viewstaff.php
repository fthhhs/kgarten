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
			<li class="">
				<a href="parent.php">
					<i class='bx bxs-group' ></i>
					<span class="text">List of Parent</span>
				</a>
			</li>
			<li class="">
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
	    <div class="title">Details of Staff</div>
		<div class="content">
		
		<?php
		$id=$_GET['user_id'];
		$query="SELECT *
		        FROM TEACHER
				WHERE TEACHER_ID='$id'";
		$result = oci_parse($dbconn,$query);
        oci_execute($result);
		while ( $user = oci_fetch_array($result))
			{					
					
					 $TEACHER_ID = $user['TEACHER_ID'];
					 $TEACHER_NAME = $user['TEACHER_NAME'];
					 $TEACHER_DOB = $user['TEACHER_DOB'];
				   	 $TEACHER_PHONE = $user['TEACHER_PHONE'];
					 $TEACHER_EMAIL = $user['TEACHER_EMAIL'];
					 $TEACHER_ADDRESS = $user['TEACHER_ADDRESS'];
					 $TEACHER_GENDER = $user['TEACHER_GENDER'];
					 $TEACHER_STATUS = $user['TEACHER_STATUS'];
					 $TEACHER_SALARY = $user['TEACHER_SALARY'];
                     $TEACHER_HIREDATE = $user['TEACHER_HIREDATE'];
                     $TEACHER_PASSWORD = $user['TEACHER_PASSWORD'];
					 
			}
			?>
			<form action="editstaff.php" method="POST">
			
			<div class="user-details">
				<div class="input-box">
					<label class = "details">Teacher ID :</label>
					<label class = "details"><?php echo $TEACHER_ID ?></label><br>
					<label class = "details">Name : </label>
					<label class = "details"><?php echo $TEACHER_NAME ?></label><br>
					<label class = "details">Date of Birth : </label>
					<label class = "details"><?php echo $TEACHER_DOB ?></label><br>
					<label class = "details">Phone Number : </label>
					<label class = "details"><?php echo $TEACHER_PHONE ?></label><br>
					<label class = "details">Email : </label>
					<label class = "details"><?php echo $TEACHER_EMAIL ?></label><br>
					<label class = "details">Address : </label>
					<label class = "details"><?php echo $TEACHER_ADDRESS ?></label><br>
					<label class = "details">Gender: </label>
					<label class = "details"><?php echo $TEACHER_GENDER ?></label><br>
					<label class = "details">Status : </label>
					<label class = "details"><?php echo $TEACHER_STATUS ?></label><br>
					<label class = "details">Salary :</label>
					<label class = "details">RM <?php echo $TEACHER_SALARY ?></label><br>
                    <label class = "details">Hire Date :</label>
                    <label class = "details"><?php echo $TEACHER_HIREDATE ?></label><br>
                    <label class = "details">Password :</label>
                    <label class = "details"><?php echo $TEACHER_PASSWORD ?></label><br>
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