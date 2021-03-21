<?php
	
	require_once '../dbconnection.php';

	$tid = $_POST['txtID'];
	$role = $_POST['txtrole'];
  	$fname = $_POST['fname'];
  	$lname = $_POST['lname'];
  	$email = $_POST['email'];
  	$phone = $_POST['phone'];
  	$pass = $_POST['pass'];
  	$cpass = $_POST['cpass'];
  	$error = '';

	if (isset($_POST['edit'])) {
	  		
		

		$query = "UPDATE users
			SET  role='$role', firstname='$fname', lastname='$lname', email='$email', phone='$phone',
			password='$pass', cpassword='$cpass' WHERE userId='$tid'";

			$update = mysqli_query($con, $query);	

			if($update){
				header("Location: viewUsers.php");
			}
			else {
				echo "Error: " . $update . "<br>" . mysqli_error($con);
			}
  	}
  	elseif (isset($_POST['delete'])) {

  		$delete = "DELETE FROM users WHERE userId='$tid'";

		if (mysqli_query($con, $delete)) {
			$error = "delete";
			header("Location: viewUsers.php?feedback=".$error."");
		} else {
		    echo "Error deleting record: " . mysqli_error($con);
		}
  	}

  		

	mysqli_close($con)

?>