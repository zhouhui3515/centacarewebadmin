<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Centacare Signin</title>
	<link type="text/css" rel="stylesheet" href="css/styles.css"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<style>
		.carousel-inner > .item > img, .carousel-inner > .item > a > img {
			margin: auto;
		}
	</style>
</head>

<body>
	<br>
	<div class="container" id="header">
		<header class="row">
			<div class="col-md-7"><img src="images/logo.png" /></div>
			<nav class="container">
				<ul class="list-inline">
					<li class="col-md-1"><a href="home.php">Album</a></li>
					<li class="col-md-1"><a href="schedule.php">Schedule</a></li>
					<li class="col-md-1"><a href="user.php">User</a></li>
					<li class="col-md-1"><a href="category.php">Category</a></li>
				</ul>
			</nav>
		</header>
	</div>
	<div id="banner">
		<p class="container">Album</p>
		<img src="images/banner.png"/>
	</div>
	<div class="container">
		<form action="upload.php" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
		</form>
	</div>
	<footer class="jumbotron">
		<p>© 2016 Centacare</p>
	</footer>
</body>
</html>