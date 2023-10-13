<?php
	include('connect.php');

	$location=$_POST['lname'];
	
	$sql="insert into location (LocationName) values ('$location')";
	$conn->query($sql);

	header('location:display_location.php');

?>