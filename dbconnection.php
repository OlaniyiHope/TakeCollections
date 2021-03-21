<?php 
	$servername = "localhost"; 
	$dataBase = "takecollection";  
	$username = "take";  
	$password = "mb1zKuOEhvwQV2sK"; 

	$con = mysqli_connect($servername, $username, 	$password, $dataBase);

	// Check connection
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
?>
