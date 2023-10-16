<?php
	include('connect.php');

    $id=$_GET['location'];

    $sql="delete from location where LocationID='$id'";
	$conn->query($sql);

	echo "<script
	type='text/jscript'>alert('Location has been deleted!')</script>";
	header('refresh:1 url=display_location.php');

?>