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
		<div class="col-md-2"></div>
		<div class="row col-md-8">
				<div id="details" style="background-color: #6495ed;">
					<strong>Name of Faculty:</strong>
					<br><strong>Subject:</strong>
					<br><strong>Section:</strong>
					<br><strong>Schedule:</strong>
				</div>
				<div id="main" background-color: #6495es;>
				content here
				</div>
		</div>
		<div class="col-md-2"></div>
		</div>
		
		
</body>

</html>