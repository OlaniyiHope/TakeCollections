<?php
	session_start();
	require('dbconnection.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT email, password  FROM users WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($con, $query);

			if(mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $_SESSION['email'] = $row["email"];
			$_SESSION['userId'] = $row["userId"];

			if ($row["userId"] == 0) {
				header("Location: bbadm/createPost.php");
			}
			else {
				echo "incorrect username or password";
				header("Location: login.php");
			}
			
	    }
	}
			
	
?>