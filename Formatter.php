<?php

class Formatter{

	function __construct()
	{

	}
	public function table($tablename,$data,$heading,$tableid)
	{
		$tablename="<h4 align=\"left\"><font color=\"#7e0108\">{$tablename}</font></h4>";
		$table=$this->header($heading).$this->row($data);
	$table="<table id=\"{$tableid}\"class=\"table table-bordered table-hover\">{$table}</table>";
		return $tablename.$table;	
	}
	public function header($heading)
	{
		$header="";
		foreach ($heading as $data) 
		{
			$header.="<th bgcolor=\"#7e0108\"><font color=\"white\">{$data}</font></th>";
		}
		return "<thead><row>{$header}</row></thead>";
	}
	
	public function row($row)
	{
		$data="";
		foreach($row as $key=>$value)
		{
		$data.="<tr>{$this->cell($value)}</tr>";
		}
		return $data;
	}
	public function cell($array)
	{
		$data="";
		$id=array_shift($array);
		$student_id=array_shift($array);
		$temp=$array;
		$subj_code=array_shift($array);
		$subj_desc=array_shift($array);
		$section=array_shift($array);
		$teacher=array_shift($array);
		
		foreach($temp as $key=>$value)
		{
			$data.="<td><a href=\"http://localhost:8080/TER/student/preevaluation.php\
					?id={$id}
					&student_id={$student_id}
					&subj={$subj_code}
					&subj_desc={$subj_desc}
					&section={$section}
					&teacher={$teacher}\">
					{$value}
					</a></td>";
		}
		
		return $data;
	}
	public function error($msg)
	{
		return "<h5><b><font color=\"red\">{$msg}</font></b></h5>";
	}

	}
?>