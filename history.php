<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	
	<title>Mindanao State University-Iligan Institute of Technology</title>

	<!--Bootstrap Core Css-->
	<link rel="stylesheet" href="_assets\css\bootstrap.min.css">
	<link rel="stylesheet" href="_assets\font-awesome-4.2.0\css\font-awesome.min.css">

	<!--SCRIPT-->
	<script type="text/javascript "src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<script type="text/javascript" src=""></script>
	<script type="text/javascript" src="_assets\js\formToWizard.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
		});
	</script>
	
	<style type="text/css">
    </style>
</head>

<!--BODY-->
<body>
	<div class="container">
	<div class="col-md-2"></div>
	<div class="row col-md-8">
		<div id="details" style="background-color: #6495ed;">
			<strong>Name of Faculty:</strong>
			<br><strong>Faculty ID:</strong>
			<br><strong>Department:</strong>
			<br><strong>College:</strong>
		</div>
		<div id="main" background-color: #6495es;></div>
	</div>
	<div class="col-md-2"></div>
	<br><br><br><br><br><br>
	<div class="container">
	<div class="panel panel-default">
	<ul class="nav nav-tabs nav-justified">
		<li role="presentation"><a href="#">Current Semester</a></li>
		<li role="presentation" class="active"><a href="history.php">History</a></li>
	</ul>
	<br>
	<div class="responsive-table">
		<table class="table table-border">
			<thead>
				<tr>
					<th><strong>Course</strong></th>
					<th><strong>Section<strong></th>
					<th><strong>Schedule</strong></th>	
					<th><strong>Over-All Rating</strong></th>
				</tr>
			</thead>
			<tbody>
				<tr>
				</tr>
			</tbody>
			</table>
		</div>	
	</div>
	</div>
	</div>
</body>
</html>

