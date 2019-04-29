<!DOCTYPE html>
<html>
<head>
	<title>Our Bootstrap Tamplate</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="header-top">
				<div class="row">
					<div class="col-sm-7">
						<div class="row">
							<div class="col-sm-2">
								<img src="images/logo.png" class="logo">
							</div>
							<div class="col-sm-10">
								<h2>Zaman Web Developer site</h2>
								<p>I learned html, css, javascript, bootstrap, php, mysql, WordPress and laravel.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<img src="images/banner2.png" class="img-responsive" alt="">
					</div>
				</div>
			</div>
			<!-- End Header Top -->
			<!-- Start Navigation Bar-->
			<div class="navigation_bar">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span> 
							</button>
							<a class="navbar-brand" href="https://www.zamanwebdeveloper.com/" target="_blank"><span class="glyphicon glyphicon-home"></span></a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class=""><a href="index.php">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="https://www.zamanwebdeveloper.com/" target="_blank">Websites & Softwares</a></li> 
								<li><a href="#">Contact</a></li> 
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#"><span class="glyphicon glyphicon-user"></span> More</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<!-- End Navigation Bar-->
			<!-- Start Slider -->				
			<div class="ourslider">
				<div class="row">
					<div class="col-sm-9">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="slider/01.jpg" alt="Chania">
									<div class="carousel-caption">
										<h3>Chania</h3>
										<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
									</div>
								</div>

								<div class="item">
									<img src="slider/02.jpg" alt="Chania">
									<div class="carousel-caption">
										<h3>Chania</h3>
										<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
									</div>
								</div>

								<div class="item">
									<img src="slider/03.jpg" alt="Flower">
									<div class="carousel-caption">
										<h3>Flowers</h3>
										<p>Beautiful flowers in Kolymbari, Crete.</p>
									</div>
								</div>

								<div class="item">
									<img src="slider/04.jpg" alt="Flower">
									<div class="carousel-caption">
										<h3>Flowers</h3>
										<p>Beautiful flowers in Kolymbari, Crete.</p>
									</div>
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-sm-3">
						<h2>Author Speach</h2>
						<p>Author Speach Description is here. Author Speach Description is here. Author Speach Description is here. Author Speach Description is here. Author Speach Description is here.</p>
					</div>
				</div>					
			</div>
			<!-- End Slider -->
			<!-- Start Sidebar -->

			<div class="sidebar-content">
				<div class="row">
					<div class="sidebar col-sm-2">
						<h3>Categories</h3>
						<div class="list-group">
							<a href="#" class="list-group-item">HTML</a>
							<a href="#" class="list-group-item">CSS</a>
							<a href="#" class="list-group-item">JavaScript</a>
							<a href="#" class="list-group-item">PHP</a>
							<a href="#" class="list-group-item">MySql</a>
							<a href="#" class="list-group-item">Bootstrap</a>
							<a href="#" class="list-group-item">Laravel</a>
							<a href="#" class="list-group-item">WordPress</a>
						</div>
						<a href="./" class="btn btn-primary">Get our mor features</a>
					</div>
					<div class="col-sm-7">
						<div class="post">
							<div class="post-header">
								<h2><a href="index.php">The Incredible hulk post</a></h2>
								<span class="glyphicon glyphicon-time"></span> 23 April 2019
								<span class="glyphicon glyphicon-user"></span> Syed Zaman
								<span class="glyphicon glyphicon-comment"></span> 10 Comments
							</div>
							<div class="post-content">
								<div class="row">
									<div class="col-sm-5">
										<img src="slider/02.jpg" class="img-responsive img-thumbnail" alt="Slider Image">
									</div>
									<div class="col-sm-7">
										<p>This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content.</p>
										<a href="index2.html" class="btn btn-warning pull-right">Read More...</a>


									</div>
								</div>
							</div>
							<div class="post-footer"></div>
						</div>
						<div class="post">
							<div class="post-header">
								<h2><a href="index.php">The Incredible hulk post</a></h2>
								<span class="glyphicon glyphicon-time"></span> 23 April 2019
								<span class="glyphicon glyphicon-user"></span> Syed Zaman
								<span class="glyphicon glyphicon-comment"></span> 10 Comments
							</div>
							<div class="post-content">
								<div class="row">
									<div class="col-sm-5">
										<img src="slider/02.jpg" class="img-responsive img-thumbnail" alt="Slider Image">
									</div>
									<div class="col-sm-7">
										<p>This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content. This is Post Content.</p>
										<a href="index2.html" class="btn btn-warning pull-right">Read More...</a>


									</div>
								</div>
							</div>
							<div class="post-footer"></div>
						</div>

					</div>
					<div class="sidebar col-sm-3">
						<h3>Popular Post</h3>
						<div class="list-group">
							<a href="#" class="list-group-item">HTML</a>
							<a href="#" class="list-group-item">CSS</a>
							<a href="#" class="list-group-item">JavaScript</a>
						</div>
					</div>
				</div>
			</div>				
		</div>

	</div>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/js/bootstrap.min.js">
</body>
</html>