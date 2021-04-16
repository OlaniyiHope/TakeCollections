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
								<li><a href="viewComment2.php">comment</a></li>
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
									<th>Title</th>
									<th>Price</th>
									<th>Home Page</th>
									<th>Trending</th>
									<th>Status</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									require_once '../dbconnection.php';  

											$result = mysqli_query($con,"SELECT `postId`, `title`, `price`, `displayHome`, `trending`, `status`, `postDate` FROM post2");                                                      
											while($row = mysqli_fetch_array($result)) {

										       echo '<tr><td><a href="singlePost2.php?tid='.$row['postId'].'"></a>'.$row['title'].'</td>
										      <td>'.$row['price'].'</td> <td>'.$row['displayHome'].'</td><td>'.$row['trending'].'</td><td>'.$row['status'].'</td>
										       <td>'.$row['postDate'].'</td><td><a href="singlePost2.php?tid='.$row['postId'].'">Edit</a></tr>';       
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





