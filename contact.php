<?php
include("dbConn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact Us</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- icons only -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>
		#contact {
		background-image: linear-gradient(rgba(255,255,255,0.75),rgba(255,255,255,0.75)), url('images/b4.jpg');
		}
		section {
		height: 100vh;
		border: 1px solid black;
		display: flex;
		justify-content: center;
		align-items: center;
		text-align: center;	
		background-size: cover; /* Add this line */
		background-position: center center; /* Add this line */
		background-repeat: no-repeat; /* Add this line */
		background-attachment: fixed; /* Add this line */
		}
		section h2 {
    font-size: 2.5em;
}

		</style>
	</head>
	<body>
				<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="images/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
					Apartment
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="notification.php">Notification</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Expenses
							</a>
							<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="festival.php">Festival</a></li>
								<li><a class="dropdown-item" href="maintenance/maintenance.php">Maintenance</a></li>
								<li><a class="dropdown-item" href="extra.php">Extra</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="#">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="feedback/index.php">Feedback</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!--<div class="container">
				<div class="row">
						<div class="col-md-12">
								<h1 class="display-6 font-weight-bold text-uppercase text-center">Contact Us</h1>
						</div>
				</div>
				<div class="row">
						<div class="col-md-4">
								<i class="fa fa-map-marker fa-3x text-success"></i>
								<h3>Location</h3>
								<p>Ahmedabad, Gujarat, India</p>
								<i class="fa fa-phone fa-3x text-secondary" aria-hidden="true"></i>
								<h3>Call Us</h3>
								<p>+91 9999999999</p>
								<i class="fa fa-envelope fa-3x text-dark"></i>
								<h3>Email</h3>
								<p>fapartment@gmail.com</p>
						</div>
				</div>
		</div>-->
		<section id="contact">
			<div class="section-inner">
				<h2>Connect with Us</h2>
				<p style="padding-top: 10px;"><i class="fas fa-map-marker-alt fa-2x"></i> <span style="color: black;"><b>Ahmedabad, Gujarat, India</b></span></a></p>
				<p><img src="images/call.png" style="width:30px;height:30px;"> <span style="color: black;"><b>+91 9999999999</b></span></a></p>
				<p><img src="images/email.png"  style="width:30px;height:30px;"> <a href="https://gmail.com"><span style="color: black;"><b>fapartment@gmail.com</b></span></a></p><br>
				<p>
					<a href="https://instagram.com/"><img src="images/instagram.png"  style="width:30px;height:30px;"></a>
					<a href="https://facebook.com/"><img src="images/facebook.png"  style="width:30px;height:30px;"></a>
				</p>
			</div>
		</section>
	</body>
</html>