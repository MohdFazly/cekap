<?php
	include('connect.php');

	$driver=$_POST['dname'];
	$lnumber=$_POST['lnumber'];
	$pnumber=$_POST['pnumber'];
	
	$sql="insert into driver (DriverName, LicenseNumber, PhoneNumber) values ('$driver', '$lnumber', '$pnumber')";
	$conn->query($sql);

	header('location:display_driver.php');

?>