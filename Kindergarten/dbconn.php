<?php
	$conn = mysqli_connect("localhost", "root", "", "system");

	if(!$conn){
		die("Connection failed : ". mysqli_connect_error());
	}
?>
