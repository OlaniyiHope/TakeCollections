<?php
	
	require_once '../dbconnection.php';

	$tid = $_POST['txtID'];
  	$category = $_POST['category'];
  	
  	$error = '';

  	if (isset($_POST['edit'])) {
	  		
			
		
		

		$query = "UPDATE category
			SET cat_desc='$category' WHERE cat_Id='$tid'";

			$update = mysqli_query($con, $query);	

			if($update){
				header("Location: viewCategory.php");
			}
			else {
				echo "Error: " . $update . "<br>" . mysqli_error($con);
			}
  	}
  	elseif (isset($_POST['delete'])) {

  		$delete = "DELETE FROM category WHERE cat_Id='$tid'";

		if (mysqli_query($con, $delete)) {
			$error = "delete";
			header("Location: viewCategory.php?feedback=".$error."");
		} else {
		    echo "Error deleting record: " . mysqli_error($con);
		}
  	}

  		

	mysqli_close($con)

?>