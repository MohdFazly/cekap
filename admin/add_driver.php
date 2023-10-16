<?php
	include('connect.php');

	$driver=$_POST['dname'];
	$lnumber=$_POST['lnumber'];
	$pnumber=$_POST['pnumber'];
	
	$sql="insert into driver (DriverName, LicenseNumber, PhoneNumber) values ('$driver', '$lnumber', '$pnumber')";
	$conn->query($sql);

    echo "<script
	type='text/jscript'>alert('Driver inserted successfully.')</script>";
	header('refresh:1 url=display_driver.php');

?>