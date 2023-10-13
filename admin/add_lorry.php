<?php
	include('connect.php');

	$lorry=$_POST['numberlorry'];
	$sic=$_POST['status'];
	
	$sql="insert into lorry (LorryNumber, Status) values ('$lorry', '$sic')";
	$conn->query($sql);

	header('location:display_lorry.php');

?>