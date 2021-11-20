<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Navratri</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="../images/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
					Apartment
				</a>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Navratri</a>
						</li>
					</ul>
				</div>
				<ul class="nav nav-pills justify-content-end">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../festival.php">Exit</a>
					</li>
				</ul>
			</div>
		</nav>
		<h2 style="text-align: center; margin-top:100px;">Add Data</h2>
		<form method="post" action="navratri.php" style="margin-top:10px; margin-left: 100px; margin-right: 100px;">
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Day</label>
				<select name="day" class="form-select" required>
					<option value="">Select Day...</option>
					<option value="1">Day 1</option>
					<option value="2">Day 2</option>
					<option value="3">Day 3</option>
					<option value="4">Day 4</option>
					<option value="5">Day 5</option>
					<option value="6">Day 6</option>
					<option value="7">Day 7</option>
					<option value="8">Day 8</option>
					<option value="9">Day 9</option>
					<option value="10">Dussehra</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Description</label>
				<input type="text" class="form-control" name="description" id="description" placeholder="About..." required>
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Amount</label>
				<input type="text" class="form-control" name="amount" id="amount" placeholder="Amount..." required>
			</div>
			<div class="col-12">
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
		<hr style="margin-top:40px; margin-bottom: 40px;">
		<?php
		error_reporting(0);
		$sname= "localhost";
		$uname= "root";
		$password = "";
		$db_name = "appt_website";
		$conn = mysqli_connect($sname, $uname, $password, $db_name);
		if (!$conn) {
			echo "<br>"."Starting Connection failed!";
		}
		$day = $_POST['day'];
		$description = $_POST['description'];
		$amount = $_POST['amount'];
		if(isset($_POST['submit']))
		{
		if(!preg_match('/^[0-9]*$/', $amount)) {
		echo '<script>alert("Only enter numeric value in amount!"); window.location.href = "navratri/navratri.php";</script>';
		}
		else{
		$query ="insert into `navratri` (`Day`, `Description`, `Amount`)values('$day', '$description', '$amount')";
		$result = mysqli_query($conn, $query);
		if (!$result)
		{
		echo "<br>"."Connection failed!";
		}
		else
		{
		echo '<script>alert("Data added Successfully!"); window.location.href = "navratri.php";</script>';
		}
		}
		}
		?>
		<table class="table table-success table-striped">
			<tr>
				<td><b>Day</b></td>
				<td><b>Description</b></td>
				<td><b>Amount</b></td>
				<td><b>Date & Time</b></td>
				<td><b>Edit</b></td>
				<td><b>Delete</b></td>
			</tr>
			<?php
			include "dbConn.php"; // Using database connection file here
			$records = mysqli_query($dbConn,"select * from navratri"); // fetch data from database
			while($data = mysqli_fetch_array($records))
			{
			?>
			<tr>
				<td><?php echo $data['Day']; ?></td>
				<td><?php echo $data['Description']; ?></td>
				<td><?php echo $data['Amount']; ?></td>
				<td><?php echo $data['Date & Time']; ?></td>
				<td><a class="btn btn-success" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
				<td><a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>