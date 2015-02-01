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
					<table class="table">
						<thead>
							<tr>
								<th style="width:490px;"></th>
								<th style="width:150px; text-align: center;">Raw Score</th>
								<th style="width:150px; text-align: center;">No. of Students</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><h4>I.</h4></td>
							</tr>
							<tr>
								<td><b>1.</b> Attends class regularly.</td>
								<td><input type="RS1" name="row_score1"></td>
								<td><input type="S1" name="s1"></td>
							</tr>
							<tr>
								<td><b>2.</b> Comes to class on time.</td>
								<td><input type="RS2" name="row_score2"></td>
								<td><input type="S2" name="s2"></td>
							 </tr>
							 <tr>
								<td><b>3.</b> Gives reasons when the class is suspended.</td>
								<td><input type="RS3" name="row_score3"></td>
								<td><input type="S3" name="s3"></td>
							</tr>
							<tr>
								<td><b>4.</b> Dismisses class on time.</td>
								<td><input type="RS4" name="row_score4"></td>
								<td><input type="S4" name="s4"></td>
							</tr>
							<tr>
								<td><h4>II.</h4></td>
							</tr>
							<tr>
								<td><b>5.</b> Comes to class well prepared.</td>
								<td><input type="RS5" name="row_score5"></td>
								<td><input type="S5" name="s5"></td>
							</tr>
							<tr>
								<td><b>6.</b> Answers well the question of the students.</td>
								<td><input type="RS6" name="row_score6"></td>
								<td><input type="S6" name="s6"></td>
							</tr>
							<tr>
								<td><b>7.</b> Presents lessons in an orderly manner.</td>
								<td><input type="RS7" name="row_score7"></td>
								<td><input type="S7" name="s7"></td>
							</tr>
							<tr>
								<td><b>8.</b> Presents lessons clearly with present and future application/use.</td>
								<td><input type="RS8" name="row_score8"></td>
								<td><input type="S8" name="s8"></td>
							</tr>
							<tr>
								<td><b>9.</b> Covers satisfactorily the contents of the course..</td>
								<td><input type="RS9" name="row_score9"></td>
								<td><input type="S9" name="s9"></td>
							</tr>
							<tr>
								<td><h4>III.</h4></td>
							</tr>
							<tr>
								<td><b>10.</b> Gives illustrations, examples that make lessons clear.</td>
								<td><input type="RS10" name="row_score10"></td>
								<td><input type="S10" name="s10"></td>
							</tr>
							<tr>
								<td><b>11.</b> Gives and returns quizzes/exams regularly after correcting.</td>
								<td><input type="RS11" name="row_score11"></td>
								<td><input type="S11" name="s11"></td>
							</tr>
							<tr>
								<td><b>12.</b> Encourages active participation of students.</td>
								<td><input type="RS12" name="row_score12"></td>
								<td><input type="S12" name="s12"></td>
							</tr>
							<tr>
								<td><b>13.</b> Listens attentively to students reports discussion in class.</td>
								<td><input type="RS13" name="row_score13"></td>
								<td><input type="S13" name="s13"></td>
							</tr>
							<tr>
								<td><b>14.</b> Uses different methods and techniques of teaching to make lessons clear.</td>
								<td><input type="RS14" name="row_score14"></td>
								<td><input type="S14" name="s14"></td>
							</tr>
							<tr>
								<td><b>15.</b> Varies teaching strategies to make lessons interesting.</td>
								<td><input type="RS15" name="row_score15"></td>
								<td><input type="S15" name="s15"></td>
							</tr>
							<tr>
								<td><b>16.</b> Motivates students to think and analyze.</td>
								<td><input type="RS16" name="row_score16"></td>
								<td><input type="S16" name="s16"></td>
							</tr>
							<tr>
								<td><b>17.</b> Shows approachability and open mindedness.</td>
								<td><input type="RS17" name="row_score17"></td>
								<td><input type="S17" name="s17"></td>
							</tr>
							<tr>
								<td><h4>IV.</h4></td>
							</tr>
							<tr>
								<td><b>18.</b> I learn from this teacher.</td>
								<td><input type="" name="row_score18"></td>
								<td><input type="" name="s18"></td>
							</tr>
							<tr>
								<td><b>19.</b> The teacher is fair in giving grades.</td>
								<td><input type="" name="row_score19"></td>
								<td><input type="" name="s19"></td>
							</tr>
							<tr>
								<td><b>20.</b> I will advise my friends to be "under" this teacher.</td>
								<td><input type="RS20" name="row_score20"></td>
								<td><input type="S20" name="s20"></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>				
		
					<br><br>
					<div id="sample">
						<script type="text/javascript" src="NiceEdit\nicEdit.js"></script> <script type="text/javascript">
						//<![CDATA[
						  bkLib.onDomLoaded(function() {
								new nicEditor({iconsPath : 'NiceEdit/nicEditorIcons.gif'}).panelInstance('area3');       
						  });
						  //]]>
						</script>
					  

						<h4>
							Input comment here:
						</h4>
						<textarea style="height: 200px; width: 900px; background-color: #FFFFFF;" cols="50" id="area3">
						</textarea>				  
					</div>		
					<br><br>

					<button type="submit" class="btn btn-primary"><i class="fa fa-share"></i> Submit</button>
					
					</form> 
				</div> <!-- End of div main -->
		</div><!-- End of div row col-md-8-->
		</div><!-- End of div row -->
		</div><!-- End of div container -->
		
</body>

</html>