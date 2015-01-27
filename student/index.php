<?php
session_start();

	//!isset($_SESSION['user_id'])
	//replace true
	if(false ){
		header('Location:http://web.msuiit.edu.ph/');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\_assets\css\bootstrap.min.css">
<link rel="stylesheet" href="..\_assets\font-awesome-4.2.0\css\font-awesome.min.css">
</head>

<body>

		<div class="container">
		<br>
		<div class="row">
		
		<div class="col-md-2"></div>
		<div class="row col-md-8" style="background-color: #d3ffd3;">
				<!-- -->
				<div id="details" class="row" style="background-color: #d3d3d3;">
					<div class="col-md-3" align="center" style="background-color: #d3d3ff;">
						<br>
						<img src="..\_assets\img\alt.jpg" alt="" class="img-responsive img-circle img-thumbnail" width="60%">					
						<br>
						<strong>Ma. Katrina D. Labucana</strong>
						<p class="text-muted">BSIT</p>
					</div>
					
					<div class="col-md-9" align="left">
						TER cover photo here
					</div>
				<br>	
				</div>
				<br>
				<div>
					<h4>Current Subjects</h4>
					<table class="table table-striped">
						<thead>
							<th>Subject Code</th>
							<th>Section</th>
							<th>Teacher</th>
						</thead>
						<tr>
							<td>test</td>
							<td>test</td>
							<td>test</td>
						</tr>
						<tr>
							<td>test</td>
							<td>test</td>
							<td>test</td>
						</tr>
						<tr>
							<td>test</td>
							<td>test</td>
							<td>test</td>
						</tr>
					</table>		
				</div>
		</div>
		
		<div class="col-md-2"></div>
		</div>
		</div>
		<br><br>
		<footer>
			footer ko diri.
		</footer>
</body>

</html>