<?php
	include('connect.php');

	$location=$_POST['lname'];
	
	$sql="insert into location (LocationName) values ('$location')";
	$conn->query($sql);

    
    echo "<script
	type='text/jscript'>alert('Location inserted successfully.')</script>";
	header('refresh:1 url=display_location.php');


?>