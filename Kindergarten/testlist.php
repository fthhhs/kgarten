<?php
    include 'dbConn.php';
	$query="Select * from STAFF";
    $result = oci_parse($dbconn,$query);
	oci_execute($result);
?>
<html>
<body>
	<div>
		<h3>List of Staff</h3>
	</div>
					<table>
							<tr>
								<th>Staff ID</th>
								<th>Name</th>
								<th>Job Type</th>
								<th>Date of Birth</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Address</th>
								<th>Gender</th>
								<th>Status</th>
								<th>Salary</th>
								<th>Hire Date</th>
								<th>Supervisor ID</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							
						<?php
							while($rows=oci_fetch_assoc($result))
							{
						
							
								echo '<tr>
									
									<td>< '.$rows["STAFF_NAME"].'</td>
									<td> '.$rows["STAFF_JOBTYPE"].'</td>
									<td> '.$rows["STAFF_DOB"].'</td>
									<td> '.$rows["STAFF_PHONE"].'</td>
									<td> '.$rows["STAFF_EMAIL"].'</td>
									<td> '.$rows["STAFF_ADDRESS"].'</td>
									<td> '.$rows["STAFF_GENDER"].'</td>
									<td> '.$rows["STAFF_STATUS"].'</td>
									<td> '.$rows["STAFF_SALARY"].'</td>
									<td> '.$rows["STAFF_HIREDATE"].'</td>
									<td> '.$rows["SUPERVISOR_ID"].'</td>
									<td><div align="center"><a href=testform.php?user_id='.$rows["STAFF_ID"].'>edit</a></div></td>
									<td><div align="center"><a href=testdelete.php?user_id='.$rows["STAFF_ID"].'>delete </a></div></td>
								</tr>';
						
							
							}
						?>				
					</table>





<?php
/*
TGOK BAWAH LAGI
*/
?>




























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