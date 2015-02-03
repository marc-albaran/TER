<?php
session_start();

$evaluation_id=isset($_GET['id'])?$_GET['id']:NULL;
$student_id=isset($_GET['student_id'])?$_GET['student_id']:NULL;
$subj_code=isset($_GET['subj_code'])?$_GET['subj_code']:NULL;
$subj_desc=isset($_GET['subj_desc'])?$_GET['subj_desc']:NULL;
$section=isset($_GET['section'])?$_GET['section']:NULL;
$teacher=isset($_GET['teacher'])?$_GET['teacher']:NULL;

// if()
// {
// if eval id is set	
// fetch evaluation id and student id;
// set session of eval_id and student;
// redirect to evaluation sheet;
	
// header('Location:http://localhost:8080/TER/student/EvaluationSheet.php');
// exit();
// }
// else
// {
// redirecto to somewhere.... :3

// header('Location:http://web.msuiit.edu.ph/');
// exit();
// }	

?>