<?php
require_once('../PgDatabase.php');

class Faculty{
	public $idno;
	public $name;
	public $subjects=[];
	
	function __construct($idno) 
	{
		$db=new PgDatabase();
		$results=$db->retrieve("Select * from employee where id_no='{$idno}'");
		$this->set_idno($idno);
		$this->set_name($results);
		//$this->set_subjects($results);
	}
	function set_idno($idno)
	{
		$this->idno=$idno;
	}
	function set_name($results)
	{
		$this->name=$results->name;
	}
	function set_subjects(){
		
	}
	
	public function display_name_and_idno()
	{
		return "<strong>{$this->name}</strong>
				<p class=\"text-muted\">{$this->idno}</p>";
	}
	
	public function display_current_subjects()
	{
		//return ;
	}

}
?>