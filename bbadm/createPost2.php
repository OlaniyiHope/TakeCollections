<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BlogProg Admin only</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/custom.css">
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
								<li><a href="addCategory2.php"> Add Topic Category</a></li>
								<li><a href="createPost2.php">Create post</a></li>
								<li><a href="createUsers2.php"> Create users</a></li>
							</ul>
						</div>
						<div>
							<h3>Preview all</h3>
							<ul>
								<li><a href="viewCategory2.php"> view category</a></li>
								<li><a href="viewPost2.php">view post</a></li>
								<li><a href="viewUsers2.php">view users</a></li>
								<li><a href="#">comment</a></li>
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="content">
					<div class="form">
				

						<form action="addPostScript2.php" method="POST" enctype="multipart/form-data">
							<div class="form-row">
								<div class="col">
									<select class="txt" name="txtCat">
										<option selected="true" disabled="true">--Select Category--</option>
										<?php
											require_once '../dbconnection.php';  

											$result = mysqli_query($con,"SELECT `cat_Id`, `cat_desc` FROM category2");                                                      
											while($row = mysqli_fetch_array($result)) {

										       echo '<option  value="'.$row['cat_Id'].'">'.$row['cat_desc'].'</option>';       
											}
										?>

									</select>
								</div>

								<div class="col">
									<p>Post Title</p>
									<input type="text" name="txtTitle" placeholder="name of your product e.g Addidas" class="txt1" >
								</div>

								<div class="col">
									<p>Enter Content</p>
									<textarea class="txt2" name="txtContent" placeholder="brief history of your product"></textarea>
								</div>
								<div class="col">
									<p>Price</p>
									<textarea class="txt" name="price" placeholder="e.g $150.00"></textarea>
								</div>		
								<div class="col">
									<p>Display Post at home page</p>
									<select class="txt" name="txtHome">
										<option>No</option>
										<option>Yes</option>
									</select>
								</div>
								<div class="col">
									<p>Trending Post</p>
									<select class="txt" name="txtTrending">
										<option>No</option>
										<option>Yes</option>
									</select>
								</div>
								<div class="col">
									<p>status</p>
									<select class="txt" name="txtStatus">
										<option>Draft</option>
										<option>Publish</option>
									</select>
								</div>
								<div class="col" style="margin-top: 12px; margin-bottom: 12px;">
									<input type="file" name="postIMG" placeholder="Upload Image">
								</div>	
								<div class="col">
									<button type="submit">Create Post</button>
								</div>						
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
	</body>
</html>





