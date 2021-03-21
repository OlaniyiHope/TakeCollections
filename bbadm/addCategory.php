<!DOCTYPE html>
<html lang="en">
<head>
	<title>BlogProg Admin only</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body>
		<header>
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
								<li><a href="viewCategory.php"> view category</a></li>
								<li><a href="viewPost.php">view post</a></li>
								<li><a href="viewUsers.php">view users</a></li>
								<li><a href="#">comment</a></li>
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="content">
					<div class="form">
						<form action="catscript.php" method="POST">
							<div class="form-row">
								
								<div class="col">
									<p>Add New Category</p>
									<input type="text" class="txt1" placeholder="Add New Cat" name="cat_desc">
								</div>
								<div class="col">
									<button type="submit" name="submit">CREATE NOW</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
</body>
</html>