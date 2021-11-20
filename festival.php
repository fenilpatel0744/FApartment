<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Festival</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
							<a class="nav-link" href="notification.php">Notification</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Expenses
							</a>
							<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item active" href="festival.php">Festival</a></li>
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
		
		<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top:50px;">
			<div class="col">
				<div class="card">
					<img src="images/navratri.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Navratri</h5>
						<p class="card-text">Navratri is a nine-day festival during which the nine forms of the goddess Durga are worshiped.</p>
						<a href="navratri/navratri.php" class="btn btn-outline-dark">Expenses</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="images/diwali.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Diwali</h5>
						<p class="card-text">Diwali is known as the festival of lights. Diwali is one the most famous and the biggest festival of India.</p>
						<a href="#" class="btn btn-outline-dark">Expenses</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="images/uttarayan.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Uttarayan</h5>
						<p class="card-text">Makar Sankranti, one of the most ancient festivals of India, is celebrated as Uttarayan in Gujarat.</p>
						<a href="#" class="btn btn-outline-dark">Expenses</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="images/janmashtami.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Janmashtami</h5>
						<p class="card-text">It is celebrated as the birth anniversary of Lord Krishna. Lord Krishna is considered as the 8th incarnation or avatar of Lord Vishnu.</p>
						<a href="#" class="btn btn-outline-dark">Expenses</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="images/ganesh_chaturthi.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Ganesh Chaturthi</h5>
						<p class="card-text">Ganesh Chaturthi, also called Vinayaka Chavithi, is an auspicious Hindu festival which is celebrated for 10 days every year.</p>
						<a href="#" class="btn btn-outline-dark">Expenses</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="images/christmas.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Christmas</h5>
						<p class="card-text">Christmas is a religious and cultural festival celebrated worldwide by Christians. It is a celebration of the commemoration of the birth of Jesus Christ.</p>
						<a href="#" class="btn btn-outline-dark">Expenses</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>