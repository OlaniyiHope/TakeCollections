<?php
	
	require_once '../dbconnection.php';

	$tid = $_POST['txtID'];
  	$category = $_POST['category'];
  	
  	$error = '';

  	if (isset($_POST['edit2'])) {
	  		
			
		
		

		$query = "UPDATE category2
			SET cat_desc='$category' WHERE cat_Id='$tid'";

			$update = mysqli_query($con, $query);	

			if($update){
				header("Location: viewCategory2.php");
			}
			else {
				echo "Error: " . $update . "<br>" . mysqli_error($con);
			}
  	}
  	elseif (isset($_POST['delete'])) {

  		$delete = "DELETE FROM category2 WHERE cat_Id='$tid'";

		if (mysqli_query($con, $delete)) {
			$error = "delete";
			header("Location: viewCategory2.php?feedback=".$error."");
		} else {
		    echo "Error deleting record: " . mysqli_error($con);
		}
  	}

  		

	mysqli_close($con)

?>