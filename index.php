<?php
require_once('PgDatabase.php');

class TERController{
	public $uid;
	public $user_type;
	
	function __construct($id)
	{
		$this->uid=$id;
	}
	
	function get_id()
	{
		return $this->uid;	
	}
	
	public function empty_id()
	{
		return $this->uid=='';
	}
	
	public function user_type()
	{
		return $this->user_type;
	}
	
	public function record_exists(){
		$db=new PgDatabase();
		$query="Select id_no from student where id_no='".$this->uid."'";
		$query2="Select user_type from employee where id_no='".$this->uid."'";
		$student=$db->retrieve($query1);
		$employee=$db->retrieve($query2);
		
		if($student)
		{
			$this->user_type="a";
		}
		else if($employee)
		{
			$this->user_type=$employee->user_type;
		}
		else
		{
			$this->user_type="d";
		}
	}
	
	
}
//url format upon redirection to TER system
//http://localhost:8080/TER/?uid=<insert idno here>
session_start();

$uid=(isset($_GET['uid']) and !empty($_GET['uid']))?$_GET['uid']:NULL;
$controller=new TERController($uid);

if($controller->empty_id()){
	header('Location:http://web.msuiit.edu.ph/');
	exit();
}
else
{
	$_SESSION['user_id']=$controller->get_id();
	$controller->record_exists();
	echo "hey";
	switch ($controller->user_type()) {
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
			header('Location:http://web.msuiit.edu.ph/');
			exit();
	 }
}



?>
