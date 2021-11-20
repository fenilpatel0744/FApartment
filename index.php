<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<title>Apartment Website</title>
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
							<a class="nav-link active" aria-current="page" href="#">Home</a>
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
							<a class="nav-link" href="contact.php">Contact Us</a>
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
												<div class="row row-col-1">
																	<img src="images/apartment.jpg" class="img-fluid" style="margin-top: 20px;" alt="Apartment">
												</div>
							</div>
		</div>-->
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/apartment.jpg" class="d-block w-100" alt="Apartment">
				</div>
				<div class="carousel-item">
					<img src="images/apartment1.jpg" class="d-block w-100" alt="Apartment">
				</div>
				<div class="carousel-item">
					<img src="images/apartment2.jpg" class="d-block w-100" alt="Apartment">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
			</button>
		</div>
		<hr>
		<h2 style="text-align: center;">Sample House</h2>
		<hr>
		<img src="images/house.jpg" class="img-fluid" alt="Sample House">
		<hr>
		<h2 style="text-align: center;">Blueprint of House</h2>
		<hr>
		<img src="images/blueprint.jpg" class="img-fluid" alt="Blueprint of House" style="margin-right: auto; margin-left: auto; display: block; width: 60%;">
		<hr>
		<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
			<div class="container text-center">
				<div>Copyright &copy; 2021 Fenil Patel</div>
			</div>
		</footer>
	</body>
</html>