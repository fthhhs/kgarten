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
label{
	display: block;
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
form .input-box2 label.details{
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
					<span class="text">Download PDF</span>
				</a>
			</div>
		<div>
		
	<div class="container">
	    <div class="title">Registration</div>
		<div class="content">
			<form class = "" action="addtest.php" method="POST" >
			<div class="gender-details">
				<label class="gender-title">Staff Status</label>
				<div class="category2">
					<input type="radio" name="STAFF_STATUS" value="FULL_TIME" id="FULL_TIME" >FULL TIME
					<input type="radio" name="STAFF_STATUS" value="PART_TIME" id="PART_TIME"> PART TIME
					<div class="educational" hidden>
					<label class="details">Educational Type</label>
					<select class="" name="EDUCATIONAL_TYPE" >
						<option value= "" selected hidden>Select Educational Type</option>
						<option value= "DIPLOMA">Diploma </option>
						<option value= "DEGREE">Degree</option>
						<option value= "MASTER">Master</option>
					</select>
					</div>
					<div class="overtime" hidden>
						<label class="details">Overtime Hours</label>
						<input type="number" name="OVERTIME_HOURS">
						<a class="active" href="calculate.php">Calculation</a>
					</div>
					
				</div>
				</div>
				<div class="user-details">
				<div class="input-box">
					<label class = "details">Staff ID</label>
					<input type="text" name="STAFF_ID" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Name</label>
					<input type="text" name="STAFF_NAME" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Job Type</label>
					<select class="" name="STAFF_JOBTYPE" required>
			
						<option value= "" selected hidden>Select Job Type</option>
						<option value= "Management">Management</option>
						<option value= "Teacher">Teacher</option>
						<option value= "Admin">Admin</option>
				
					</select>
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Phone Number</label>
					<input type="text" name="STAFF_PHONE" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Email</label>
					<input type="text" name="STAFF_EMAIL" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Staff Address</label>
					<input type="long text" name="STAFF_ADDRESS" required value="">
				</div>
				
				<div class="input-box">
					<label class = "details">Date of Birth</label>
					<input type="date" name="STAFF_DOB" required value="">
				</div>
				
				</div>
			
				<div class="gender-details">
				<label class="gender-title">Staff Gender</label>
				
				
				<div class="category1">
					<input type="radio" name="STAFF_GENDER" value="female" id="dot-2" required>FEMALE
					<input type="radio" name="STAFF_GENDER" value="Male" id="dot-1" required>MALE
				</div>
				</div>
			
			
				<div class="user-details">
				
				<div class="input-box">
					<label class="details">Staff Salary (RM)</label>
					<input type="text" name="STAFF_SALARY" required value="">
				</div>
				
				<div class="input-box">
					<label class="details">Supervisor ID</label>
					<select class="" name="SUPERVISOR_ID" required>
						<option value= "" selected hidden>Select Supervisor ID</option>
						<option value= "S008">S008-Fazreen </option>
						<option value= "S015">S015-Nur Afza</option>
						<option value= "S016">S016-Ahmad Adham</option>
					</select>
				</div>
				
				</div>
			
				<div class="user-details">
			
				<div class="input-box2">
				<label class="details">Subject 4 Murni</label>			
					<input type="radio" name="SUBJECT_ID" value="S004">S004<br>
					<input type="radio" name="SUBJECT_ID" value="B004">B004<br>
					<input type="radio" name="SUBJECT_ID" value="R004">R004<br>
					<input type="radio" name="SUBJECT_ID" value="H001">H001<br>
					<br>
				</div>	
				<div class="input-box2">
				<label class="details">Subject 5 Cahaya</label>
					<input type="radio" name="SUBJECT_ID" value="E005">E005<br>
					<input type="radio" name="SUBJECT_ID" value="M005">M005<br>
					<input type="radio" name="SUBJECT_ID" value="J005">J005<br>
					<input type="radio" name="SUBJECT_ID" value="B005">B005<br>
					<input type="radio" name="SUBJECT_ID" value="S005">S005<br>
					<input type="radio" name="SUBJECT_ID" value="I005">I005<br>
					<br>
					
				</div>
				<div class="input-box2">
				<label class="details">Subject 6 Amanah</label>
					<input type="radio" name="SUBJECT_ID" value="E006">E006<br>
					<input type="radio" name="SUBJECT_ID" value="M006">M006<br>
					<input type="radio" name="SUBJECT_ID" value="S006">S006<br>
					<input type="radio" name="SUBJECT_ID" value="J006">J006<br>
					<input type="radio" name="SUBJECT_ID" value="B006">B006<br>
					<input type="radio" name="SUBJECT_ID" value="I006">I006<br>
				</div>
				</div>
					
				<br>	
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

