

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Take Collections</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
<style>

.navbar ul li a{
	color: black;
	margin: 15px;
	padding-top: 20px;
	vertical-align: middle;
	text-transform: uppercase;
	font-weight: 500;
	line-height: 5;

}
.navbar ul li a:hover{
	color: #ffc107;
}
	#gallery2{
    display: flex;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding-bottom: 50px;
    padding-top: 50px;
    height: auto;
    width: 90%;

    margin-left: 50px;
}
#gallery2 .col{
    flex-basis: 30%;
    width: 28%;
    margin-bottom: 10px;
}
#gallery2 h4{
    
    color: #000;
   font-weight: 700;
    font-size: 25px;
}
#gallery2 h6{
      color: #000;
   
    font-size: 20px;
}
.p-info{
	display: flex;
	width: 100%;
}
.p-info h6{
	flex-basis: 30%;
}
.p-info span{
	flex-basis: 20%;
	margin-left: 100px;
}
</style>

</head>

<body>

		<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
				<a class="navbar-brand logo_h" href="index.php"><h3>TAKE COLLECTIONS</h3></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto nav-link">
						
							<li class="nav-item active"><a class="nav-link">
								<li><a href="login.php">Login</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="category.php">Shop</a></li>>
								<?php
					require_once 'dbconnection.php';

					$result = mysqli_query($con,"SELECT `cat_Id`, `cat_desc` FROM category");                                                      
					while($row = mysqli_fetch_array($result)) {			
				          echo  '
				          	<li><a href="topics.php?ct='.$row['cat_Id'],'">'.$row['cat_desc'], '</a><li>';    
					}
				?>
				</a></li>
						</ul>
					
					</div>
				</div>
			</nav>
		</div>

	</header>
	<!-- End Header Area -->



	
	
	<!--start product area-->
			<h2 class="text-center">Latest Product</h2>
					<?php
						require_once 'dbconnection.php';

						if (isset($_GET['ct'])) {
							$ct = $_GET['ct'];

							$result = mysqli_query($con,"SELECT `image`, `title`, `postId` FROM post WHERE catId = '$ct'");                   
							while($row = mysqli_fetch_array($result)) {

				          		echo '
				          			<div class="item">
										<a href="read-post.php?tid='.$row['postId'].'">
										<div class="bg">
											<img src="postImg/'.$row['image'].'" alt="read article image">
											<h5>'.$row['title'].' </h5>
										</div></a>
									</div>
				          		';    
							}
						}
					?>

	<!-- end product Area -->



	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							We are TAKE COLLECTIONS. We love you and we want you to be part of us. We sell any kind of products  you
							want.
							Dont leave our site without purchasing any of our products.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Contact US</h6>
						<p>Lagos, Ibadan, Osogbo and any western state in Nigeria</p>
						<div class="" id="mc_embed_signup">

						

								<div class="d-flex flex-row">

									<h2>+2347038412640</h2>


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Hope</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>