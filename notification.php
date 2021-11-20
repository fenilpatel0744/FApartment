<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Notification</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<style>
		body{
		background-image: linear-gradient(rgba(255,255,255,0.75),rgba(255,255,255,0.75)), url('images/b4.jpg');
		}
		</style>
	</head>
	<body style="overflow-x: hidden;">
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
							<a class="nav-link active" href="notification.php">Notification</a>
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
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="feedback/index.php">Feedback</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="row" style="margin-top: 120px; margin-left: 165px;">
			<div class="col-sm-5">
				<div class="card text-white bg-primary">
					<div class="card-header">GYM Notification</div>
					<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text"> "Gym" is also slang for "fitness centre", which is often an area for indoor recreation.</p>
					</div>
					<div class="card-footer text-white">
						2 days ago
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="card text-white bg-secondary">
					<div class="card-header">Sports Notification</div>
					<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text">'Sport' means all forms of physical activity which, aim at expressing or improving physical fitness and mental wellbeing.</p>
					</div>
					<div class="card-footer text-white">
						2 days ago
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 50px; margin-left: 165px; margin-bottom: 71px;">
			<div class="col-sm-5">
				<div class="card text-white bg-success">
					<div class="card-header">Billing Notification</div>
					<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text">-<br>-</p>
					</div>
					<div class="card-footer text-white">
						2 days ago
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="card text-white bg-danger">
					<div class="card-header">Extra Notification</div>
					<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text">-<br>-</p>
					</div>
					<div class="card-footer text-white">
						2 days ago
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>