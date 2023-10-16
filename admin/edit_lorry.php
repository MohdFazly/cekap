<?php
	include('connect.php');

    $id=$_GET['lorry'];

	$lorry=$_POST['numberlorry'];
	$sic=$_POST['status'];
	
	$sql="update lorry set LorryNumber='$lorry', Status='$sic' where LorryNumber='$id'";
	$conn->query($sql);


	header('location:display_lorry.php');

?>