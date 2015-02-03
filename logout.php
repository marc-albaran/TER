<?php
//session destroy here
//redirect to my iit home page for student/faculty/staff
session_start();
unset($_SESSION['user_type']);
unset($_SESSION['idno']);
session_destroy();
header('Location:http://x4150my.msuiit.edu.ph/my/');
?>