<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	
	<title>Mindanao State University-Iligan Institute of Technology</title>

	<!--Bootstrap Core Css-->
	<link rel="stylesheet" href="../_assets\css\bootstrap.min.css">
	<link rel="stylesheet" href="../_assets\font-awesome-4.2.0\css\font-awesome.min.css">

	<!--DataTables CSS-->
	<link rel="stylesheet" type="text/css" href="../DataTables-1.10.4\media\css\jquery.dataTables.css">
	
	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="../DataTables-1.10.4/media/js/jquery.js"></script>
  
	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="../DataTables-1.10.4/media/js/jquery.dataTables.js"></script>
	
	<!--SUM().JS
	<script type="text/javascript" src="sum().js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var table = $('#example').DataTable();
			
			$('#button').click( function () {
				alert('Column 4 total: '+table.column(4).data().sum() );
			} );
		} );
	</script>-->
		
	<!--SCRIPT-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<script type="text/javascript" src=""></script>
	<script type="text/javascript" src="_assets\js\formToWizard.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
		});
	</script>
	
	<script>
		$(document).ready( function () {
			$('#table_id').DataTable();
		} );
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
		<div class="panel panel-default">
			<p><h4>Detailed Evaluation</h4></p>
			<br>
			<form method="post" action="#">
					
					<h4>I.</h4>
					<p>1. Attends class regularly.</p>
					<p>2. Comes to class on time.</p>
					<p>3. Give reasons when class is suspended.</p>
					<p>4. Dissmisses class on time.</p>
					<h4>II.</h4>
					<p>5. Comes to class well prepared.</p>
					<p>6. Answers well the question of the students.</p>
					<p>7. Presents lessons in an orderly manner.</p>
					<p>8. Presents lessons clearly with present and future application/use.</p>
					<p>9. Covers satisfactorily the contents of the course.</p>						
					<h4>III.</h4>
					<p>10. Gives illustrations, examples that makes lessons clear.</p>
					<p>11. Gives and returns quizzes/exams regularly after correcting.</p>
					<p>12. Encourage active participation of students.</p>
					<p>13. Listens attentively to student&#39;s reports disscussions in class.</p>
					<p>14. Uses different methods and techniques of teaching to make lessons clear.</p>
					<p>15. Varies teaching strategies to make lessons interesting.</p>
					<p>16. Motivates students to think and analyze.</p>
					<p>17. Shows approachability and open mindedness.</p>					
					<h4>IV.</h4>
					<p>18. I learn from this teacher.</p>
					<p>19. The teacher is fair in giving grades.</p>
					<p>20. I will advise my friends to be &#34;under&#34; this teacher.</p>
			</form>
		</div>	
	</div>
	</div>
	</div>
</body>
</html>

