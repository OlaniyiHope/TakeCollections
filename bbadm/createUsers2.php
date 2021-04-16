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
				

						<form action="addUserScript2.php" method="POST" enctype="multipart/form-data">
							<div class="form-row">
						

								<div class="col">
									<p>Role</p>
									<input type="text" name="txtrole" class="txt1" >
								</div>

								<div class="col">
									<p>First Name</p>
									<textarea class="txtFname" name="fname"></textarea>
								</div>	
									<div class="col">
									<p>Last Name</p>
									<textarea class="txtFname" name="lname"></textarea>
								</div>	
									<div class="col">
									<p>Email Address</p>
									<textarea class="txtFname" name="emmail"></textarea>
								</div>
									<div class="col">
									<p>Phone Number</p>
									<textarea class="txtFname" name="phone"></textarea>
								</div>
									<div class="col">
									<p>Password</p>
									<textarea class="txtFname" name="pass"></textarea>
								</div>
									<div class="col">
									<p>Confirm Password</p>
									<textarea class="txtFname" name="cpass"></textarea>
								</div>
							
							
								<div class="col">
									<button type="submit" name="submit">Create Users</button>
								</div>						
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
	</body>
</html>





