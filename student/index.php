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
<link rel="stylesheet" href="../_assets\css\bootstrap.min.css">
<link rel="stylesheet" href="../_assets\font-awesome-4.2.0\css\font-awesome.min.css">
</head>

<body>

		<div class="container">
		<br>
		<div class="row">
		
		<div class="col-md-2"></div>
		<div class="row col-md-8">
				<!-- style="background-color: #d3ffd3;"-->
				<div id="details" class="row" style="background-color: #d3d3d3;">
					<div class="col-md-3" align="center" style="background-color: #d3d3ff;">
						<br>
						<img src="../_assets\img\alt.jpg" alt="" class="img-responsive img-circle img-thumbnail" width="60%">					
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
				<div>
					
					<p>Evaluate your teacher objectively based on the given criteria.</p>
					
					<form method="post" action="#">
					
					<h4>I.</h4>
					<p>1. Attends class regularly.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item1" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item1" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item1" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item1" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item1" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item1" value="10">10
						</label>
					<p>2. Comes to class on time.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item2" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item2" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item2" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item2" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item2" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item2" value="10">10
						</label>
					<p>3. Give reasons when class is suspended.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item3" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item3" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item3" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item3" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item3" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item3" value="10">10
						</label>
					<p>4. Dissmisses class on time.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item4" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item4" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item4" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item4" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item4" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item4" value="10">10
						</label>
						
					<h4>II.</h4>
					<p>5. Comes to class well prepared.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item5" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item5" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item5" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item5" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item5" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item5" value="10">10
						</label>
					<p>6. Answers well the question of the students.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item6" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item6" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item6" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item6" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item6" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item6" value="10">10
						</label>
					<p>7. Presents lessons in an orderly manner.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item7" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item7" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item7" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item7" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item7" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item7" value="10">10
						</label>
					<p>8. Presents lessons clearly with present and future application/use.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item8" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item8" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item8" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item8" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item8" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item8" value="10">10
						</label>
					<p>9. Covers satisfactorily the contents of the course.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item9" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item9" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item9" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item9" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item9" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item9" value="10">10	
						</label>
						
					<h4>III.</h4>
					<p>10. Gives illustrations, examples that makes lessons clear.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item10" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item10" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item10" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item10" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item10" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item10" value="10">10
						</label>
					<p>11. Gives and returns quizzes/exams regularly after correcting.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item1" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item11" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item11" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item11" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item11" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item11" value="10">10
						</label>
					<p>12. Encourage active participation of students.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item12" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item12" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item12" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item12" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item12" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item12" value="10">10
						</label>
					<p>13. Listens attentively to student&#39;s reports disscussions in class.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item13" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item13" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item13" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item13" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item13" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item13" value="10">10
						</label>
					<p>14. Uses different methods and techniques of teaching to make lessons clear.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item14" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item14" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item14" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item14" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item14" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item14" value="10">10
						</label>
					<p>15. Varies teaching strategies to make lessons interesting.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item15" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item15" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item15" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item15" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item15" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item15" value="10">10
						</label>
					<p>16. Motivates students to think and analyze.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item16" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item16" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item16" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item16" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item16" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item16" value="10">10
						</label>
					<p>17. Shows approachability and open mindedness.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item17" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item17" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item17" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item17" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item17" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item17" value="10">10
						</label>	
					
					<h4>IV.</h4>
					<p>18. I learn from this teacher.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item18" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item18" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item18" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item18" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item18" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item18" value="10">10
						</label>
						
					<p>19. The teacher is fair in giving grades.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item19" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item19" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item19" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item19" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item19" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item19" value="10">10
						</label>
					<p>20. I will advise my friends to be &#34;under&#34; this teacher.</p>
						<label class="checkbox-inline">
						<input type="radio" name="item20" value="5">5
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item20" value="6">6
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item20" value="7">7
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item20" value="8">8
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item20" value="9">9
						</label>
						<label class="checkbox-inline">
						<input type="radio" name="item20" value="10">10
						</label>
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