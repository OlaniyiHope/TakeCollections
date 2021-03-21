<?php
	

	require_once 'dbconnection.php';

	$role = $_POST['txtrole'];
	$Fname = $_POST['fname'];
	$Lname= $_POST['lname'];
	$Email = $_POST['emmail'];
	$Phone = $_POST['phone'];
	$password = $_POST['pass'];
	$cpassword = $_POST['cpass'];
	

	$insert = "INSERT INTO users(role, firstname, lastname, email, phone, password, cpassword) VALUES('$role', '$Fname','$Lname', '$Email', '$Phone','$password','$cpassword')";



if (mysqli_query($con, $insert)) {

		header("Location: index.php");
	} 
	else
	 {
		echo "Error: " . $insert . "<br>" . mysqli_error($con);

	}

	mysqli_close($con)
	
?>