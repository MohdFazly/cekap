<?php
	include('connect.php');

    $id=$_GET['lorry'];

    $sql="delete from lorry where LorryNumber='$id'";
	$conn->query($sql);

	echo "<script
	type='text/jscript'>alert('Lorry has been deleted!')</script>";
	header('refresh:1 url=display_lorry.php');

?>