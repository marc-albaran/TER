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
		$student=$db->retrieve($query);
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
			$this->user_type="e";
		}
	}
	// public function redirect($uid,$usertype,$currentpage)
	// {
		// if(!isset($_SESSION['user_id'])){
			// header('Location:http://web.msuiit.edu.ph/');
			// exit();
		// }else if($_SESSION['user_type']=='b'){
			// header('Location:http://localhost:8080/TER/faculty/');
			// exit();
		// }else if($_SESSION['user_type']=='c'){
			// header('Location:http://localhost:8080/TER/staff/');
			// exit();
		// }else{
			// header('Location:http://localhost:8080/TER/faculty/');
			// exit();	
		// }
	// }
	
	
}
?>