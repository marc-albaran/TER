<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="_assets\css\bootstrap.min.css">
<link rel="stylesheet" href="_assets\font-awesome-4.2.0\css\font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="_assets\js\formToWizard.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
    });
</script>
<style type="text/css">
        // body { font-family:Lucida Sans, Arial, Helvetica, Sans-Serif; font-size:13px; margin:20px;}
        // #main { width:960px; margin: 0px auto; border:solid 1px #b2b3b5; -moz-border-radius:10px; padding:20px; background-color:#f6f6f6;}
        // #header { text-align:center; border-bottom:solid 1px #b2b3b5; margin: 0 0 20px 0; }
        // fieldset { border:none; width:320px;}
        // legend { font-size:18px; margin:0px; padding:10px 0px; color:#b0232a; font-weight:bold;}
        // label { display:block; margin:15px 0 5px;}
        // input[type=text], input[type=password] { width:300px; padding:5px; border:solid 1px #000;}
        // .prev, .next { background-color:#b0232a; padding:5px 10px; color:#fff; text-decoration:none;}
        // .prev:hover, .next:hover { background-color:#000; text-decoration:none;}
        // .prev { float:left;}
        // .next { float:right;}
        // #steps { list-style:none; width:100%; overflow:hidden; margin:0px; padding:0px;}
        // #steps li {font-size:24px; float:left; padding:10px; color:#b0b1b3;}
        // #steps li span {font-size:11px; display:block;}
        // #steps li.current { color:#000;}
        // #makeWizard { background-color:#b0232a; color:#fff; padding:5px 10px; text-decoration:none; font-size:18px;}
        // #makeWizard:hover { background-color:#000;}
    </style>
</head>

<body>

	<div class="container">
		<div id="main">
			<form id="SignupForm">
				<fieldset id="1">
					<h4>I.</h4>
					<p>1. Attends class regularly.</p>
						<label class="radio-inline">
						  <input type="radio" name="1" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="1" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="1" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="1" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="1" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="1" value="option3"> 10
						</label>
					<p>2. Comes to class on time.</p>
						<label class="radio-inline">
						  <input type="radio" name="2" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="2" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="2" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="2" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="2" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="2" value="option3"> 10
						</label>

					<p>3. Give reasons when class is suspended.</p>
						<label class="radio-inline">
						  <input type="radio" name="3" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="3" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="3" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="3" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="3" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="3" value="option3"> 10
						</label>

					<p>4. Dissmisses class on time.</p>
						<label class="radio-inline">
						  <input type="radio" name="4" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="4" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="4" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="4" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="4" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="4" value="option3"> 10
						</label>

				</fieldset>

				<fieldset id="2">
					<h4>II.</h4>
					<p>5. Comes to class well prepared.</p>
						<label class="radio-inline">
						  <input type="radio" name="5" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="5" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="5" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="5" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="5" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="5" value="option3"> 10
						</label>

					<p>6. Answers well the question of the students.</p>
						<label class="radio-inline">
						  <input type="radio" name="6" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="6" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="6" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="6" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="6" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="6" value="option3"> 10
						</label>
					<p>7. Presents lessons in an orderly manner.</p>
						<label class="radio-inline">
						  <input type="radio" name="7" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="7" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="7" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="7" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="7" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="7" value="option3"> 10
						</label>
					<p>8. Presents lessons clearly with present and future application/use.</p>
						<label class="radio-inline">
						  <input type="radio" name="8" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="8" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="8" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="8" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="8" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="8" value="option3"> 10
						</label>
					<p>9. Covers satisfactorily the contents of the course.</p>
						<label class="radio-inline">
						  <input type="radio" name="9" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="9" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="9" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="9" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="9" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="9" value="option3"> 10
						</label>
				</fieldset>

				<fieldset id="3">
					<h4>III.</h4>
					<p>10. Gives illustrations, examples that makes lessons clear.</p>
						<label class="radio-inline">
						  <input type="radio" name="10" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="10" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="10" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="10" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="10" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="10" value="option3"> 10
						</label>
					<p>11. Gives and returns quizzes/exams regularly after correcting.</p>
						<label class="radio-inline">
						  <input type="radio" name="11" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="11" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="11" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="11" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="11" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="11" value="option3"> 10
						</label>
					<p>12. Encourage active participation of students.</p>
						<label class="radio-inline">
						  <input type="radio" name="12" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="12" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="12" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="12" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="12" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="12" value="option3"> 10
						</label>
					<p>13. Listens attentively to student’s reports disscussions in class.</p>
						<label class="radio-inline">
						  <input type="radio" name="13" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="13" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="13" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="13" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="13" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="13" value="option3"> 10
						</label>
					<p>14. Uses different methods and techniques of teaching to make lessons clear.</p>
						<label class="radio-inline">
						  <input type="radio" name="14" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="14" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="14" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="14" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="14" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="14" value="option3"> 10
						</label>
					<p>15. Varies teaching strategies to make lessons interesting.</p>
						<label class="radio-inline">
						  <input type="radio" name="15" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="15" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="15" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="15" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="15" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="15" value="option3"> 10
						</label>
					<p>16. Motivates students to thik and analyze.</p>
						<label class="radio-inline">
						  <input type="radio" name="16" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="16" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="16" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="16" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="16" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="16" value="option3"> 10
						</label>
					<p>17. Shows approachability and open mindedness.</p>
						<label class="radio-inline">
						  <input type="radio" name="17" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="17" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="17" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="17" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="17" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="17" value="option3"> 10
						</label>
				</fieldset>
				
				<fieldset id="4">
					<h4>IV.</h4>
					<p>18. I learn from this teacher.</p>
						<label class="radio-inline">
						  <input type="radio" name="18" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="18" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="18" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="18" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="18" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="18" value="option3"> 10
						</label>
					<p>19. The teacher is fair in giving grades.</p>
						<label class="radio-inline">
						  <input type="radio" name="19" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="19" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="19" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="19" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="19" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="19" value="option3"> 10
						</label>
					<p>20. I will advise my friends to be <i>under</i> this teacher.</p> 
						<label class="radio-inline">
						  <input type="radio" name="20" value="option1"> 5
						</label>
						<label class="radio-inline">
						  <input type="radio" name="20" value="option2"> 6
						</label>
						<label class="radio-inline">
						  <input type="radio" name="20" value="option3"> 7
						</label>
						<label class="radio-inline">
						  <input type="radio" name="20" value="option3"> 8
						</label>
						<label class="radio-inline">
						  <input type="radio" name="20" value="option3"> 9
						</label>
						<label class="radio-inline">
						  <input type="radio" name="20" value="option3"> 10
						</label>
				</fieldset>
		
			</form>
		</div>
		
		<div align="center">
		<nav>
		  <ul class="pagination">
			<li>
			  <a href="#" aria-label="Previous">
				<i class="fa fa-caret-left"></i>
			  </a>
			</li>
			
			<li><a href="#1">1</a></li>
			<li><a href="#2">2</a></li>
			<li><a href="#3">3</a></li>
			<li><a href="#4">4</a></li>
			<li>
			
			  <a href="#" aria-label="Next">
				<i class="fa fa-caret-right"></i>
			  </a>
			</li>
		  </ul>
		</nav>
		</div>
	</div>

</body>

</html>