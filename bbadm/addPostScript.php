<?php
	
	require_once '../dbconnection.php';

  	$cat = $_POST['txtCat'];
  	$title = $_POST['txtTitle'];
  	$content = $_POST['txtContent'];
  	$price = $_POST['price'];
  	$home = $_POST['txtHome'];
  	$trend = $_POST['txtTrending'];
  	$date = date("Y-m-d");
  	$user = 1;
  	$error = '';
  	$status = $_POST['txtStatus'];
  	

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
					$file_path = "../postImg/".$image; //image upload path
					move_uploaded_file($_FILES["postIMG"]["tmp_name"], $file_path);
				}
				else{
					//$error = "Big image file, Try again (max: 1mb).";
					$error = "Err001";
					header("Location: createPost.php?error=".$error."");
					return false;
				}
			}
			else{
				//$error = "Invalid image file format, Try again.";
				$error = "Err002";
				header("Location: createPost.php?error=".$error."");
				return false;
			}
		}
	}

	$insert = "INSERT INTO post(catId, userId, title, content, price, image, postDate, displayHome, trending, status) VALUES('$cat', '$user', '$title', '$content', '$price', '$image', '$date', $home', '$trend', '$status')";

	if (mysqli_query($con, $insert)) {
		header("Location: ../index.php");
	} else {
		echo "Error: " . $insert . "<br>" . mysqli_error($con);
	}

	mysqli_close($con)

?>