<?php
session_start();

require_once('Student.php');
 
	if(!isset($_SESSION['user_id'])){
		header('Location:http://web.msuiit.edu.ph/');
		exit();
	}
	//else if($_SESSION['user_type']=='b'){
		// header('Location:http://localhost:8080/TER/faculty/');
		// exit();
	// }else if($_SESSION['user_type']=='c'){
		// header('Location:http://localhost:8080/TER/staff/');
		// exit();
	// }else{
		// header('Location:http://localhost:8080/TER/faculty/');
		// exit();	
	// }
	//send uid to a function which will redirect to right page.
	$student=new Student($_SESSION['user_id']);
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
		<div class="row col-md-8" style="background-color: #fffbeb;">
				<div id="details" class="row" style="background-color: #7e0108;">
					<div class="col-md-3" align="center" style="background-color: #d3d3d3;border:1px;border-color:white;">
						<br>
						<img src="..\_assets\img\alt.jpg" alt="" class="img-responsive img-circle img-thumbnail" width="60%">					
						<br>
						<?php echo $student->display_name_and_idno();?>
					</div>
					
					<div class="col-md-9" align="left">
						TER cover photo here
					</div>
				<br>	
				</div>
				<br>
				<div align="center" class="table-responsive">
					<!--redirect to myiit homepage; destroy session-->	
					<div align="right">
						<a align="right" class="btn-md" href="../logout.php"><i class="fa fa-home"> My.IIT</i></a>
						<a align="right" class="btn-md" href="../help/?" target="_blank"><i class="fa fa-medkit"> Help</i></a>
					</div>
					
					<div>
						<!--
							insert error or success here
							if success/error variables are set,
							echo
						-->
					</div>
						<?php
							echo $student->display_current_subjects();
						?>
					
					
				<br><br>
				</div>
		</div>
		
		<div class="col-md-2"></div>
		</div>
		</div>
		<br><br>
		<footer>
			footer ko diri.
		</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function() {

    $('#subjects tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });

});
</script>
</body>

</html>