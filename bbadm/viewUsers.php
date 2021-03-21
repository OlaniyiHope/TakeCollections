<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BlogProg Admin only</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/custom.css">

		<style>
			table thead {
				background-color: #000;
				color: #fff;
			}
			table tbody tr:nth-child(even){
				background-color: #95C3C1;
				color: #fff;
			}
			table tbody tr:nth-child(even) a{
				color: #fff;			
			}
			table tbody tr:nth-child(even) a:hover{
				color: #f00;			
			}
			table th, table td{
				padding:13px;
				border:none;
			}
		 	table td{
				font-size: 16px;
			}
			table td a{
				text-decoration: none;
				color: #000;
			}
			table td a:hover{
				color: #f00;
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
								<li><a href="viewCategory.php"> view category</a></li>
								<li><a href="viewPost.php">view post</a></li>
								<li><a href="viewUsers.php">view users</a></li>
								<li><a href="viewCommment.php">comment</a></li>
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="content">
					<div class="form">
						<?php
							if (isset($_GET['feedback'])) {

								$err = $_GET['feedback'];
								if ($err == "delete") {
									echo "<p style='color:red; background-color:#D7FEDA'> Record was successfully deleted. </p>";
								}
							}
						?>

						
						<table>
							<thead>
								<tr>
									<th>Role</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Password</th>
									<th>Confirm Password</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									require_once '../dbconnection.php';  

											$result = mysqli_query($con,"SELECT `userId`, `role`, `firstname`, `lastname`, `email`, `phone`, `password`,`cpassword` FROM users");
													while($row = mysqli_fetch_array($result)) {

										       echo '<tr><td><a href="singleUser.php?tid='.$row['userId'].'"></a>'.$row['role'].'</td>
										       <td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['email'].'</td>
										       <td>'.$row['phone'].'</td><td>'.$row['password'].'</td><td>'.$row['cpassword'].'</td><td><a href="singleUser.php?tid='.$row['userId'].'">Edit</a></tr>';       
											}
								 ?>
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</main>
	</body>
</html>





