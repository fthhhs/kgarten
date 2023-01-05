<?php
    include 'dbConn.php';
?>
<html>
<body>
<form  action="addtest2.php" method="POST">
			
			<div>
				<div
					<label>Student ID</label>
					<input type="text" name="STU_ID" >
				</div>
				
				<div>
					<label>STUDENT NAME</label>
					<input type="text" name="STU_NAME" >
				</div>
				
				<div>
					<label>STUDENT GRADE</label>
					<input type="text" name="STU_GRADE" >
				</div>
				
				<label class="">STUDENT GENDER</label>
					<input type="radio" name="STU_GENDER" value="female" id="dot-2" required>MALE
					<input type="radio" name="STU_GENDER" value="Male" id="dot-1" required>FEMALE
					
				<div>
					<label>PARENT_ID</label>
					<input type="text" name="PARENT_ID" >
				</div>
				
				<label class = "details">CLASS ID</label>
					<select class="" name="CLASS_ID" required>
			
						<option value= "" selected hidden>Select Class ID</option>
						<option value= "4">4</option>
						<option value= "5">5</option>
						<option value= "6">6</option>
				
					</select>
			<div>
					<input type = "submit" name="submit" value="submit">
			</div>
			</form>		






























<?php
/*
LAGI BAWAH
*/
?>







































<?php
/*
SYG NI JUMLAH HUTANG SYGGG EHEKKKKKK
*/
?>
</body>
</html>