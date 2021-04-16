	<?php
	session_start();
	require_once 'dbconnection.php';

	if (isset($_GET['tid'])) {
		$tid = $_GET['tid'];

		$result = mysqli_query($con,"SELECT  `title` FROM post2 WHERE postId = '$tid'");                                                      
		
		while($row = mysqli_fetch_array($result)) {
		if ($row["postId"] == 0) {
			header("Location: ../cart.php");
		}
		else{
			header("Location: ../index.php");
		}

}

}




?>