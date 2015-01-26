<?php
session_start();

	//!isset($_SESSION['user_id'])
	//replace true
	if(false  ){
		header('Location:http://web.msuiit.edu.ph/');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="_assets\css\bootstrap.min.css">
<link rel="stylesheet" href="_assets\font-awesome-4.2.0\css\font-awesome.min.css">
</head>

<body>

		<div class="container">
		<br>
		<div class="row">
		
		<div class="col-md-2"></div>
		<div class="row col-md-8" style="background-color: #d3ffd3;">
				<!---->
				<div id="details" class="row" style="background-color: #d3d3d3;">
					<div class="col-md-3" align="center" style="background-color: #d3d3ff;">
						<br>
						<img src="_assets\img\alt.jpg" alt="" class="img-responsive img-circle img-thumbnail" width="60%">					
						<br>
						<strong>Alquine Roy F. Taculin</strong>
						<p class="text-muted">CSc 100<br>IT1.B</p>
					</div>
					
					<div class="col-md-9" align="left">
						TER cover photo here
					</div>
				<br>	
				</div>
				<br>
				<div id="main">
					
					<p>Evaluate your teacher objectively based on the given criteria.</p>
					
					<form method="post" action="#">
					
					<h4>I.</h4>
					<p>1. Attends class regularly.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>2. Comes to class on time.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>3. Give reasons when class is suspended.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>4. Dissmisses class on time.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
						
					<h4>II.</h4>
					<p>5. Comes to class well prepared.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>6. Answers well the question of the students.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>7. Presents lessons in an orderly manner.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>8. Presents lessons clearly with present and future application/use.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>9. Covers satisfactorily the contents of the course.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10	
					
					<h4>III.</h4>
					<p>10. Gives illustrations, examples that makes lessons clear.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>11. Gives and returns quizzes/exams regularly after correcting.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>12. Encourage active participation of students.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>13. Listens attentively to student&#39;s reports disscussions in class.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>14. Uses different methods and techniques of teaching to make lessons clear.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>15. Varies teaching strategies to make lessons interesting.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>16. Motivates students to think and analyze.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>17. Shows approachability and open mindedness.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
						
					<h4>IV.</h4>
					<p>18. I learn from this teacher.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>19. The teacher is fair in giving grades.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
					<p>20. I will advise my friends to be &#34;under&#34; this teacher.</p>
						<input type="radio" name="optionsRadios" value="5">5
						<input type="radio" name="optionsRadios" value="6">6
						<input type="radio" name="optionsRadios" value="7">7
						<input type="radio" name="optionsRadios" value="8">8
						<input type="radio" name="optionsRadios" value="9">9
						<input type="radio" name="optionsRadios" value="10">10
						
					<br>
					<p>You are encouraged to give constructive comments to your teacher.</p>
					<textarea class="form-control" rows="5" placeholder="Your comment here..."></textarea>
					<br>
					<div align="right" name="comment">
					<button type="submit" class="btn btn-primary"><i class="fa fa-share"></i> Submit</button>
					</div>
					
					</form>
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