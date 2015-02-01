<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	
	<title>Mindanao State University-Iligan Institute of Technology</title>

	<!--Bootstrap Core Css-->
	<link rel="stylesheet" href="../_assets\css\bootstrap.min.css">
	<link rel="stylesheet" href="../_assets\font-awesome-4.2.0\css\font-awesome.min.css">

	<!--SCRIPT-->
	<script type="text/javascript "src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<script type="text/javascript" src=""></script>
	<script type="text/javascript" src="../_assets\js\formToWizard.js"></script>
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
	<br>
	<div class="row">
	
	<div class="col-md-2"></div>
	<div class="row col-md-8">
	
		<div id="details" class="row" style="background-color: #7e0108;">
			<div class="col-md-3" align="center" style="background-color: #7e0108;">
				<br>
				<img src="../_assets\img\alt.jpg" alt="" class="img-responsive img-circle img-thumbnail" width="60%">
				
				<br>
				<font color="#ffffff"><strong>Name of Faculty:</strong></font>
				<p class="text-muted"><font color="#ffffff">Faculty ID:<br>Deaprtment:<br>College:</p></font>

			</div>
		<div class="col-md-9" align="left">
			</div>
		</div>
	<br>
		<div class="panel panel-default" align="center">
			<ul class="nav nav-tabs nav-justified">
				<li role="presentation" class="active"><a href="viewTER.php">Current Semester</a></li>
			<li role="presentation"><a href="history.php">History</a></li>
		</ul>
	<br>
	<table class="table table-condensed" align ="center">
				
					<tr>
						<th><strong>Course</strong></th>
						<th><strong>Section<strong></th>
						<th><strong>Schedule</strong></th>	
						<th><strong>Over-All Rating</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>CSC 102 Sample</td>
						<td>IT2A Sample</td>
						<td>MTh 7:00-9:00 Sample</td>
						<td>72%</td>
					</tr>
					<tr>
						<td>CSC 102 Sample</td>
						<td>IT2A Sample</td>
						<td>MTh 7:00-9:00 Sample</td>
						<td>72%</td>
					</tr>
					<tr>
						<td>CSC 102 Sample</td>
						<td>IT2A Sample</td>
						<td>MTh 7:00-9:00 Sample</td>
						<td>72%</td>
					</tr>
				</tbody>
			</table>
		</div>	
	</div>
	</div>
	</div>
	
	<!--Script DataTables-->
	<script>
	$(document).ready(function() {
    $('.myEvaluation').dataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
	} );
	</script>
	
	<!--SCRIPT Clickable ROW-->
	<!--
	<script>
		jQuery(document).ready(function($) {
			$(".clickableRow").click(function() {
				window.document.location = $(this).attr("href");
			});
		});
	</script>
	-->
</body>
</html>

