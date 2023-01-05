<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="styleAdmin.css">
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

</head>
<body>
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
					<i class='bx bxs-shopping-bag' ></i>
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
				<a href="funclogout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
</body>
</html>