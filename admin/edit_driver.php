<?php
	include('connect.php');

    $id=$_GET['driver'];

	$driver=$_POST['dname'];
	$lnumber=$_POST['lnumber'];
	$pnumber=$_POST['pnumber'];
	
	$sql="update driver set DriverName='$driver', LicenseNumber='$lnumber', PhoneNumber='$pnumber' where DriverID='$id'";
	$conn->query($sql);


	header('location:display_driver.php');

?>