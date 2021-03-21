<?php
	
	require_once '../dbconnection.php';

	$tid = $_POST['txtID'];
  	$title = $_POST['txtTitle'];
  	$content = $_POST['txtContent'];
  	$price = $_POST['price'];
  	$home = $_POST['txtHome'];
  	$trend = $_POST['txtTrending'];
  	$status = $_POST['txtStatus'];
  	$error = '';

  	if (isset($_POST['edit'])) {
	  		$result = mysqli_query($con, "SELECT image FROM post2
	        WHERE postId = '$tid'");
	        $row = mysqli_fetch_assoc($result) ;
	        $image = $row['image'];

	  	if(isset($_FILES["postIMG"]["name"]))
		{
			if($_FILES["postIMG"]["name"] != '')//check file selected or not ---IMAGE 1
			{
				$allowed_img_ext  = array("jpg","png","JPG","PNG","JPEG","jpeg");
				//$image_ext = file_end(explode('.', $_FILES["image"]["name"])); //get upload file ext
				$split = explode(".", $_FILES["postIMG"]["name"]);
				$i = sizeof($split)-1;
				$image_ext = $split[$i];
				if (in_array($image_ext, $allowed_img_ext)) 
				{
					if($_FILES["postIMG"]["size"]<1000000)//check image size is less than 1mb
					{
						$image = "img".rand(). '.'.$image_ext;//rename image file
						$file_path = "../postImg2/".$image; //image upload path
						move_uploaded_file($_FILES["postIMG"]["tmp_name"], $file_path);
					}
					else{
						//$error = "Big image file, Try again (max: 1mb).";
						$error = "Err001";
						header("Location: singlePost2.php?error=".$error."");
						return false;
					}
				}
				else{
					//$error = "Invalid image file format, Try again.";
					$error = "Err002";
					header("Location: singlePost2.php?error=".$error."");
					return false;
				}
			}
		}
		

		$query = "UPDATE post2
			SET title='$title', content='$content', price='$price', displayHome='$home', trending='$trend',
			image='$image', status='$status' WHERE postId='$tid'";

			$update = mysqli_query($con, $query);	

			if($update){
				header("Location: viewPost2.php");
			}
			else {
				echo "Error: " . $update . "<br>" . mysqli_error($con);
			}
  	}
  	elseif (isset($_POST['delete'])) {

  		$delete = "DELETE FROM post2 WHERE postId='$tid'";

		if (mysqli_query($con, $delete)) {
			$error = "delete";
			header("Location: viewPost2.php?feedback=".$error."");
		} else {
		    echo "Error deleting record: " . mysqli_error($con);
		}
  	}

  		

	mysqli_close($con)

?>