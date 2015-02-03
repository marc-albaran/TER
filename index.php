<?php

//url format upon redirection to TER system
//http://localhost:8080/TER/?uid=<insert idno here>
session_start();
require_once('TERController.php');

$uid=(isset($_GET['uid']) and !empty($_GET['uid']))?$_GET['uid']:NULL;
$controller=new TERController($uid);

if($controller->empty_id()){
	header('Location:http://web.msuiit.edu.ph/');
	exit();
}
else
{
	$controller->record_exists();
	$_SESSION['user_id']=$controller->get_id();
	$_SESSION['user_type']=$controller->user_type();
		
	switch ($_SESSION['user_type']) {
		case "a":
			header('Location:http://localhost:8080/TER/student/');
			break;
		case "b":
			header('Location:http://localhost:8080/TER/faculty/');
			break;
		case "c":
			header('Location:http://localhost:8080/TER/staff/');
			break;
		case "d":
			//faculty and admin
			header('Location:http://localhost:8080/TER/faculty/');
			exit();
		case "e":
			header('Location:http://web.msuiit.edu.ph/');
			exit();	
	 }
	 
}



?>
