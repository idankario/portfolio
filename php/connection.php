<?php
	$connection = mysqli_connect("182.50.133.173", "studDB21a", "stud21DB1!", "studDB21a");
	session_start();
	//testing connection success
	if(mysqli_connect_errno()) {
		die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
	}
	$query = "SELECT * FROM portfolio_IdanKario";
	$Software_engineering_works = mysqli_query($connection, $query); 
	if(!($Software_engineering_works))
		die("DB connection failed");	
?>