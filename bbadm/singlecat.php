<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BlogProg Admin only</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/custom.css">

		<style>
			.pri{
				background-color: #0B378A;
				color: #fff;
				font-size: 16px;
				padding: 8px;
				margin-top: 10px;
				border:none;
				margin-right: 8px;
			}
			.rd{
				background-color: #f00;
				color: #fff;
				font-size: 16px;
				padding: 8px;
				margin-top: 10px;
				border:none;
			}
		</style>
	</head>
	<body>
		<!--<header>
			<nav>
				<div class="adm-nav">
					<ul>
						<li><a href="#">Logout</a></li>
					</ul>
				</div>
			</nav>
		</header> -->
		<main>
			<section class="dashboard">
				<div class="side-menu">
					<div class="link">
						<div>
							<h3>Add new</h3>
							<ul>
								<li><a href="addCategory.php"> Add Topic Category</a></li>
								<li><a href="createPost.php">Create post</a></li>
								<li><a href="createUsers.php"> Create users</a></li>
							</ul>
						</div>
						<div>
							<h3>Preview all</h3>
							<ul>
								<li><a href="#"> view category</a></li>
								<li><a href="viewPost.php">view post</a></li>
								<li><a href="#">view users</a></li>
								<li><a href="#">comment</a></li>
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="content">
					<div class="form">
						<?php
							if (isset($_GET['error'])) {
								$err = $_GET['error'];
								
								if ($err == "Err001") {
									echo "<p style='color:red'> Big image file, Try again (max: 1mb). </p>";
								}
								elseif ($err == "Err002") {
									echo "<p style='color:red'> Invalid image file format, Try again.. </p>";
								}
							}
						?>

						<form action="editcat.php" method="POST" enctype="multipart/form-data">
							<div class="form-row">
							<?php
                                require_once '../dbconnection.php';
                                if (isset($_GET['tid'])) {
									$tid = $_GET['tid'];
							
                                $result = mysqli_query($con, "SELECT * FROM category
                                WHERE cat_Id = '$tid'");
                                while ($row = mysqli_fetch_assoc($result)) {
                                
								echo
									 '<div class="col">
										<input type="text" name="txtID" style="display: none" value="'.$row['cat_Id'].'">
									</div>
									<div class="col">
										<p>Category</p>
										<input type="text" name="category" class="txt1" '.$row['cat_desc'].'>
									</div>
									
							';} }
							?>
								<div class="col">
									<button type="submit" name="edit" class="pri">Save</button>
									<button type="submit" name="delete" class="rd">Delete</button>
								</div>						
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
	</body>
</html>





