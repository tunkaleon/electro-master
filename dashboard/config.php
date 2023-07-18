<?php
	$conn = new mysqli("localhost","root","","birihoshop");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>