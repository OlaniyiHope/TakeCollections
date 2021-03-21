<?php
	require_once '../dbconnection.php';

	$desc = $_POST['cat_desc'];
	

	$insert = "INSERT INTO category(cat_desc) VALUES('$desc')";

	if (mysqli_query($con, $insert)) {
		header("Location: ../index.php");
	} else {
		echo "Error: " . $insert . "<br>" . mysqli_error($con);
	}

	mysqli_close($con)

?>