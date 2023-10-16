<?php
	include('connect.php');

    $id=$_GET['driver'];

    $sql="delete from driver where DriverID='$id'";
	$conn->query($sql);

	echo "<script
	type='text/jscript'>alert('Driver has been deleted!')</script>";
	header('refresh:1 url=display_driver.php');

?>