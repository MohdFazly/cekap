<?php
	include('connect.php');

    $id=$_GET['location'];

	$location=$_POST['lname'];
	
	$sql="update location set LocationName='$location' where LocationID='$id'";
	$conn->query($sql);

	header('location:display_location.php');

?>
