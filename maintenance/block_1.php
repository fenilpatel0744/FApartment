<?php
include("../dbConn.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Block 1</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<style>
		body{
		background-image: linear-gradient(rgba(255,255,255,0.75),rgba(255,255,255,0.75)), url('../images/b4.jpg');
		}
		hr {
		color: #0000004f;
		margin-top: 5px;
		margin-bottom: 5px
		}
		.add td {
		color: #c5c4c4;
		text-transform: uppercase;
		font-size: 12px
		}
		.content {
		font-size: 14px
		}
		</style>
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
							<a class="nav-link active" aria-current="page" href="#">Block 1</a>
						</li>
					</ul>
				</div>
				<ul class="nav nav-pills justify-content-end">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="maintenance.php">Exit</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container mb-3" style="margin-top: 100px;">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8" style="background: #a6a4a4; padding-top: 13px; padding-bottom: 13px;">
					<div class="card">
						<div class="d-flex flex-row p-2"> <img src="../images/logo.jpg" width="46">
							<div class="d-flex flex-column"> <span class="font-weight-bold" style="padding-left: 10px;">Invoice</span> <small style="padding-left: 10px;">INV-F01</small> </div>
						</div>
						<hr>
						<div class="table-responsive p-2">
							<table class="table table-borderless">
								<tbody>
									<tr class="add">
										<td>To</td>
										<td>From</td>
									</tr>
									<tr class="content">
										<td class="font-weight-bold">F Apartment, Block 1 <br>Ahmedabad</td>
										<td class="font-weight-bold">Municipal Corporation <br> Ahmedabad</td>
									</tr>
								</tbody>
							</table>
						</div>
						<hr>
						<div class="products p-2">
							<table class="table table-borderless">
								<tbody>
									<tr class="add">
										<h6 style="text-align: center;">Water Bill</h6>
										<td>Flat Number</td>
										<td>Unit</td>
										<td>Amount + Extra</td>	
										<td>Total</td>
									</tr>
									<tr class="content">
										<td>101</td>
										<td>15</td>
										<td>500 + 100</td>
										<td>600</td>	
									</tr>
									<tr class="content">
										<td>102</td>
										<td>10</td>
										<td>450 + 100</td>
										<td>550</td>										
									</tr>
									<tr class="content">
										<td>201</td>
										<td>23</td>
										<td>750 + 100</td>
										<td>850</td>										
									</tr>
									<tr class="content">
										<td>202</td>
										<td>27</td>
										<td>900 + 100</td>
										<td>1000</td>	
									</tr>
									<tr class="content">
										<td>301</td>
										<td>17</td>
										<td>550 + 100</td>
										<td>650</td>	
									</tr>
									<tr class="content">
										<td>302</td>
										<td>20</td>
										<td>600 + 100</td>
										<td>700</td>	
									</tr>
								</tbody>
							</table>
						</div>
						<hr>
						<div class="address p-2">
							<h6>Note:</h6>
							<p> 1) Here extra 100 rupees for repairing the water tank! <br> 2) Submit this amount by date 01/01/2021 without fail, If you will fail to pay this amount, you have to pay also 50 rupees penalty extra! </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>