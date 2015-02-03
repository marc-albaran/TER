<?php
require_once('../PgDatabase.php');
require_once('../Formatter.php');

class Student{
	public $idno;
	public $name;
	public $subjects;
		
	function __construct($idno) 
	{
		$db=new PgDatabase();
		$results=$db->retrieve("Select name from student where id_no='{$idno}'");
		$result =$db->retrieve("SELECT * FROM SUBJECTS WHERE ID_NO='{$idno}'");
		$this->set_idno($idno);
		$this->set_name($results);
		$this->set_subjects($result);
	}
	
	function set_idno($idno)
	{
		$this->idno=$idno;
	}
	function set_name($results)
	{
		foreach($results as $value){
			$this->name=$value['name'];
		}
	}
	function set_subjects($results)
	{
		$this->subjects=$results;
	}
	
	public function display_name_and_idno()
	{
		return "<strong>{$this->name}</strong>
				<p class=\"text-muted\">{$this->idno}</p>";
	}
	
	public function display_current_subjects()
	{
		$format=new Formatter();
		if($this->subjects)
		{
			return $format->table("Current Subjects",$this->subjects,["Subject Code","Subject Description","Section","Teacher"],"subjects");
		}
		else
		{
			return $format->error("No subjects to evaluate.");
		}
		
	}

}
?>